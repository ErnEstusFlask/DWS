<?php
/*
 * Ernesto José Auñón
 * Hector Santos Sanroque
 */

class Password{
    
    var $pwd;
    var $maxLength;
    var $minLength=3;
    var $permitidos;
    var $correct=false;
    
    
    function __construct($pwd="",$permitidos="", $maxLength=16, $minLength=8){
       
        if ($permitidos==""){
            $this->minLength=$minLength;
            $this->maxLength=$maxLength;
            $this->correct=  preg_match("/^[0-9A-Za-z]{::$minLength,$maxLength}$/", $pwd);
        }else{
            $this->maxLength=$maxLength;
            $this->minLength=$minLength;
            $this->permitidos=$permitidos;
            $no_permitidas= array ("/",".","^","$","[","]","|","(",")","?","*","+","{","}","-");
            $permitidas= array ("\/","\.","\^","\$","\[","\]","\|","\(","\)","\?","\*","\+","\{","\}","\-","_");
            $texto = str_replace($no_permitidas, $permitidas ,$permitidos);
            $this->correct= preg_match("/^[0-9A-Za-z$texto]{::$minLength,$maxLength}$/", $pwd);
            
        }
    }
    
    
  
    
     function Vget(){
        return $this->correct;
    }
    
    function Pget(){
        return $this->pwd;
    }
    
    public function generatePass($leng, $permitidos){
        $specCar= array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9");
        $arPass=array();
        $strPass="";
        $permCar= str_split($permitidos);
        $permCar=array_merge($specCar,$permCar);
        for($i=0;$i<$leng;$i++){
            $arPass[$i]=$permCar[rand (0 , count($permCar)-1)];
        }
        $strPass= implode($arPass);
        $this->pwd= $strPass;
    }
    
    public function encriptame($pwd) {
        $hash = password_hash('admin', PASSWORD_DEFAULT, [15]);
       
        if(password_verify($pwd, $hash)){
           echo  "Password correcto!";
           echo "<br>";
           echo $hash;
        }else echo "no";
    }
    
   
    
}

$contraseña = new Password();
$contraseña->generatePass(20,"_?*/");

echo $contraseña->Pget();
echo "<br>";
echo $contraseña->encriptame($contraseña->pwd);








/*
 ©
 */