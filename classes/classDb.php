<?php
/**
 * This class is used for database operations inside other clasees
 * The connection object is created unser App Class for use in other classes
 */
class Db {
    public $db;
    
    public function make_connection() {
        try {
            $this->db = @mysqli_connect("localhost", "root", "", "form");              //This is to connect user with the username and password
            
            if (!$this->db) {
                throw new Exception('Database Connection Failed!!');
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
