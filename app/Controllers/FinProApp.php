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
    protected $graphicModel;
    protected $graphicPhModel;
    // public $uri;


    public function __construct()
    {
        //bisa pke lgsg = new model(); tp harus di define dulu namespace nya
        $this->profileModel = new \App\Models\ProfileModel();
        $this->dataModel = new \App\Models\DataModel();
        $this->graphicModel = new \App\Models\GraphicModel();
        $this->graphicPhModel = new \App\Models\GraphicPhModel();
    }
    public function index()
    {
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'homepage',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
            
            // 'recordSensor' => $this->dataModel->getSensorData(),

            
        ];

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

    public function sendData($email, $tds, $temperature)
    {
       
        $data = [
            'tds' => $tds,
            'temp' => $temperature,
            'email' => $email
        ];
        
        
        $this->dataModel->updateSensorData($data);
        $this->graphicModel->insertSensorData($data);
    }
    public function sendDataPh($email, $ph)
    {
        // $sessionData = session('LoggedUserProfile');
        // $email = $sessionData['users']['email'];
       
        $data = [
            'email' => $email,
            'ph' => $ph
        ];
        
        
        $this->dataModel->updateSensorData($data);
        $this->graphicPhModel->insertSensorData($data);
    }
    public function tempChart()
    {
        $data = [
            'title' => 'tempChart',
            'recordSensor' => $this->graphicModel->getTemp()
    
        ];

        echo view('sensor/tempchart', $data);
    } 
    public function tdsChart()
    {
        $data = [
            'title' => 'tdsChart',
            'recordSensor' => $this->graphicModel->getTds()
    
        ];

        echo view('sensor/tdschart', $data);
    } 
    public function phChart()
    {
        $data = [
            'title' => 'phChart',
            'recordSensor' => $this->graphicPhModel->getPh()
    
        ];

        echo view('sensor/phchart', $data);
    }
    
}
