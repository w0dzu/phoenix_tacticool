<?php
class Dbh {
    private $host = "localhost";
    private $user = "phoenix_tacticool";
    private $pwd = "phoenix_tacticool";
    private $dbName= "phoenix_tacticool";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo =  new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //what the fuck is that?!

        return $pdo;
    }
}