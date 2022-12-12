<?php 
	trait WishlistModel{		
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from products where id = :var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelHotNews15(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id = 15");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
		public function modelHotNews17(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id = 17");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
		public function modelHotNews16(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id = 16");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
		public function modelHotNews18(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id = 18");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
	}
 ?>