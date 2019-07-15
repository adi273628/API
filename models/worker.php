<?php
    class Post{
        private $conn;
        private$table = 'worker';

        public $id;
        public $name;
        public $task;


        public function worker()  {
            $query = 'SELECT
            w.id,
            t.id
            FROM
            '.$this->table.' w
            LEFT JOIN
            task t ON w.id=t.id
            ORDER BY
            w.id DESC';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }