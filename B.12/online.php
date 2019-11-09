<?php
$tg = time();
$tgout = 900;
$tgnew = $tg - $tgout;

$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$PHP_SELF = $_SERVER['PHP_SELF'];
$sql = "INSERT INTO user_online(tgtmp,ip,local) VALUES('$tg', '$REMOTE_ADDR', '$PHP_SELF')";
$query = mysqli_query($conn, $sql);

$sql_del = "DELETE FROM user_online WHERE tgtmp < $tgnew";
$query_del = mysqli_query($conn, $sql_del);

$sql_show = "SELECT DISTINCT ip FROM user_online WHERE local='$PHP_SELF'";
$query_show = mysqli_query($conn, $sql_show);
$num = mysqli_num_rows($query_show);


?>

<div id="online" class="mt-3 bg-light p-4">
    <p class="text-center mb-0"><b>Số lượng người đang truy cập: <span class="text-danger"><?php echo $num; ?></span> người</b></p>
</div>