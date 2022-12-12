<?php 
	trait HomeModel{
		//san pham noi bat
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by price desc");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
		//lay cac danh muc co chua san pham ben trong
		// public function modelCategories(){
		// 	$conn = Connection::getInstance();
		// 	$query = $conn->query("select * from categories where id in (select category_id from products where category_id=5 or category_id=9)");
		// 	//tra ve tat ca cac ban ghi truy van duoc
		// 	return $query->fetchAll();
		// }
		//lay cac san pham thuoc danh muc
		public function modelProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by price asc limit 0,8");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
		//lay 10 tin noi bat de hien thi o trang chu
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
		public function modelHotNews19(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id = 19");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
		public function modelHotNews20(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id = 20");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
		public function modelHotNews21(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id = 21");
			//tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll();
		}
	}
 ?>