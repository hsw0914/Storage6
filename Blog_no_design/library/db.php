<?php

class DB extends PDO
{
    public function exec ($sql, array $data = null)
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($data);
        return $stmt;
    }
}