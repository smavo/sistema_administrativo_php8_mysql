<?php

class AdminsController{

 
	public function login(){

		if(isset($_POST["loginEmail"])){

            /*===== Validamos la sintaxis de los campos =====*/
            if(preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"] )){
                
                $url = "users?login=true&suffix=user";
				$method = "POST";
				$fields = array(

					"email_user" => $_POST["loginEmail"],
					"password_user" => $_POST["loginPassword"]

				);

                $response = CurlController::request($url,$method,$fields);



			}else{
				echo '<div class="alert alert-danger">Error en la sintaxis de campo</div>';
			}
        }

    }
}
