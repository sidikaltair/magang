<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'admin';
    protected $allowedFields = ['user_id','nama','user_name','password'.'user_created_at'];
}