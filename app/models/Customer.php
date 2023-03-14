<?php
//require_once 'app/models/BaseModel.php';
namespace App\Models;
class Customer extends BaseModel
{
    protected $table = 'customer';
     public function getListCustomer()
    {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAdd($id,$name,$address,$phone,$note)
    {
        $sql = "insert into $this->table value (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name,$address,$phone,$note]);
    }
    public function getDelete($id)
    {
        $sql = "delete from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function viewEdit($id)
    {
        $sql = "select * from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function getEdit($id,$name,$address,$phone,$note)
    {
        $sql = "update  $this->table  set name = ? , address = ? , phone = ? , note = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$name,$address,$phone,$note,$id]);
    }
}
?>