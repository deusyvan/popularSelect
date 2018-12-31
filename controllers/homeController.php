<?php 
class homeController extends controller{
    
    public function index(){
        $usuarios = new Usuarios();
        $dados = array();
      
        $this->loadTemplate('home', $dados);
        
    }
   
}

?>