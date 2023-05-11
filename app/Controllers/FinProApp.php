<?php

namespace App\Controllers;

//use \App\Models\ProfileModel;

class FinProApp extends BaseController
{
    //klo pake contructor harus define properties, dan parameter didalam funtion harus pake $this->
    // protected $profileModel;
    // public function __construct()
    // {
    //     //bisa pke lgsg = new model(); tp harus di define dulu namespace nya
    //     $this->profileModel = new \App\Models\ProfileModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'homepage',
            'userInfo' => session()->get('LoggedUserProfile')
        ];
        echo view('content/homepage', $data);
    }

    // public function profile()
    // {
    //     $profile =  $this->profileModel->findAll();

    //     $data = [
    //         'title' => 'profile',
    //         'profile' => $profile
    //     ];


    //     echo view('content/profile', $data);
    // }
}
