<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\DataOPocasi;
use App\Models\Stanice;

class Main extends BaseController
{

    
   
    public function index()
    {
        //
    }

    public function prehledStanic(){
        echo view ('prehledStanic');
    }
    public function data(){
        echo view ('data');
    }

   

}
