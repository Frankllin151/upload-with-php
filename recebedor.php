<?php
echo '
<pre>';
print_r($_FILES);
$typeofimg = ['image/png', 'image/jpg', 'image/jpeg'];



if (in_array($_FILES['arquivo']['type'], $typeofimg)) {
  $nome = md5(time() . rand(0, 2000) . 'jpg');
  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/' . $nome);
} else {
  echo 'sem sucesso!!';
}
