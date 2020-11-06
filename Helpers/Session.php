<?php


class Session
{
    public static function start()
    {
        if (isset($_COOKIE['session_id'])) {
            session_id($_COOKIE['session_id']);
            session_start();
        } else {
            session_start();
            setcookie('session_id', session_id(), time() + 60*60);
        }

    }


    public static function set($key,$value)
    {
       $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if(isset($_SESSION[$key]) ) {
            return $_SESSION[$key];
        }
        return NULL;
    }

    public function terminate()
    {
        session_destroy();
    }

}