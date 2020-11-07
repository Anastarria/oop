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
}
//    public function getCreatedAt(): string
//    {
//        return $this->created_at;
//    }

