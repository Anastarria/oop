<?php

class AuthController
{
    public function loginPage()
    {
        $smarty = View::getInstance();
        $smarty->display('login.tpl');

        return;
    }

    public function login()
    {
        $session = Session::getSession();

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

        if(md5($pass) !== $user->getPassword()){
            die("You shall not pass!");
        }
        $session->set('user', [
            'email' => $email,
            'password' => $pass
        ]);
        print_r($_SESSION['user']['email']);
        die();
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
        $session = Session::getSession();
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $user = new UserModel();
        $user->setEmail($email)
            ->setPassword($pass)
            ->save();

        $session->get('user', [
            'email' => $email
        ]);


        header("Location: /");
    }

    public  function terminate()
    {
        global $parameter;

        $user = UserModel::find($parameter);

        if (!$user) {
            die("User not found [404 error]");
        }

        $user->delete();
        header("Location: /user");
    }

}