<?php
    class Post{
        private $conn;
        private$table = 'task';

        public $id;
        public $name;
        public $created_at;


        public function allocate_task()  {
            $query = 'SELECT
            t.id,
            a.id, 
            w.id
            FROM
            '.$this->table.' t
            LEFT JOIN
            worker w ON t.id=w.id
            ORDER BY
            t.id DESC';
            $payload = ' SELECT
            a.id,
            t.id,
            w.id,
            t.created_at,
            w.created_at
            FROM
            '.$this->table. ' t
            worker w, assest a ON a.id=t.id=w.id
            RIGHT JOIN
            t.id DESC'
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }