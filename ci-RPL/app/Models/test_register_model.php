<?php namespace App\Models;
use CodeIgniter\Model;
 
class test_register_model extends Model
{
    protected $table = 'user';
     
    public function getUser($no_ktp = false)
    {
        if($no_ktp === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['no_ktp' => $no_ktp]);
        }   
    }

    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}