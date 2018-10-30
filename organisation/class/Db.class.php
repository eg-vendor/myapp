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

    public function query ($query,$arg) {
        $statement_object = $this->pdo->prepare ($query);
        $statement_object->bindValue (1,$arg,\PDO::PARAM_STR);
        $statement_object->execute ();
        return $statement_object->fetchAll (\PDO::FETCH_ASSOC);
    }

}


?>
