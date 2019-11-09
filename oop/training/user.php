<?php
include_once('database.php');
class user extends database 
{
    protected $user_id = NULL;
    protected $user_mail = NULL;
    protected $user_pass = NULL;
    protected $user_level = NULL;

    public function __construct(){
        $this->connect();
    } 

    //SET - GET
    public function set_user_id($user_id){
        $this->user_id = $user_id;
    }
    public function get_user_id(){
        $user_id = $this->user_id;
        return $user_id;
    }
    public function set_user_mail($user_mail){
        $this->user_mail = $user_mail;
    }
    public function get_user_mail(){
        $user_mail = $this->user_mail;
        return $user_mail;
    }
    public function set_user_pass($user_pass){
        $this->user_pass = $user_pass;
    }
    public function get_user_pass(){
        $user_pass = $this->user_pass;
        return $user_pass;
    }
    public function set_user_level($user_level){
        $this->user_level = $user_level;
    }
    public function get_user_level(){
        $user_level = $this->user_level;
        return $user_level;
    }

    //Phương thức login
    public function login(){
        $sql = "SELECT * FROM user WHERE user_mail = '$this->user_mail' AND user_pass = '$this->user_pass' AND user_level = 2";
        $this->query($sql);
        if($this->num_row()>0){
            $_SESSION['user_mail'] = $this->user_mail;
            $_SESSION['user_level']= 2;
            return 'Đăng nhập thành công';
        }
    }

    //Phương thức ADD User
    public function add_user(){
        $sql = "SELECT * FROM user WHERE user_mail = '$this->user_mail'";
        $this->query($sql);
        if($this->num_row()>0){
            return "User đã tồn tại";
        }else{
            $sql = "INSERT INTO user('user_mail','user_pass','user_level') VALUES ('$this->user_mail', '$this->user_pass', '$this->user_level')";
            $this->query($sql);
        } 
    }

    //Phương thức EDIT user
    public function edit_user(){
        $sql = "SELECT*FROM user WHERE user_mail = '$this->user_mail' AND user_id != '$this->user_id'";
        $this->query($sql);
        if($this->num_row()>0){
            return 'Mail đã tồn tại';
        }else{
            $sql = "UPDATE `user` SET `user_mail`='$this->user_mail',`user_pass`='$this->user_pass',`user_level`='$this->user_level' WHERE user_id =$this->user_id";
            $this->query(sql); 
        }
    }

    //Phương thức DEL user (Xóa)
    public function del_user(){
        $sql = "DELETE FROM user WHERE user_id = '$this->user_id'";
        $this->query($sql);
    }
}