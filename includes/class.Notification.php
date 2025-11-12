<?php
class Notification
{

    private static function initialize()
    {
        if (!$_SESSION['error']) {
            $_SESSION['error'] = array();
        }
        if (!$_SESSION['message']) {
            $_SESSION['message'] = array();
        }
    }

    public static function pushError($_error)
    {
        if (!$_SESSION['error']) {
            $_SESSION['error'] = array();
        }
        array_push($_SESSION['error'], $_error);
    }

    public static function pushMessage($_message)
    {
        if (!$_SESSION['message']) {
            $_SESSION['message'] = array();
        }
        array_push($_SESSION['message'], $_message);
    }

    public static function displayError()
    {
        $errorStr = "";
        if (isset($_SESSION['error']) && count($_SESSION['error']) > 0) {
            $errorStr .= '<div class="alert alert-danger mt-3" role="alert"><ul>';
            foreach ($_SESSION['error'] as $_error) {
                $errorStr .= '<li>' . $_error . '</li>';
            }
            $errorStr .= '</ul></div>';
        }
        echo $errorStr;
    }

    // Nathan 2023 05 23
    public static function displayErrorAjax()
    {
        $errorStr = "";
        if (isset($_SESSION['error']) && count($_SESSION['error']) > 0) {
            $errorStr .= '<div class="alert alert-danger mt-3" role="alert"><ul>';
            foreach ($_SESSION['error'] as $_error) {
                $errorStr .= '<li>' . $_error . '</li>';
            }
            $errorStr .= '</ul></div>';
        }
        Notification::clean();
        return $errorStr;
    }

    public static function displayMessage()
    {
        $errorStr = "";
        if (isset($_SESSION['message']) && count($_SESSION['message']) > 0) {
            $errorStr .= '<div class="alert alert-success mt-3" role="alert"><ul>';
            foreach ($_SESSION['message'] as $_message) {
                $errorStr .= '<li>' . $_message . '</li>';
            }
            $errorStr .= '</ul></div>';
        }
        echo $errorStr;
    }


    public static function display()
    {
        Notification::displayError();
        Notification::displayMessage();
        Notification::clean();
    }

    public static function clean()
    {
        $_SESSION['error'] = array();
        $_SESSION['message'] = array();
    }
}
