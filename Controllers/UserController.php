<?php


class UserController
{

    public function index()
    {
        $smarty = View::getInstance();

        $users = UserModel::all();

        $now = date("H:i:s", time());

        $smarty->assign('users', $users);
        $smarty->assign('time', $now);
        $smarty->display('index.tpl');
    }

    public function info()
    {
        global $parameter;

        $smarty = View::getInstance();

        $user = UserModel::find((int) $parameter);

        if (!$user) {
            die("User not found [404 error]");
        }

        $smarty->assign('user', $user);
        $smarty->display('user.tpl');
    }

}