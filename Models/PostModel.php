<?php


class PostModel
{
    private $id;
    private $name;
    private $author_email;
    private $created_at;
    private $text;

    public function setEmail(string $author_email): self
    {
        $this->email = trim(strip_tags($author_email));

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setName()
    {

    }

    public function getName()
    {
        return $this->name;
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
        if (!$this->email) {
            die("Email not set!");
        }

        if (!$this->password) {
            die("Password Not set");
        }

        if ($this->id) {
            return $this->update();
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
            name = '{$this->name}', 
            author_email = '{$this->author_email}'");

        $this->setId($db->insert_id);

        return empty($db->error);
    }

    private function update()
    {
        $db = DB::getInstance();
        $db->query("
          UPDATE 
            users 
          SET 
            email = '{$this->email}', 
            password = '{$this->password}'
          WHERE id = {$this->id} LIMIT 1");

        return empty($db->error);
    }

    public function delete(): bool
    {
        if (!$this->id) {
            die("User should exits in DB!");
        }

        $db = DB::getInstance();
        $db->query("DELETE FROM users WHERE id = {$this->id} LIMIT 1");

        return (bool) $db->affected_rows;
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
          FROM users 
          WHERE `$field` = '$value' 
          LIMIT 1");

        $arrayUser = $res->fetch_assoc();

        if (empty($arrayUser)) {
            return null;
        }

        $user = new self();

        $user
            ->setPassword($arrayUser['password'], false)
            ->setId($arrayUser['id'])
            ->setEmail($arrayUser['email'])
            ->setCreatedAt($arrayUser['created_at']);

        return $user;
    }

    public function setCreatedAt(string $dateTime): self
    {
        $this->created_at = $dateTime;

        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public static function all(): array
    {
        $db = DB::getInstance();

        return $db
                ->query("SELECT id, email, created_at FROM users")
                ->fetch_all(MYSQLI_ASSOC) ?? [];

    }
}