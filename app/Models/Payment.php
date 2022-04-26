<?php

namespace App\Models;

class Payment
{
    protected $id;
    protected $date_from;
    protected $date_to;
    protected $amout;
    protected $table = "payment";
    private $db;

    public function __construct()
    {
        $this->db = new \PDODb([
            'type' => 'mysql',
            'host' => DB_HOST,
            'username' => DB_USER,
            'password' => DB_PASS,
            'dbname' => DB_NAME,
            'port' => DB_PORT,
            'prefix' => DB_PREFIX,
            'charset' => 'utf8'
        ]);
    }

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }
    public function getDateFrom()
    {
        return $this->date_from;
    }
    public function getDateTo()
    {
        return $this->date_to;
    }
    public function getAmout()
    {
        return $this->amout;
    }

    // SET METHODS
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function setDateFrom(string $date_from)
    {
        $this->date_from = $date_from;
    }
    public function setDateTo(string $date_to)
    {
        $this->date_to = $date_to;
    }
    public function setAmout(int $amout)
    {
        $this->amout = $amout;
    }
    public function getAll()
    {
        return $this->db->get($this->table);
    }
    public function create(array $data)
    {
    }
    public function read(int $id)
    {
    }
    public function update(int $id, array $data)
    {
    }
    public function delete(int $id)
    {
    }
}
