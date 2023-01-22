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

                /*===== Validamos que si escriba correctamente los datos =====*/
				if($response->status == 200){

					/*====== Validamos que si tenga rol administrativo ======*/	
					if($response->results[0]->rol_user != "admin"){
						echo ' <div class="alert alert-danger">No tienes permisos para acceder</div>';
						return;
					}

					/*===== Creamos variable de sesión =====*/	
					$_SESSION["admin"] = $response->results[0];
					echo '<script>
					window.location = "'.$_SERVER["REQUEST_URI"].'"
					</script>';

				}else{
					echo '<div class="alert alert-danger">'.$response->results.'</div>';
				}

			}else{
				echo '<div class="alert alert-danger">Error en la sintaxis de campo</div>';
			}
        }

    }
}
