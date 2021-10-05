<?php 

namespace App\Model;

class Connection 
{
   private static $instance;
   public static function ConnectionDB() 
   {
    if(!isset(self::$instance)) : 
        self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8' , 'root' , '');
    else :
        return self::$instance;
    endif;
   }
}