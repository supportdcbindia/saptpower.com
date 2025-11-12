<?php
class Redirect
{
    public static function to($module, $controller, $action, $queryVar = array(), $isMobile = 0)
    {
        $link = "index.php?dxm={$module}&dxc={$controller}&dxa={$action}";
        foreach ($queryVar as $_key => $_val) {
            $link .= "&{$_key}={$_val}";
        }

        if ($isMobile == 1) {
            $link .= "&token={$_SESSION['account_user']['token']}";
            $link .= "&userId={$_SESSION['account_user']['id']}";
        }
        header("location:" . $link);
        exit();
    }

    public static function toURL($url)
    {
        header("location:" . $url);
        exit();
    }


    public static function getLink($module, $controller, $action, $queryVar = array(), $isMobile = 0)
    {

        $link = "index.php?dxm={$module}&dxc={$controller}&dxa={$action}";
        foreach ($queryVar as $_key => $_val) {
            $link .= "&{$_key}={$_val}";
        }
        if ($isMobile == 1) {
            $link .= "&token={$_SESSION['account_user']['token']}";
            $link .= "&userId={$_SESSION['account_user']['id']}";
        }

        return $link;
        exit();
    }

    public static function setReturnURL($_URL)
    {
        $_SESSION['loginRedirect'] = $_URL;
    }

    public static function getReturnURL()
    {
        if (isset($_SESSION['loginRedirect'])) {
            return $_SESSION['loginRedirect'];
        } else {
            return '';
        }
    }
}
