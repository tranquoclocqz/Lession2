<?php

namespace App\Models;
use App\Database;

class Payment extends Database
{
    protected $id;
    protected $date_from;
    protected $date_to;
    protected $amout;
    protected $table = "payment";
    private $db;

    public function __construct()
    {
        $db = new Database();
        $this->db = $db->connect();
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
