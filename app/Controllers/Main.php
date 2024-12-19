<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\DataOPocasi;
use App\Models\Stanice;

class Main extends BaseController
{
    
    var $spolkoveZeme;
    public function __construct()
    {
        $this->spolkoveZeme = new Bundesland(); //this -> můžu ji volat z jiné metody a je pro celou třídu

    }
    

    public function prehledStanic()
    {
        echo view('prehledStanic');




    }
    public function data()
    {
        echo view('data');
    }




    public function index(): string
    {
        return view('spolkoveZeme');
    }



    public function spolkoveZeme()
    {

        $data["spolkoveZeme"] = $this->spolkoveZeme->orderBy('id', 'asc')->findAll(); //hledá v databázi id a seřadí podle velikosti id

   
        echo view('spolkoveZeme', $data); //vypíše

    }

 

   
}
