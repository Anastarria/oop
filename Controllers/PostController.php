<?php


class PostController
{
    public function make()
    {

        $title = $_POST['title'];
        $text = $_POST['text'];
        Session::getSession();
        $email = $_SESSION['user']['email'];

        $post = new PostModel();
        $post->setTitle($title)
            ->setText($text)
            ->setAuthorEmail($email)
            ->save();

    }

    public function makePage()
    {
            $smarty = View::getInstance();
            $smarty->display('posts.tpl');

    }

// то что ниже можно делать только для своих собственных постов
    public function update()
    {

    }

    public function delete()
    {

    }
}