<?php
/**
 * I.   Truy xuất tới thuộc tính và phương thức
 * 
 * 1.   Truy xuất giá trị bên trong lớp
 Cú pháp:   $this->ten_bien;
            $this->ten_ham();
 * 2.   Truy xuất giá trị bên ngoài lớp
 Cú pháp:   $ten_doi_tuong->ten_bien;
            $ten_doi_tuong->ten_ham();
 *
 *  
 * 
 * II.  Kế thừa và kỹ thuật nạp chồng
 * 
 * 1.   Kế thừa
 Cú pháp:   class a extends b{
     // Nội dung class con
 }
 * 2.    Kỹ thuật nạp chồng
 Cú pháp:   parent::ten_ham(); //Ghi vào hàm của lớp con trùng tên với hàm của lớp cha
 * 
 * 
 * 
 * III. Cơ chế PPP
 * 
 * 1.   Public
 Truy suất bên trong, bên ngoài class cũng như bên trong các class con
 * 2.   Protected
 Truy suất bên trong class và các class con
 * 3.   Private
 Truy xuất bên trong class đó
 *
 *   */
class conNguoi
{
    function hanhDong(){
        echo 'Anh ấy đang ăn';
    }
    function tinhCach(){
        echo "Anh ấy là người hoạt bát";
    }
}
class conNguoi2 extends conNguoi
{
    function hanhDong(){
        echo 'Anh ấy đang chơi game';
    } 
}
class conNguoi3 extends conNguoi
{
    function tinhCach(){
        parent::tinhCach();
        echo "<br>";
        echo "Anh ấy là người vui vẻ";
    }
}

$con_nguoi_2 = new conNguoi2;
$con_nguoi_2->hanhDong(); // ghi đè
echo '<br>';
$con_nguoi_3 = new conNguoi3;
$con_nguoi_3->tinhCach(); // nạp chồng