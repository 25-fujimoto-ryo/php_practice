<?php 
date_default_timezone_set('Asia/Tokyo');

echo "php";
echo PHP_EOL;

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function number2($num) {
    return $num * 2;
}
//例えば　echo number2(5);　だと10が出力される
echo number2(5);
echo PHP_EOL;

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a, $b) {
    return $a + $b;
}
//例えば　echo sum(5, 2);　だと7が出力される
echo sum(5, 2);
echo PHP_EOL;

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr) {
    $result = 1;
    foreach($arr as $return) {
        $result *= $return;
    }
return $result;    
}
echo product(array(1, 3, 5, 7, 9));
echo PHP_EOL;

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a) {
        $max_number = $a;  
        }   
    }
return $max_number;
}
$array4 = array(2, 4, 6, 8, 10);
echo max_array($array4);
echo PHP_EOL;

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tagsは文字列からHTMLおよびPHPタグを取り除く
$text = '<p>Text</p>';
echo strip_tags($text);
echo PHP_EOL;

//array_pushは1つ以上の要素を配列の最後に追加したいときに使う
$sports = ["baseball", "soccer", "tennis"];
array_push($sports, "rugby", "badminton");
print_r($sports);
echo PHP_EOL;

//array_mergeは配列の要素の最後にひとつまたは複数の配列を結合するときに使う
$array1 = [1, 2, 3];
$array2 = [11, 12, 13];
$array3 = [21, 22, 23];

$array = array_merge($array1, $array2, $array3);
print_r($array);
echo PHP_EOL;

//timeは現在時刻のUNIXタイムスタンプを取得するときに使う
echo "現在のUnixタイムスタンプ：".time();
echo PHP_EOL;

//mktime関数は指定した日時のUNIXタイムスタンプを取得するときに使う
$time = mktime(0, 0, 0, 1, 1, 2020);
echo $time;
echo PHP_EOL;

//dateは指定された日時を任意の形式でフォーマットして日付文字列を返す
echo date('Y/m/d H:i:s');
?>

