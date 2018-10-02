<?php
	include_once 'conn.class.php';
 	class club{
 	 	private $conn;

	  	public function __construct(){
 	 		$db = new conn;
          	$connect = $db->connect();
          	$this->conn = $connect;
 	 	}

 	 	public function Setclub($userid,$title ,$body, $create_at){
			$stmt = $this->conn->prepare ("INSERT INTO club (userid,title, body, create_at) VALUES (:userid,:title ,:body, :create_at )");
			$stmt -> bindParam(':userid',$userid);
			$stmt -> bindParam(':title', $title);
			$stmt -> bindParam(':body', $body);
			$stmt -> bindParam(':create_at', $create_at);
			$stmt -> execute();
 	 	}
 	 	public function LoadMore(){
 	 		$stmt = $this->conn->prepare("SELECT * FROM club order by create_at DESC");
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}

 	 	public function GetOneClub($id){
 	 		$stmt = $this->conn->prepare("SELECT * FROM club WHERE id=:id");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
 	 		return $stmt;
        }
          
        public function UpdateClub($title,$body,$id){
 	 		$stmt = $this->conn->prepare("UPDATE club SET title=:title , body=:body WHERE id=:id");
 	 		$stmt -> bindParam(':title',$title);
 	 		$stmt -> bindParam(':body', $body);
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
        }

        public function DeleteClub($id){
 	 		$stmt = $this->conn->prepare("DELETE FROM club WHERE id=:id ");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
		  }
		
		  
		public function setProfileCover($id,$pic){
			$check = $this->conn->prepare("UPDATE club SET img=:pic WHERE id=:id");
			$check -> bindParam(":id",$id);
			$check -> bindParam(":pic",$pic);
			$check -> execute();
		}

 	}
?>