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
    protected $profileModel;
    protected $dataModel;

    public function __construct()
    {
        //bisa pke lgsg = new model(); tp harus di define dulu namespace nya
        $this->profileModel = new \App\Models\ProfileModel();
        $this->dataModel = new \App\Models\DataModel();
    }
    public function index()
    {
        $data = [
            'title' => 'homepage',
            'userInfo' => session()->get('LoggedUserProfile'),
            // 'grafik' => 'grafik123',
            'recordSensor' => $this->dataModel->getSensorData()
            // 'dataSensor' => $recordSensor
        ];

        echo view('content/homepage', $data);
    }   


    // public function home()
    // {
    //     $email = $this->request->getPost('email');
    //     $password = $this->request->getPost('password');
    //     $user_profile = $this->profileModel->where('email', $email)->first();
    //     $session_data_profile = ['users' => $user_profile]; 
    //     $login_session = session()->set('LoggedUserProfile', $session_data_profile);
    //     $data = [
    //         'title' => 'homepage',
    //         'userInfo' => session()->get('LoggedUserProfile'),
    //         // 'grafik' => 'grafik123',
    //         'recordSensor' => $this->dataModel->getSensorData()
    //     ];


    //     echo view('content/homepage', $data);
    // }
}
