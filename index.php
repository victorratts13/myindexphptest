<?php
$data = date('d-m-Y h:i:s');
$hash = md5($data);
$info = phpinfo();
echo "seu hash de acesso md5 é: <b>".$hash."</b>";
echo $info;
?>