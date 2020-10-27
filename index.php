<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

interface Calling
{
   public function call(string $from, string $to): void;
}

class User
{
    public function setUser(string $username)
    {
        return $this->username = $username;
    }

    public  function getUser()
    {
        return $this->username;
    }

    public function makeCall(Calling $phone)
    {
        date_default_timezone_set('Europe/Kiev');
        $date = date('d-m-y h:i:s');

       $this->makecalls = $phone;
       $thename = $this->getUser();
       file_put_contents("callinglog.txt", "Ok, the user $thename called from '{$phone->from}' to '{$phone->to}' on $date." . PHP_EOL, FILE_APPEND);
    }
}

class Phone implements Calling
{

    public function call(string $from, string $to): void
    {
        $this->from = $from;
        $this->to = $to;
    }
}

$nastia = new User();
$nastia->setUser("Karma");
$phone = new Phone();
$phone->call("+3809" . rand(10000000, 99999999), "+3809" . rand(10000000, 99999999));
$nastia->makeCall($phone);

print_r($nastia);
