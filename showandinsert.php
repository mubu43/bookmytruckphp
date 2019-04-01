<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPWD", "");
define("DB", "formdb");

date_default_timezone_set("Asia/Kolkata");
error_reporting(E_ALL ^ E_DEPRECATED);

class DB_FUNCTIONS {

	public function __construct(){
	
		$this->db=@mysqli_connect(DBHOST, DBUSER, DBPWD, DB);
	
	}
	
	public function signup($n,$un,$p,$t){
		
		$truckquery="INSERT INTO t4a (UName, Pwd, Name, Type) VALUES ('$un', '$p', '$n', '$t')";
		$res=@mysqli_query($this->db,$truckquery);
		if($res){
			$_SESSION['UName']=$un;
			$_SESSION['Type']=$t;
			header("location:index.php");
		}
		else{
			echo 'ERROR<br>';
		}
	
		
	}
	
	public function login($ln,$lp){
		
		$truckquery="SELECT * FROM t4a WHERE UName='$ln' AND Pwd='$lp';";
		$res=@mysqli_query($this->db,$truckquery);
		$row=@mysqli_fetch_array($res);
		$type=$row[4];
		if($row){
			$_SESSION["UName"]=$ln;
			$_SESSION["Type"]=$type;
			header("location: index.php");
		}
		else{
			echo 'ERROR<br>';
		}
	
		
	}
	
	
	
	public function inserttruckdata($usr,$tb,$tw,$te,$tn){
		
		$truckquery="INSERT INTO t4b (UName, TBrand, TWheels, TEngine, TStorage) VALUES ('$usr', '$tb', '$tw', '$te', '$tn')";
		$res=@mysqli_query($this->db,$truckquery);
		if($res){
			echo '<h3>NEW RECORD INSERTED</h3><br>';
			header("location: index.php");
		}
		else{
			echo '<h3>Insertion Failed</h3><br>';
		}
	
	}
	
	public function showtruckdata($escapedname){
		$truckquery="SELECT * FROM t4b WHERE UName='$escapedname';";
		$res=@mysqli_query($this->db,$truckquery);
		$n=@mysqli_num_rows($res);
		if($n>1){
			while($row=@mysqli_fetch_assoc($res)){
		
				$data[]=$row;
			
			}
			return $data;
		}
	
	}
	
	public function updatetruck($uth,$utb,$utw,$ute,$uts){
		
		$truckquery="UPDATE t4b SET TBrand='$utb', TWheels='$utw', TEngine='$ute', TStorage='$uts' WHERE Id='$uth';";
		$res=@mysqli_query($this->db,$truckquery);
		if($res){
			echo '<h3>RECORD UPDATED</h3><br>';
			header("location: index.php");
		}
		else{
			echo '<h3>Insertion Failed</h3><br>';
		}
	
	}
	
	public function showalltrucks(){
		$truckquery="SELECT ID, UName, TBrand, TWheels, TEngine, TStorage FROM t4b;";
		$res=@mysqli_query($this->db,$truckquery);
		$n=@mysqli_num_rows($res);
		if($n>1){
			while($row=@mysqli_fetch_assoc($res)){
		
				$data[]=$row;
			
			}
			return $data;
		}
	
	}
	
	public function showbookedtruck($tid){
		$truckquery="SELECT ID, TBrand, TWheels, TEngine, TStorage FROM t4b WHERE ID='$tid';";
		$res=@mysqli_query($this->db,$truckquery);
		if($res){
			return $res;
		}
		else{
			return false;
		}
		
	}
	
	public function booktruck($usr,$tid,$bf,$bo,$cn){
		
		$truckquery="INSERT INTO t4c (TID, CName, BookedBy, BookedOn, BookedFor) VALUES ('$tid', '$cn', '$usr', '$bo', '$bf')";
		$res=@mysqli_query($this->db,$truckquery);
		if($res){
			echo '<h3>NEW RECORD INSERTED</h3><br>';
			header("location: index.php");
		}
		else{
			echo '<h3>Insertion Failed</h3><br>';
		}
	
	}
	
	public function showbookeddata($escapedname){
		$truckquery="SELECT * FROM t4c WHERE CName='$escapedname';";
		$res=@mysqli_query($this->db,$truckquery);
		$n=@mysqli_num_rows($res);
		if($n>0){
			while($row=@mysqli_fetch_assoc($res)){
		
				$data[]=$row;
			
			}
			return $data;
		}
	
	}
	
	
	
	
	
}

	