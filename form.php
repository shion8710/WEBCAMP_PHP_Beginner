<?php
error_reporting(-1);
ini_set('display_errors', 'on');

//h()関数の定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

//データの取得
$input = $_GET['input_text'] ?? "";

// 出力
echo "あなたが入力したのは " , htmlspecialchars($input,  ENT_QUOTES) , " ですね";