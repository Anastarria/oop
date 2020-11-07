<?php


class Session
{
    private static $self;
    public static function  getSession():self
    {
        return self::$self ?? self::$self = new Session();
    }

    private function __construct()
    {
        if ($_COOKIE['session_id'] ?? []) {
            session_id($_COOKIE['session_id']);
            session_start();
        } else {
            $sessionId = md5(rand(1,100000) . md5(time()));
            session_id($sessionId);
            session_start();
            setcookie('session_id', $sessionId, time() + 3600, '/');
        }
    }

    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key, $default = null)
    {
         return $_SESSION[$key] ?? $default;
    }

    public function terminate(string $key): void
    {
        unset($_SESSION[$key]);
    }
}