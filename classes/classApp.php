<?php
require_once __DIR__ . '/classDb.php';
/**
 * This class is used to make connection between database with the class Db stored in class files
 * The object Db can be used in order to provide a connection to the outside files
 */
class App {
    protected $db;
    
    public function __construct() {
        try {
            $con = new Db();
            $con->make_connection();
            $this->db = &$con->db;
        } catch (Exception $e) {
            echo $e->getMessage();
            die;
        }
    }
}
