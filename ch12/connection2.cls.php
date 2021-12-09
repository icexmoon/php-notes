<?php

/**
 * modified from https://www.php.net/manual/zh/language.oop5.magic.php
 */
class Connection
{
    protected $link;
    private $server, $username, $password, $db;

    public function __construct($server, $username, $password, $db)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->connect();
    }

    private function connect()
    {
        $con = mysqli_connect($this->server, $this->username, $this->password, $this->db);
        if (!$con) {
            throw new Exception("db connect error.", E_ERROR);
        }
        $this->link = $con;
    }

    public function __serialize(): array
    {
        return array(
            'server' => $this->server,
            'name'  => $this->username,
            'pass' => $this->password,
            'db' => $this->db,
        );
    }

    public function __unserialize(array $data): void
    {
        $this->server = $data['server'];
        $this->username = $data['name'];
        $this->password = $data['pass'];
        $this->db = $data['db'];
        $this->connect();
    }

    public function qurey($sql)
    {
        $result = mysqli_query($this->link, $sql);
        $lines = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $lines;
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }
}
