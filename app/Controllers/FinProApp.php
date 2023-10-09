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
    // public $uri;


    public function __construct()
    {
        //bisa pke lgsg = new model(); tp harus di define dulu namespace nya
        $this->profileModel = new \App\Models\ProfileModel();
        $this->dataModel = new \App\Models\DataModel();
        // $this->uri = service('uri');
        
    }
    public function index()
    {
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'homepage',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
            // 'grafik' => 'grafik123',
            'recordSensor' => $this->dataModel->getSensorData()
            // 'dataSensor' => $recordSensor
        ];

        // $side_bar = $this->sidebar();

        echo view('content/homepage', $data);
    }   
    public function phSensor()
    {
        $data = [
            'title' => 'phSensor',
            'recordSensor' => $this->dataModel->getSensorData()
    
        ];

        echo view('sensor/ph', $data);
    }  
    public function ppmSensor()
    {
        $data = [
            'title' => 'ppmSensor',
            'recordSensor' => $this->dataModel->getSensorData()
    
        ];

        echo view('sensor/ppm', $data);
    } 
    public function tempSensor()
    {
        $data = [
            'title' => 'ppmSensor',
            'recordSensor' => $this->dataModel->getSensorData()
    
        ];

        echo view('sensor/temp', $data);
    }   

    public function sendData($ppm, $temperature)
    {
        
        
        // $ppm = $this->request->getUri(3);
        // $temperature = $this->request->getUri(4);
        // // $ppm = $this->uri->segment(3);
        // // $temperature = $this->uri->segment(4);
        

        $data = [
            'ppm' => $ppm,
            'temp' => $temperature,
        ];
        
        $this->dataModel->updateSensorData($data);
    }

    
}
