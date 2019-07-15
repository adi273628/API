<?php
    class Post{
        private $conn;
        private$table = 'task';

        public $id;
        public $name;
        public $frequency;


        public function task()  {
            $query = 'SELECT
            t.id,
            w.id
            FROM
            '.$this->table.' t
            LEFT JOIN
            worker w ON t.id=w.id
            ORDER BY
            t.id DESC';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }