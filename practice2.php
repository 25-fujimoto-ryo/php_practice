<?php 
echo 'PHP';
echo PHP_EOL;

$name = "Fujimoto Ryo";
if ($name = "Fujimoto Ryo") {
    echo "私は あなたの名前 です";    
} else {
    echo "あなたの名前ではありません";
}
echo PHP_EOL;

$total = 0;
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("apple", "banana", "orange", "lemon", "grape");

foreach ($fruits as $fruit) {
    echo PHP_EOL;
    echo $fruit;
}

for($i = 1; $i <= 100; $i++){

  if($i % 5 == 0){
    echo PHP_EOL;
    echo $i;
  }
}
?>