<?php

namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
    
    //hardcode
    public $user = '3';
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Kemampuan');
        $this->loadModel('Mydetail');
        $this->loadModel('Objective');
        $this->loadModel('Pendidikan');
        $this->loadModel('Pengalaman');
        $this->loadModel('Portofolio');
        $this->loadModel('Users');

    }

    public function index(){
       $data = array (
            "User" => $this->Users->findById($this->user),
            "Skills" => $this->Kemampuan->findByIdUser($this->user),
            "Objective" => $this->Objective->findByIdUser($this->user),
            "Edu" => $this->Pendidikan->findByIdUser($this->user),
            "Exp" => $this->Pengalaman->findByIdUser($this->user),
            "Porto" => $this->Portofolio->findByIdUser($this->user),
            "Detail" => $this->Mydetail->findByIdUser($this->user),
        );
        $this->set($data);
    }
}