<?php

namespace App\Models;


use CodeIgniter\Model;

class GraphicPhModel extends Model
{
    protected $table      = 'phchart_sensor';
    protected $primaryKey = 'id';
    protected $cache      = false;

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
        'ph',  'date', 'email'
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
 
    public function insertSensorData($data)
    {
        $builder = $this->db->table('phchart_sensor');
        $builder->insertBatch($data);
    }
    
    public function getPh()
    {   
        $sessionData = session('LoggedUserProfile');
        $email = $sessionData['users']['email'];

        $konek = mysqli_connect("localhost", "root", "", "finalproject");
        //read the highest ID 
        $sql_id = mysqli_query($konek, "SELECT MAX(ID) FROM phchart_sensor WHERE email = '$email'");
        //catch the data
        $data_id = mysqli_fetch_array($sql_id);
        
        $id_akhir = $data_id['MAX(ID)'];
        $id_awal = $id_akhir - 9;

        //read the 5 latest data from ph table
        $tanggal = mysqli_query($konek, "SELECT date FROM phchart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' AND email='$email' ORDER BY ID ASC");
        $ph = mysqli_query($konek, "SELECT ph FROM phchart_sensor WHERE ID>='$id_awal' AND ID<='$id_akhir' AND email='$email' ORDER BY ID ASC");

        return ['date'=>$tanggal, 'ph'=>$ph];
    }
    
}
