<?php   
$fp = 'modules/thongke/count.txt';
$fo = fopen($fp, 'r');
$fg = fgets($fo);
$fc = fclose($fo);
$fg++;
$fo = fopen($fp, 'w');
$fw = fwrite($fo, $fg);
$fc = fclose($fo);
?>

<div id="count" class="mt-3 bg-light p-4">
    <p class="text-center mb-0"><b>Số lượng người đã truy cập: <span class="text-danger"><?php echo $fg; ?></span> người</b></p>
</div>