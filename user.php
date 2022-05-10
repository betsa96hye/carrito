<?php
include 'BD.php';
class User extends BD{
    private $nombre;
    private $username;
    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE usuario = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM cliente  WHERE usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre_cliente'];
            $this->usename = $currentUser['usuario'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>