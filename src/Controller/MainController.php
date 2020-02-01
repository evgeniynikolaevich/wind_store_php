<?php 

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class MainController

{   

    public  function showAction()
    {
     return new Response("Under sea");    
    }
}
?>