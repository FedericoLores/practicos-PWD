<?php
class Control_ej3{
    public $users = [];

    public function getUsers(){
        return $this->users;
    }

    public function setUsers($usersNuevos){
        $this->users = $usersNuevos;
    }

    public function cargarUsuarios(){
        $usuarios = [
            ["usuario"=> "jorge", "clave"=>"ramon"],
            ["usuario"=> "jamon", "clave"=>"queso"]
        ];
        $this->setUsers($usuarios);
    }


    public function revisar($datoUsuario){
        $colMensaje = [];
        if($datoUsuario != null){
            $colUsuarios = $this->getUsers();
            $userEncontrado = false;
            foreach($colUsuarios as $user){
                if($datoUsuario["usuario"] == $user["usuario"]){
                    $userEncontrado = true;
                    if($datoUsuario["contrasenia"] == $user["clave"]){
                        //logear
                        $colMensaje = [true, "Hola " . $user["usuario"] . "."];
                    }  else {
                        //contra incorrecta
                        $colMensaje = [false, "Error: La contraseña es incorrecta"];
                    }
                }
            }
            if(!$userEncontrado){
                $colMensaje = [false, "Error: El usuario no existe"];
            }
        }else{
            $colMensaje = [false, "Error: No se ingreso un usuario"];
        }
        return $colMensaje;
    }

}

?>