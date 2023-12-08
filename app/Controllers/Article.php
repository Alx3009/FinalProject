<?php

namespace App\Controllers;

use App\Libraries\Hash;


class Article extends BaseController
{
    protected $profileModel;
    public function __construct()
    {
        //bisa pke lgsg = new model(); tp harus di define dulu namespace nya
        $this->profileModel = new \App\Models\ProfileModel();
    }
    
    public function index()
    {   
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'profile',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
        ];
            
        echo view('content/article/hidroponic-article', $data);
    }
    public function phArticle()
    {   
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'profile',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
        ];
            
        echo view('content/article/ph-article', $data);
    }
    public function ppmArticle()
    {   
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'profile',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
        ];
            
        echo view('content/article/ppm-article', $data);
    }
    public function tempArticle()
    {   
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'profile',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
        ];
            
        echo view('content/article/temp-article', $data);
    }
}