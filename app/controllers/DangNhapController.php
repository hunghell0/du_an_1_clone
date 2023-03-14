<?php
namespace App\Controllers;
use App\Models\DangNhap;
class DangNhapController extends BaseController{
public $product;
public function __construct(){
    $this->product = new DangNhap();
}
}