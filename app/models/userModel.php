<?php
namespace App\Models;
include_once('lib/database.php');
use Database\DB;

class UserModel {
    public $conn;
    private $table = 'tb_users';
    public function __construct(){
        $this->conn = new DB();
    }
    public function get ($id = -1,$page=0,$limit=20){
        if($id == -1){
            $firstRow = $page * $limit;
            $sql = 'SELECT * FROM '.$this->table.' LIMIT '.$firstRow.','.$limit;
            return $this->conn->query($sql);
        }
        return $this->conn->getRowArray($this->table,$id);
    }
    public function getByEmail ($email){
        $where = 'email= "'.$email.'"';
        $sql = 'SELECT * FROM '. $this->table . ' WHERE '. $where;
        return $this->conn->query($sql);
    }
    public function create($data){
       return $this->conn->insert($this->table,$data);
    }
    public function update($id,$data){
        return $this->conn->update($this->table,$data,$id);
    }
    public function delete($id){
        return $this->conn->delete($this->table,$id);
    }
}
