<?php
//phpcs:ignore
namespace App\Models;

use App\Models\Model;
use PDO;

//phpcs:ignore
class NewUser extends Model{

    private static $_tableName = "newusers";

       
    /**
     * Construct
     * 
     * @param string $username username    
     * @param string $email    email
     * @param string $password password
     * @param string $gender   gender
     *
     * @return void
     */
    public function __construct(
        public string $username,
        public string $email,
        public string $password,
        public string $gender
    ) {

    }
    /**
     * save newuser to database
     *
     * @param string $column name of column
     * 
     * @return array
     */
    public function save():bool{
    
        if(!$this->_validateEmail()){
            return false;
        }
        $sql = "INSERT INTO "
        . self::$_tableName
        . " (name, email, password, gender)"
        . " VALUES (:username, :email, :password, :gender)";
        $statement = self::$conn->prepare($sql);
        $statement->bindValue(':username', $this->username);
        
        $statement->bindValue(':email', $this->email);

        $hashedPassword = $this->_hashPassword($this->password);
        $statement->bindValue(':password', $hashedPassword);

        $statement->bindvalue(':gender',$this->gender);
        
        $statement->execute();
        return true;
    }
        
    /**
     * _hashPassword
     * 
     * @param string $password unhashed password
     *
     * @return string
     */
    private function _hashPassword(
        string $password
    ): string {
        return password_hash($password, PASSWORD_DEFAULT);
    }
        
    /**
     * _verifyPassword
     *
     * @param string $password password
     * 
     * @return bool
     */
    private function _verifyPassword(string $password):bool
    {
        $hashedPassword = $this->_get("password");
        return password_verify($password, $hashedPassword);
    }
        
    /**
     * _get
     *
     * @param string $column name of column
     * 
     * @return array
     */
    private function _get(string $column): array
    {

        $sql = "SELECT $column FROM "
        . self::$_tableName
        . " WHERE email = :email";
        $statement = self::$conn->prepare($sql);
        $statement->bindValue(":email", $email);

        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    
    /**
     * _validateEmail
     *
     * @param  mixed $email
     * 
     * @return bool
     */
    private function _validateEmail(): bool{
        $sql = "SELECT COUNT(email) FROM "
        . self::$_tableName
        . " WHERE email = :email";
        $statement = self::$conn->prepare($sql);

        $statement->bindValue(":email", $this->email);
        $statement->execute();

        if ($statement->fetchColumn()){
            return false;
        }
        return true;
    }
}
?>