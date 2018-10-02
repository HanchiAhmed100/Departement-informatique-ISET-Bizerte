<?php
	include_once 'conn.class.php';
 	class partenaire{
 	 	private $conn;

	  	public function __construct(){
 	 		$db = new conn;
          	$connect = $db->connect();
          	$this->conn = $connect;
 	 	}

 	 	public function SetPartenaire($Sname,$logo ,$create_at ){
			$stmt = $this->conn->prepare ("INSERT INTO partenaire ( Sname , logo ,create_at) VALUES ( :Sname, :logo,:create_at )");
			$stmt -> bindParam(':Sname',$Sname);
			$stmt -> bindParam(':logo', $logo);
			$stmt -> bindParam(':create_at', $create_at);
			$stmt -> execute();
        }
          
 	 	public function LoadMorePartenaire(){
 	 		$stmt = $this->conn->prepare("SELECT * FROM partenaire order by create_at DESC");
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}
	 	public function Getpartenaire(){
 	 		$stmt = $this->conn->prepare("SELECT * FROM partenaire order by create_at DESC");
 	 		$stmt ->execute();
 	 		return $stmt;
		  }
		  
 	 	public function UpdatePatenaire($Sname,$logo){
 	 		$stmt = $this->conn->prepare("UPDATE partenaire SET Sname=:Sname , logo=:logo WHERE id=:id");
			$stmt -> bindParam(':Sname',$Sname);
			$stmt -> bindParam(':logo', $logo);
 	 		$stmt ->execute();
 	 	}
 	 	public function DeleteEvents($id){
 	 		$stmt = $this->conn->prepare("DELETE FROM partenaire WHERE id=:id ");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
 	 	}

 	}
?>