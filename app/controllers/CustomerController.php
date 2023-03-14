<?php
//include_once 'app/models/Customer.php';
//include_once 'app/controllers/BaseController.php';
namespace App\Controllers;
use App\Models\Customer;

class CustomerController extends BaseController

{
    public $customers;
    public function __construct()
    {
        $this->customers = new Customer();
    }

   public function getCustomer()
    {
        $customers = $this->customers-> getListCustomer();
        return $this->render('customer.index', compact('customers'));
    }
    public function getAdd(){
        $this->render('customer.add');
    }
    public function addPost(){
        if(isset($_POST['xacNhan'])){


        $this->customers->getAdd(null,$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['note']);
        header('location: '.BASE_URL.'views');
    }
    }
    public function getDelete($id){
        $this->customers->getDelete($id);
        header('location: '.BASE_URL.'views');
    }
    public function getEdit($id){
        $customer = $this->customers->viewEdit($id);
        $this->render('customer.edit',compact('customer'));
    }
    public function editPost($id){
        if(isset($_POST['xacNhan'])){
            $this->customers->getEdit($id,$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['note']);
            header('location: '.BASE_URL.'views');
        }
    }
}