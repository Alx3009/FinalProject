<?php

namespace App\Models;


use CodeIgniter\Model;

class GraphicModel extends Model
{
    protected $table      = 'chart_sensor';
    protected $primaryKey = 'id';
    protected $cache      = false;

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
        'tds', 'temp', 'date', 'email'
    ];

    // // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
    
    public $sessionData;
    public $email;

    public function __construct() {
        $this->sessionData = session('LoggedUserProfile');
        $this->email = $this->sessionData['users']['email'];
    }
    
    public function insertSensorData($data)
    {
        $builder = $this->db->table('chart_sensor');
        $builder->insertBatch($data);
    }
    // public function getDate()
    // {
    //     $builder = $this->db->table('chart_sensor');
    //     $builder->select('date');
    //     $builder->orderBy('id', 'ASC');
    //     $query = $builder->get();
    
    //     return $query->getRow();
    // }
    // public function getPh()
    // {
    //     $builder = $this->db->table('chart_sensor');
    //     $builder->select('ph');
    //     $builder->orderBy('id', 'ASC');
    //     $query = $builder->get();
    
    //     return $query->getRow();
    //}
    public function getTemp()
    {   
        $konek = mysqli_connect("localhost", "root", "", "finalproject");

        //read the highest ID 
        $sql_id = mysqli_query($konek, "SELECT MAX(ID) FROM chart_sensor WHERE email = '$this->email'");
        //catch the data
        $data_id = mysqli_fetch_array($sql_id);
        
        $id_akhir = $data_id['MAX(ID)'];
        $id_awal = $id_akhir - 9;

        //read the 5 latest data from 'date' and 'temp' table
        $tanggal = mysqli_query($konek, "SELECT date FROM chart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' AND email='$this->email' ORDER BY ID ASC");
        $suhu = mysqli_query($konek, "SELECT temp FROM chart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' AND email='$this->email' ORDER BY ID ASC");

        return ['date'=>$tanggal, 'temp'=>$suhu];
    }
    public function getTds()
    {  

        $konek = mysqli_connect("localhost", "root", "", "finalproject");

        //read the highest ID 
        $sql_id = mysqli_query($konek, "SELECT MAX(ID) FROM chart_sensor WHERE email = '$this->email'");
        //catch the data
        $data_id = mysqli_fetch_array($sql_id);
        
        $id_akhir = $data_id['MAX(ID)'];
        $id_awal = $id_akhir - 9;

        //read the 5 latest data from 'date' and 'tds' table
        $tanggal = mysqli_query($konek, "SELECT date FROM chart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' AND email='$this->email' ORDER BY ID ASC");
        $tds = mysqli_query($konek, "SELECT tds FROM chart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' AND email='$this->email' ORDER BY ID ASC");

        return ['date'=>$tanggal, 'tds'=>$tds];
    }
    // public function getPh()
    // {   
    //     $konek = mysqli_connect("localhost", "root", "", "finalproject");

    //     //read the highest ID 
    //     $sql_id = mysqli_query($konek, "SELECT MAX(ID) FROM chart_sensor");
    //     //catch the data
    //     $data_id = mysqli_fetch_array($sql_id);
        
    //     $id_akhir = $data_id['MAX(ID)'];
    //     $id_awal = $id_akhir - 4;

    //     //read the 5 latest data from 'date' and 'tds' table
    //     $tanggal = mysqli_query($konek, "SELECT date FROM chart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' ORDER BY ID ASC");
    //     $ph = mysqli_query($konek, "SELECT ph FROM chart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' ORDER BY ID ASC");

    //     return ['date'=>$tanggal, 'ph'=>$ph];
    // }
    
}
