<?php 
	//include file model vao day
	include "models/PhotoModel.php";
	
	class PhotoController extends Controller{
		//ke thua class ProductsModel
		use PhotoModel;

		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 50;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			$photo = $this->allphoto();
			//goi view, truyen du lieu ra view
			$this->loadView("PhotoView.php",["data"=>$data,"photo"=>$photo,"numPage"=>$numPage]);
		}
		//sua ban ghi
		public function update(){
			//lay id truyen tu url
			//is_numeric(key) tra ve true neu key la so, nguoc lai tra ve false
			//is_numeric($_GET["id"]) <=> is_numeric($_GET["id"]) == true
			//!is_numeric($_GET["id"]) <=> is_numeric($_GET["id"]) == false
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//tao bien $action de dua vao thuoc tinh $action cua the form
			$action = "index.php?controller=photo&action=updatePost&id=$id";
			//lay mot ban ghi
			$record = $this->modelGetRecord($id);
			//goi view, truyen du lieu ra view
			$this->loadView("PhotoFormView2.php",["action"=>$action,"record"=>$record]);
		}
		//khi an nut submit (update ban ghi)
		public function updatePost(){			
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang products
			header("location:index.php?controller=photo");
		}
		//create
		public function create(){
			//tao bien $action de dua vao thuoc tinh $action cua the form
			$action = "index.php?controller=photo&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("PhotoFormView.php",["action"=>$action]);
		}
		//create - sau khi an nut submit
		public function createPost(){
			//goi ham modelCreate de insert ban ghi
			$this->modelCreate();
		}
	}
 ?>