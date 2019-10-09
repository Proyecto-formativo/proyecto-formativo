<?php
 require('../model/area.php');

 class areas extends area{

     public function listar_areas(){
       return self::mostrarareas();
       
     }
 }