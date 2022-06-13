
<?php 

class Dbh {

    // localhost
    private $host = "localhost";
    private $user = "thapasan_sangam11";
    private $pwd = "S@ng@m865421";
    private $dbName = "thapasan_hotel_eternity";

    protected function connect () {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        try {
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo "Connection failed". $e->getMessage();
        }
        return $pdo;
    }

}


