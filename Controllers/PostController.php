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

        header("Location: /post/show");

    }

    public function makePage()
    {
            $smarty = View::getInstance();
            $smarty->display('posts.tpl');

    }

    public function show()
    {
        $smarty = View::getInstance();

        $posts = PostModel::all();

        $smarty->assign('posts', $posts);
        $smarty->display('showPosts.tpl');
    }

// то что ниже можно делать только для своих собственных постов
    public function update()
    {

    }

    public function terminate()
    {
        global $parameter;

        $post = PostModel::find($parameter);

        if (!$post) {
            die("Such post does not exist [404 error]");
        }

        $post->delete();
        header("Location: /user");
    }
}