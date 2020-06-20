<?php
class errors extends controllers
{
    public function __construct(){
        parent::__construct();

    }
    public function notFound()
    {
      $this->views->getview($this,"error");
    }
    
}
$notFound = new errors();
$notFound->notFound();
?>