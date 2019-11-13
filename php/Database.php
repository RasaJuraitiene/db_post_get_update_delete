<?php
/**
 * Created by PhpStorm.
 * User: tadaspetruskevicius
 * Date: 2019-11-11
 * Time: 09:34
 */

namespace database;

use PDO;
use PDOException;

class Database
{
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost:8889;dbname=geliu_uzsakymas', 'root', 'root');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "DB Connection Failed: " . $e->getMessage();
        }
    }

    // Select
    public function select($sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insert
    public function insert($sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $this->connection->lastInsertId();
    }

    // Update
    public function update($sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $statement->rowCount();
    }

    // Remove
    public function remove($sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $statement->rowCount();
    }

    function __destruct()
    {
        $this->connection = null;
    }
}

