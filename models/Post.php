<?php
    class Post{
        private $conn;
        private$table = 'assest';

        public $id;
        public $name;
        public $created_at;


        public function read()  {
            $query = 'SELECT
            a.id,
            t.id
            FROM
            '.$this->table.' a
            LEFT JOIN
            task t ON a.id=t.id
            ORDER BY
            a.id DESC';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }