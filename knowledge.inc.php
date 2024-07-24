<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>

<?php
$num = 123;
$arrDel =[];

for ($i = 1; $i <= $num; $i++) {
  if ($num % $i == 0)
    array_push($arrDel, $i);
}
?>