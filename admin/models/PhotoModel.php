<?php 
	trait PhotoModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from photo where photo_id = :var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$name = $_POST["name"];	
			$id = $_POST["id"];
			$photo1 = "";
			if($_FILES['photo1']['name'] != ""){
				$photo1 = time()."_".$_FILES['photo1']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo1']['tmp_name'], "../assets/upload/products/$photo1");
			}
			$photo2 = "";
			if($_FILES['photo2']['name'] != ""){
				$photo2 = time()."_".$_FILES['photo2']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo2']['tmp_name'], "../assets/upload/products/$photo2");
			}
			$photo3 = "";
			if($_FILES['photo3']['name'] != ""){
				$photo3 = time()."_".$_FILES['photo3']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo3']['tmp_name'], "../assets/upload/products/$photo3");
			}
			$photo4 = "";
			if($_FILES['photo4']['name'] != ""){
				$photo4 = time()."_".$_FILES['photo4']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo4']['tmp_name'], "../assets/upload/products/$photo4");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("update photo set photo1=:var_photo1,photo2=:var_photo2,photo3=:var_photo3,photo4=:var_photo4 where photo_id = :var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_photo1"=>$photo1,"var_photo2"=>$photo2,"var_photo3"=>$photo3,"var_photo4"=>$photo4]);

			//---
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$id = $_POST["id"];
			$photo1 = "";
			if($_FILES['photo1']['name'] != ""){
				$photo1 = time()."_".$_FILES['photo1']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo1']['tmp_name'], "../assets/upload/products/$photo1");
			}
			$photo2 = "";
			if($_FILES['photo2']['name'] != ""){
				$photo2 = time()."_".$_FILES['photo2']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo2']['tmp_name'], "../assets/upload/products/$photo2");
			}
			$photo3 = "";
			if($_FILES['photo3']['name'] != ""){
				$photo3 = time()."_".$_FILES['photo3']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo3']['tmp_name'], "../assets/upload/products/$photo3");
			}
			$photo4 = "";
			if($_FILES['photo4']['name'] != ""){
				$photo4 = time()."_".$_FILES['photo4']['name'];
				//upload file vao thuc muc upload/products
				move_uploaded_file($_FILES['photo4']['tmp_name'], "../assets/upload/products/$photo4");
			}
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$ktra = $conn->query("select photo_id from photo");
			if($ktra = $_POST["id"]){

				header("location:index.php?controller=photo");
			}
			//thuc hien truy van
			$query = $conn->prepare("insert into photo set photo_id = :var_id,photo1=:var_photo1,photo2=:var_photo2,photo3=:var_photo3,photo4=:var_photo4");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_photo1"=>$photo1,"var_photo2"=>$photo2,"var_photo3"=>$photo3,"var_photo4"=>$photo4]);
			header("location:index.php?controller=photo");
		}
			public function allphoto(){
			//lay bien page truyen tu url
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from photo order by photo_id desc");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
	}
 ?>