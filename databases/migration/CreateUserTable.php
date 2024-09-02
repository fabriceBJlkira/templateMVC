<?php

class CreateUserTable
{
    /**
     * fonction to create users,
     * tsy mitovy kely ny query ra ohatra ka ampiasa SQLITE, ito query ana MYSQL
     * @param mixed $pdo
     * @return void
     */
    public static function createUser($pdo)
    {
        try {
            $query = "CREATE TABLE IF NOT EXISTS users (
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                nom VARCHAR(255) NOT NULL,
                prenom VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

            $stm = $pdo->prepare($query);

            $stm->execute();
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}