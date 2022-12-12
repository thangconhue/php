<?php 
	trait TinModel{
		public function modelTin(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from tin where hot = 1 order by id desc");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
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