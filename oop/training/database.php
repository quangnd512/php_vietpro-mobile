<?php
class database
{
    protected $db_host = "localhosst";
    protected $db_user = "root";
    protected $db_pass = "";
    protected $db_name = "vietpro-mobile"; //CSDL name

    protected $conn = NULL;
    protected $result = NULL;

    //Phương thức connect
    public function connect(){
        $this->conn = @mysqli_connect($this->$db_host,$this->$db_user,$this->$db_pass);
            if ($this->conn) { //Nếu tồn tại $conn
                $select_db = @mysqli_select_db($this->db_name, $this->conn);
                if (!$select_db) { //Nếu không tồn tại $select_db
                    echo 'Không thể tìm kiếm thấy database';
                }
            } else { //Nếu không tồn tại $conn
                echo 'Kết nối database thất bại';
            }
            
    }

    //Phương thức giải phóng bộ nhớ (free-query)
    public function free_query(){
        if($this->result){
            mysqli_free_result($this->result);
        }
    }

    //Phương thức xử lý kết nối (query)
    public function query($sql){
        $this->free_query();
        $this->mysqli_query($sql);
    }

    //Phương thức num-row
    public function num_row(){
        if($this->result){
            $rows = mysqli_num_rows($this->result);
            return $row;
        }
    } 

    //Phương thức fetch array
    public function fetch_array(){
        if($this->result){
            $row = mysqli_fetch_array($this->result);
            return $row;
        }
    } 

    //Phương thức đóng kết nối database
    public function disconnect(){
        if($this->conn){
            mysqli_close($this->conn);
        }
    }
}
