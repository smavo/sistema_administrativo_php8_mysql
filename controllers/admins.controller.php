<?php

class AdminsController{

    /*===== Login de administradores =====*/
	public function login(){

		if(isset($_POST["loginEmail"])){

            /*===== Validamos la sintaxis de los campos =====*/
            if(preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"] )){
                
                

			}else{

				echo '<div class="alert alert-danger">Error en la sintaxis de campo</div>';

			}
        }

    }
}
