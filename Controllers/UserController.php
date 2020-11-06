<?php

class UserController
{

    public function index()
    {
        $smarty = View::getInstance();
        $users = UserModel::all();
        $now = date("H:i:s", time());

        $smarty->assign('users', $users);
        $smarty->assign('now', $now);
        $smarty->display('index.tpl');
    }

    public function info()
    {
        global $parameter;
        $smarty = View::getInstance();

        $user = UserModel::find((int) $parameter);

        if(!$user){
            die("User not found");
        }
        $smarty->assign('user', $user);
        $smarty->display('user.tpl');
    }

    public function delete()
    {
        global $parameter;

        $user = UserModel::find($parameter);
        if(!$user){
            die("User not found");
        }
        $user->delete();
        header("Location: /user");
    }

    public function create()
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $user = new UserModel();
        $user->setEmail($email)
            ->setPassword($pass)
            ->save();
        session_start();
        setcookie('session_id', session_id(), time() + 60*60);
        header("Location: /user");
    }

    public function update()
    {
        global $parameter;
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $user = UserModel::find($parameter);
        if(!$user){
            die("User not found");
        }
        $user->setEmail($email)
            ->setPassword($pass)
            ->save();
    }
}