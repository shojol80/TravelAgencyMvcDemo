<?php
	
	//database class

	class Database extends PDO{



		public function __construct($dsn,$user,$password){

			

			parent:: __construct($dsn,$user,$password);
		}

		public function select($sql, $data=array(), $fetchstyle=PDO::FETCH_ASSOC){

			$stmt=$this->prepare($sql);


			foreach ($data as $key => $value) {
				$stmt->bindparam($key,$value);
			}

			$stmt->execute();

			return $stmt->fetchall($fetchstyle);

			
		}

		public function insert($table,$data){

			$keys=implode(",", array_keys($data));

			$values=":". implode(", :", array_keys($data));

			$sql="insert into $table($keys) values($values)";

			$stmt=$this->prepare($sql);

			foreach ($data as $key => $value) {
				
				$stmt->bindvalue(":$key",$value);
			}

			return $stmt->execute();



		}


		public function update($table,$data,$cond){

			$updatekeys=NULL;

			
			foreach ($data as $key => $value) {
				$updatekeys .="$key=:$key ,";
			}

			$updatekeys=rtrim($updatekeys,',');

			$sql="update $table set $updatekeys where $cond";


			$stmt=$this->prepare($sql);

			foreach ($data as $key => $value) {
				
				$stmt->bindparam(":$key",$value);
			}

			return $stmt->execute();

		}



		public function delete($table,$cond,$limit=1){

			$sql="delete from $table where $cond LIMIT $limit";

			return $this->exec($sql);

		}


		public function affectedrows($sql,$email,$password){

			$stmt=$this->prepare($sql);

			$stmt->execute(array($email,$password));

			return $stmt->rowcount();


		}

		public function selectuser($sql,$email,$password){

			$stmt=$this->prepare($sql);

			$stmt->execute(array($email,$password));

			return $stmt->fetchall(PDO::FETCH_ASSOC);

		}
	}
?>