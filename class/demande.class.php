<?php
	include_once 'conn.class.php';
 	class demande{
 	 	private $conn;

	  	public function __construct(){
 	 		$db = new conn;
          	$connect = $db->connect();
          	$this->conn = $connect;
 	 	}

 	 	public function SetSuggestion($nom,$mail,$tel,$classe,$suject,$body, $create_at,$Ip,$host){
			try{
			$stmt = $this->conn->prepare ("INSERT INTO demande (nom,mail,tel,classe,suject,body,create_at,AdressIp,hostName) VALUES (:nom,:mail,:tel,:classe,:suject,:body,:create_at,:Ip,:host)");
			$stmt -> bindParam(':nom',$nom);
			$stmt -> bindParam(':mail', $mail);
			$stmt -> bindParam(':tel', $tel);
			$stmt -> bindParam(':classe', $classe);
			$stmt -> bindParam(':suject', $suject);
			$stmt -> bindParam(':body', $body);
			$stmt -> bindParam(':create_at', $create_at);
			$stmt -> bindParam(':Ip', $Ip);
			$stmt -> bindParam(':host', $host);
			$stmt -> execute();
			header('location:../suggestion.php?M=Set');
			}catch(Exception $e){
					header('location:../suggestion.php?M=erreur');
			}
 	 	}
 	 	public function GetOneNew($id){
 	 		$stmt = $this->conn->prepare("SELECT * FROM demande WHERE id=:id");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
 	 		return $stmt;
		}
		public function setSeen($id){
			$stmt = $this->conn->prepare("UPDATE demande SET seen = 1 WHERE id=:id ");
			$stmt -> bindParam(':id', $id);
			$stmt-> execute();
		}
		public function GetCountUnSeen(){
			$stmt = $this->conn->prepare("SELECT COUNT(*)  as nbr FROM demande WHERE seen = 0");
			$stmt-> execute();
			return $stmt;
		}
		public function GetCountSeen(){
			$stmt = $this->conn->prepare("SELECT COUNT(*) as nbr FROM demande WHERE seen = 1");
			$stmt-> execute();
			return $stmt;
		}
		public function GetSuggestionUnSeen(){
			$stmt = $this->conn->prepare("SELECT * FROM demande  WHERE seen = 0");
			$stmt ->execute();
			return $stmt;
		}  
		public function GetSuggestionSeen(){
			$stmt = $this->conn->prepare("SELECT * FROM demande WHERE seen = 1");
			$stmt ->execute();
			return $stmt;
		}  

 	 	public function Delete($id){
			$stmt = $this->conn->prepare("DELETE FROM demande WHERE id=:id ");
			$stmt -> bindParam(':id', $id);
			$stmt ->execute();
				
		}

		public function GetIp() {
			// IP si internet partagé
			if (isset($_SERVER['HTTP_CLIENT_IP'])) {
				return $_SERVER['HTTP_CLIENT_IP'];
			}
			// IP derrière un proxy
			elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				return $_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			// Sinon : IP normale
			else {
				return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
			}
		}
 	}
?>