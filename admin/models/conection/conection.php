<?php 
class Conexion
{
	private $usuario = 'root';
	private $password = 'root';
	private $host = 'localhost';
	private $db = '';
	
	public function conectar()
	{
		try {
            return $conexion = new PDO("mysql:host=$this->host;dbname=$this->db",$this->usuario,$this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        } catch (PDOException $e) {
            return $error_bd = "Error!: " . $e->getMessage();
        }
	}
}
?>