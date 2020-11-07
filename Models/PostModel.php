<?php


class PostModel
{
    private $id;
    private $title;
    private $author_email;
    private $created_at;
    private $text;
    private $db;

    public function setAuthorEmail($email)
    {
        $this->authorEmail = $email;

        return $this;
    }

    public function getAuthorEmail(): ?string
    {
        return $this->email;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    private function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function save(): bool
    {
        if (!$this->title) {
            die("Title cannot be empty!");
        }

        if (!$this->text) {
            die("This field cannot be empty");
        }

        return $this->create();
    }

    private function create(): bool
    {
        $db = DB::getInstance();
        $db->query("
          INSERT 
          INTO posts 
          SET 
            title = '{$this->title}', 
            text = '{$this->text}',
            author_email = '{$this->authorEmail}'");

        $this->setId($db->insert_id);

        header("Location: /");

        return empty($db->error);
    }

    private function update()
    {

    }

    public function setCreatedAt(string $dateTime): self
    {
        $this->created_at = $dateTime;

        return $this;
    }

    public static function all()
    {
        $db = DB::getInstance();

        return $db
                ->query("SELECT id, title, author_email, text, created_at FROM posts")
                ->fetch_all(MYSQLI_ASSOC) ?? [];
    }

    public static function findByEmail(string $email): ?self
    {
        return self::findUserByFieldAndValue('email', $email);
    }

    public static function find(int $id): ?self
    {
        return self::findUserByFieldAndValue('id', $id);
    }

    public static function findUserByFieldAndValue(string $field, string $value)
    {
        $db = DB::getInstance();
        $res = $db->query("
          SELECT * 
          FROM posts 
          WHERE `$field` = '$value' 
          LIMIT 1");

        $arrayPosts = $res->fetch_assoc();

        if (empty($arrayPosts)) {
            return null;
        }

        $post = new self();

        $post
            ->setTitle($arrayPosts['title'])
            ->setId($arrayPosts['id'])
            ->setAuthorEmail($arrayPosts['author_email'])
            ->setText($arrayPosts['text']);

        return $post;
    }

    public function delete(): bool
    {
        Session::getSession();
        if (!$this->author_email === $_SESSION['user']['email']){
            die("You are not allowed to remove posts created by other users");
        }

        if (!$this->id) {
            die("Post does not exits in DB!");
        }

        $db = DB::getInstance();
        $db->query("DELETE FROM posts WHERE id = {$this->id} LIMIT 1");

        return (bool) $db->affected_rows;
    }

}

