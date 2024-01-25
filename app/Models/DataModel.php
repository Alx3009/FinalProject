<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table      = 'data_sensor';
    protected $primaryKey = 'id';
    protected $cache      = false;

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
        'ph', 'tds', 'temp', 'email'
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
    public function getSensorData()
    {
        $sessionData = session('LoggedUserProfile');
        $email = $sessionData['users']['email'];

        $builder = $this->db->table('data_sensor');
        $builder->select('*');
        $builder->where('email', $email);
        $builder->orderBy('id', 'desc');
        $query = $builder->get();
    
        return $query->getRow();
    }

    public function updateSensorData($data)
    {
        // $sessionData = session('LoggedUserProfile');
        // $user = $sessionData['users']['email'];
        // $sensor_value = $_GET['sensor'];
        $builder = $this->db->table('data_sensor');
        // $builder->where('email', $user);
        $builder->update($data);
        // $sessionData = session('LoggedUserProfile');
        // $user = $sessionData['users']['email'];

        // $this->db->table('data_sensor')->where('email', $user)->update($data);
    }

    // public function userEmail($email)
    // {
    //     // $sessionData = session('LoggedUserProfile');
    //     // $user = $sessionData['users'][$email];
    //     // Get the latest sensor data for the logged-in user.
    //     return $this->db->table('data_sensor')->where('email', $email)->get()->getRow();
        
    // }
    
}
