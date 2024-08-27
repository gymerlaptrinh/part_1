<?php
//ex1
$x = '-world hello world 789-';
echo 'Số phần tử là: ' . strlen($x) . '<br>';

//ex2
echo 'Đếm số từ: ' . str_word_count($x) . '<br>';

//ex3
echo 'Đảo ngược chuỗi: ' . strrev($x) . '<br>';

//ex4
echo 'Tìm chuỗi con: ' . strpos($x, 'world') . '<br>';

//ex5
echo 'Thay thế world: ' . str_replace('world', 'TMT', $x) . '<br>';

//ex6
echo 'Kiểm tra chuỗi: ' . strncmp('-he', $x, 3) . '<br>';
//ex7
echo 'Viết hoa chuỗi: ' . strtoupper($x) . '<br>';

//ex8
echo 'Viết thường chuỗi: ' . strtolower(strtoupper($x)) . '<br>';

//ex9
echo 'Viết hoa chữ đầu chuỗi: ' . ucwords('trần mạnh thắng') . '<br>';

//ex10
echo 'Loại bỏ kí tự đầu và cuối chuỗi: ' . trim($x, '-') . '<br>';

//ex11
echo 'Loại bỏ kí tự từ bên trái: ' . ltrim($x, '-he') . '<br>';

//ex12
echo 'Loại bỏ kí tự từ bên phải: ' . rtrim($x, '789-') . '<br>';

//ex13
$y = explode(' ', $x);
echo 'Tách thành mảng: <pre>';
print_r($y);
echo '</pre><br>';

//ex14
echo 'Ghép mảng thành chuỗi: ' . implode(' ', $y) . '<br>';

//ex15
echo 'Thêm vào chuỗi: ' . str_pad($x, 3 + strlen($x), '=', STR_PAD_BOTH) . '<br>';

//ex16
echo 'Trả về vị trí cuối cùng của chuỗi con trong chuỗi cha tới hết: ' . strrchr($x, 'world') . '<br>';

//ex17
echo 'Trả về vị trí đầu của chuỗi con trong chuỗi cha tới hết:' . strstr($x, 'hello') . '<br>';

//ex18
echo 'Thay thế chuỗi với preg_replace() :';
$z = ' Hôm nay là thứ 23456';
echo preg_replace('/[0-9]+/', 7, $z);

//ex19
$k = 123;
echo '<br>Kiểm tra chuỗi xem là nguyên hay không: ';
var_dump(is_int($k));

//ex20
$email = 'manhthang0704gmail.com';
echo '<br>Kiểm tra email hợp lệ : ';
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Thỏa mãn';
} else {
    echo 'Không phải email';
};
