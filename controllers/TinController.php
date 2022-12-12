<?php 
	include "models/TinModel.php";
	class TinController extends Controller{
		use TinModel;
		public function index(){
			$tin = $this->modelTin();
			$this->loadView("TinView.php",["tin"=>$tin]);
		}
	}
?>