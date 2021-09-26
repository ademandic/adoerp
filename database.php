<?php
/**
 * Author: Adem Andiç
 * Database Class via PDO
 */
class Database
{
    # Mysql global değişkeni
    protected $db;
    # Mssql global değişkeni (Mikro için)
    protected $mssql_db;

    public function __construct()
    {
        # Mysql Connection
        try
        {
            $this->db = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER, DB_PASS);
            $this->db->exec("SET CHARSET UTF8");
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }

        # Mssql Connection
    }
}
?>