<?php
class home extends controllers
{
    public function __construct(){
        parent::__construct();

    }
    public function home()
    {
      $data['page_id'] = 1;
      $data['page_tag'] = "Tienda ";
      $data['page_title'] = "pagina principal";
      $data['page_name'] = "home";
      $data['page_content'] = "lorem gngn gnbirnb tnb";
            $this->views->getview($this,"home", $data);
    }
    
    

}
?>