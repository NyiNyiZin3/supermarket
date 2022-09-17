<?php
// phpcs:ignore
namespace App\Models;

use DateTime;
use PDO;
// phpcs:ignore
abstract class Model {
    public static PDO $conn;
    public int $id;
    public DateTime $created_at;
    public DateTime $updated_at;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct() 
    {
    }
}
