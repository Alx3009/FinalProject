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
    // public $uri;


    public function __construct()
    {
        //bisa pke lgsg = new model(); tp harus di define dulu namespace nya
        $this->profileModel = new \App\Models\ProfileModel();
        $this->dataModel = new \App\Models\DataModel();
        $this->graphicModel = new \App\Models\GraphicModel();
        
    }
    public function index()
    {
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'homepage',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
            
            'recordSensor' => $this->dataModel->getSensorData(),

            
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

    public function sendData($tds, $temperature)
    {
        
        
        // $ppm = $this->request->getUri(3);
        // $temperature = $this->request->getUri(4);
        // // $ppm = $this->uri->segment(3);
        // // $temperature = $this->uri->segment(4);
        
        $sessionData = session('LoggedUserProfile');
        $data = [
            'tds' => $tds,
            'temp' => $temperature,
            'email' => $this->profileModel->getProfile($sessionData['users']['email'])
        ];
        
        $this->dataModel->updateSensorData($data);
        $this->graphicModel->insertSensorData($data);
    }
    // public function dateChart()
    // {
    //     $data = [
    //         'title' => 'dateChart',
    //         'recordSensor' => $this->graphicModel->getDate()
    
    //     ];

    //     echo view('sensor/datechart', $data);
    // } 
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
            'recordSensor' => $this->graphicModel->getPh()
    
        ];

        echo view('sensor/phchart', $data);
    }
    
}
