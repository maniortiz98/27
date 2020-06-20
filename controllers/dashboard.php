<?php
class dashboard extends controllers
{
    public function __construct(){
        parent::__construct();

    }
    public function dashboard()
    {
      $data['page_id'] = 2;
      $data['page_tag'] = "Dashboard - tienda ";
      $data['page_title'] = "Dashboard - tienda";
      $data['page_name'] = "dashboard";
      
            $this->views->getview($this,"dashboard", $data);
    }
    
    

}
?>