<?php 
class Conexion
{
	private $usuario = 'oxidocs_uls';
	private $password = 'oxipassword';
	private $host = 'oxidocs.com';
	private $db = 'oxidocs_uls';
	
	public function conectar()
	{
		try {
            return $conexion = new PDO("mysql:host=$this->host;dbname=$this->db; port=3306",$this->usuario,$this->password, array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage();
        }
	}
}
?>