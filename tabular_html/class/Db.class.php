<?php

namespace Myapp;

class Db {

    private $pdo;
    private $dsn;

    public function __construct ($dsn,$usr,$pwd) {
        $this->pdo = new \PDO ($dsn,$usr,$pwd);
        $this->dsn = $dsn;
    }

    public function showDsn ( ) {
        return $this->dsn;
    }

    public function connected ( ) {
        return ($this->pdo!=null);
    }

    public function query ($query) {
        $statement_object = $this->pdo->prepare ($query);
        $statement_object->execute ();
        return $statement_object->fetchAll (\PDO::FETCH_ASSOC);
    }

}


?>
