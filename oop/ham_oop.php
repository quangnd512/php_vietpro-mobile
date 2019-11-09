<?php
/**
 * I.   Một số hàm trong PHP
 * 
 * 1.   Hàm Construct: Hàm khởi tạo
 Tự động thực thi mỗi khi một đối tượng được khai báo
 Cú pháp: 
 function __construct(){
     //Hàm không có tham số
     //Hàm có tham số truyền vào
        VD: function __construct($da, $toc, $mat){
                $this->mau_da = $da;
                $this->mau_toc = $toc;
                $this->mau_mat = $mat;
            }
            $con_nguoi = new conNguoi('Vàng', 'Đen', 'Nâu');
     //Hàm có tham số mặc định 
        VD: function __construct($da = 'Vàng', $toc = 'Đen', $mat = 'Xanh'){
                $this->mau_da = $da;
                $this->mau_toc = $toc;
                $this->mau_mat = $mat;
            }
            $con_nguoi = new conNguoi();
     //Hàm có tham số là một mảng
     VD dưới
 }
 * 
 * 2.   Hàm Destruct
 Tự động thực thi khi khởi tạo xong đối tượng
 Cú pháp: 
 function __destruct(){
    //Thực thi hàm
 }
 * 
 * 3.   Hàm Autoload
Triệu gọi các lớp khi khởi tạo đối tượng từ lớp đó (giống include)
Cú pháp : 
function __autoload($class_name){
    require_once("$class_name.php");
} 
 * 
 * Chú ý: Tên class phải trùng với tên file (class.php) 
 * 
 */

 //VD hàm construct
class ham_oop
{
    protected $mau_da = NULL;
    protected $mau_toc = NULL;
    protected $mau_mat = NULL;

    function __construct($data){
        $this->mau_da = $data[0];
        $this->mau_toc = $data[1];
        $this->mau_mat = $data[2];
    }

    function showValue(){
        echo $this->mau_da;
        echo '<br>';
        echo $this->mau_toc;
        echo '<br>';
        echo $this->mau_mat;
        echo '<br>';
    }

    function __destruct(){
        echo 'Destruct Function';
    }
}
