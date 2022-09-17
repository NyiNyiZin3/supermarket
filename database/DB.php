<?php
// phpcs:ignore
namespace Database;
use PDO;
// phpcs:ignore
class DB {

    private string $_dsn;
    //phpcs:ignore
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        private string $_DB_NAME = "supermarket",
        private string $_DB_USERNAME = "supermarket_admin",
        private string $_DB_PASSWORD = "passwd",
        private string $_DB_PORT = "3306",
        private string $_DB_HOST = "mariadb",
    ) {
        $this->_dsn = "mysql:host=$this->_DB_HOST;dbname=$this->_DB_NAME";
    }
    /**
     * __construct
     *
     * @return PDO
     */
    public function connect() 
    {
        try {
            $conn = new PDO(
                $this->_dsn,
                $this->_DB_USERNAME,
                $this->_DB_PASSWORD           
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return null;
    }
}


