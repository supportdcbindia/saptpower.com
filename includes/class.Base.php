<?php
require_once(__DIR__ . '/DB/Db.Class.php');
class Base
{

    protected $dbName; //New
    protected $db;
    protected $dbFields = array();
    protected $tableName;
    protected $primaryKey = "id";
    protected $currentId;
    public function __construct($id = null)
    {

        $this->db = new DB();
        $this->dbName = $this->db->getDbName(); //New
        $this->dbFields = $this->getTableField(); //New

        if (!is_null($id)) {
            $this->currentId = $id;
            $sql = "select * from {$this->tableName} where `" . $this->primaryKey . "` = '" . $id . "'";
            $row = $this->db->row($sql);
            $this->setObjFields($row);
        }
    }
    public function setObjFields($row)
    {
        if ($row) {
            foreach ($this->dbFields as $val) {
                call_user_func(array($this, "set$val"), $row[$val]);
            }
        }
        return $row;
    }
    public function all($where = " 1=1 ", $order, $start = 0, $length = null)
    {
        $data = array();
        $sql = "select * from {$this->tableName} where " . $where;
        if ($order) {
            $sql .= " order by " . $order;
        }
        if ($length) {
            $sql .= " limit " . $start . ", " . $length;
        }
        return $this->db->query($sql);
    }

    public function fetchSingle($sql)
    {
        return $this->db->single($sql);
    }

    public function customQuery($sql)
    {
        return $this->db->query($sql);
    }

    public function getTableField() //New
    {
        $temp = array();
        $sql = "SELECT `COLUMN_NAME` 
				FROM `INFORMATION_SCHEMA`.`COLUMNS` 
				WHERE `TABLE_SCHEMA`='{$this->dbName}' 
				AND `TABLE_NAME`='{$this->tableName}';";
        $fields = $this->customQuery($sql);
        foreach ($fields as $field) {
            array_push($temp, $field['COLUMN_NAME']);
        }

        return $temp;
    }

    public function addDb()
    {
        $sql = "insert into {$this->tableName} set";
        foreach ($this->dbFields as $val) {
            
            if ($val == "id") {
                $sql .= " `{$val}` = 0,";
            } elseif ($val == $this->primaryKey) {
                $sql .= " `{$val}` = 0,";
            } elseif (is_null(call_user_func(array($this, "get$val")))) {
                $sql .= " `{$val}` = NULL,";
            } else {
                $sql .= " `{$val}` = '" . addslashes((string)call_user_func(array($this, "get$val"))) . "',";
            }
        }

        //return $sql;

        $sql = rtrim($sql, ",");
        $this->db->query($sql);
        $id = $this->db->lastInsertId();
        return $id;
    }
    public function updateDb($fieldsArray = array(), $where)
    {

        $updateFields = array();
        if (count($fieldsArray) == 0) {
            $updateFields = $this->dbFields;
        } else {
            $updateFields = $fieldsArray;
        }
        $sql = "update {$this->tableName} set ";
        foreach ($updateFields as $val) {
            if (is_null(call_user_func(array($this, "get$val")))) {
                $sql .= " `{$val}` = NULL,";
            } else {
                $sql .= " `{$val}` = '" . addslashes((string)call_user_func(array($this, "get$val"))) . "',";
            }
        }

        $sql = rtrim($sql, ",");

        $sql .= " where " . $where;

        $this->db->query($sql);
        return true;
    }
    public function deleteDb($where)
    {
        $sql = "delete from {$this->tableName} where " . $where;
        $this->db->query($sql);
        return true;
    }
    public function initialized($where)
    {
        $_pKey = (isset($this->primaryKey) ? $this->primaryKey : 'id');
        $sql = "select " . $_pKey . " from {$this->tableName} where " . $where;
        $tmp = $this->fetchSingle($sql);
        self::__construct($tmp);
    }

    /* dynamic function server */
    function __call($method, $arguments)
    {
        if (!method_exists($this, $method)) {
            $name = lcfirst(substr($method, 3, strlen($method) - 3));
            $mtype = substr($method, 0, 3);

            if (!in_array($name, $this->dbFields)) {
                //this attribute is not defined!
                print("In " . get_class($this) . " class '$method' name method is not defined!");
                die();
            }

            if ($mtype == "set") {

                $callbacks = function ($matches) { //method
                    return $matches;
                };
                $callbacks($this->$name = $arguments[0]);

                $this->{$name} = $arguments[0]; //property
            }

            if ($mtype == "get") {
                if ($this->currentId != "") {
                    $callbacks = function ($matches = null) { //method
                        //$matches = ($matches=="" ? null : $matches);
                        return $matches;
                    };
                    return $callbacks($this->$name);
                } else if (property_exists($this, $name)) {
                    return $this->{$name};
                } else {
                    return '';
                }
                //$this->{$name}; //property
            }
        }
    }
}
