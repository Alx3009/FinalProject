<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table      = 'data';
    protected $primaryKey = 'id';
    protected $cache      = false;

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
        'ph', 'tds', 'temp'
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
        $builder = $this->db->table('data');
        $builder->select('*');
        $builder->orderBy('id', 'desc');
        $query = $builder->get();
    
        return $query->getRow();
    }

    public function updateSensorData($data)
    {
        // $sensor_value = $_GET['sensor'];
        $builder = $this->db->table('data');
        $builder->update($data);
    }
}
