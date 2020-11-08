<?php


class PostController
{
    public function make()
    {
        UserModel::checkAuthorization();

        $title = $_POST['title'];
        $text = $_POST['text'];
        Session::getSession();
        $email = $_SESSION['user']['email'];

        $post = new PostModel();
        $post->setTitle($title)
            ->setText($text)
            ->setAuthorEmail($email)
            ->save();

        header("Location: /post/show");

    }

    public function makePage()
    {
        UserModel::checkAuthorization();
        $smarty = View::getInstance();
        $smarty->display('posts.tpl');

    }

    public function show()
    {
        UserModel::checkAuthorization();
        $smarty = View::getInstance();

        $posts = PostModel::all();

        $smarty->assign('posts', $posts);
        $smarty->display('showPosts.tpl');
    }

// то что ниже можно делать только для своих собственных постов
    public function update()
    {
        UserModel::checkAuthorization();
        $newtitle = $_POST['title'];
        $newtext = $_POST['text'];
        $newPost = new PostModel();
        $newPost->setTitle($newtitle)
            ->setText($newtext)
            ->update();


        header("Location: /post/show");
    }

    public  function updatePage()
    {
        UserModel::checkAuthorization();
        global $parameter;
        $smarty = View::getInstance();

        $post = PostModel::find((int) $parameter);

        if (!$post) {
            die("Such post does not exist [404 error]");
        }
        $post->getAuthorEmail();
        $post->checkPostOwner();

        $smarty->assign('post', $post);
        $smarty->display('updatepage.tpl');
    }

    public function terminate()
    {
        UserModel::checkAuthorization();
        global $parameter;

        $post = PostModel::find($parameter);
        $post->getAuthorEmail();
        $post->checkPostOwner();
        if (!$post) {
            die("Such post does not exist [404 error]");
        }

        $post->delete();
        header("Location: /post/show");
    }
}