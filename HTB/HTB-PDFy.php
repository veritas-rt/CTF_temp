<?php
// ファイルパス
$filename = '/etc/passwd';

// ファイルが存在するかどうかを確認
if (file_exists($filename)) {
    // ファイルを読み取り専用で開く
    $file = fopen($filename, 'r');
    
    if ($file) {
        // ファイル内容を読み取って表示
        while (($line = fgets($file)) !== false) {
            echo $line . "<br>";
        }

        // ファイルを閉じる
        fclose($file);
    } else {
        echo "ファイルを開けませんでした。";
    }
} else {
    echo "ファイルが存在しません。";
}
?>
