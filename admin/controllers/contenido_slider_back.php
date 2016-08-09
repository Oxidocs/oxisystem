<?php
$json = file_get_contents('http://localhost:8888/web_uls/oxisystem/admin/controllers/slider.php?action=listar');
$objs = json_decode($json);
?>