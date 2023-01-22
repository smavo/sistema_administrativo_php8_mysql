<?php


class TemplateController{

	/*===== la Vista Principal de la plantilla =====*/
    public function index(){
		include "views/template.php";
	}	

	/*===== Ruta para las imágenes del sistema =====*/
	static public function srcImg(){
		return "http://marketplace.com/";
	}

}