<?php

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $smarty = View::getInstance();

            $smarty->display('login.tpl');

            return;
        }

        global $parameter;
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $email = strtolower($email);

        if (strpos($email, '@') === false) {
            die("Email should be correct");
        }

        if (strlen($pass) < 8) {
            die("Password should be at least 8 characters");

        }

        $user = UserModel::findByEmail($email);
        if(!$user){
            die("No such user, try again");
        }
        $smarty = View::getInstance();
        $smarty->assign('user', $user);

        if(md5($pass) !== $user->getPassword()){
            die("You shall not pass!");
        }

        Session::start();
//        $_SESSION['user'] = $user;
//        Session:set('user', $user);

        header("Location: /");
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $smarty = View::getInstance();

            $smarty->display('register.tpl');

            return;
        }

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $user = new UserModel();
        $user->setEmail($email)
            ->setPassword($pass)
            ->save();

        session_start();
        setcookie('session_id', session_id(), time() + 60*60);

        header("Location: /");
    }

}