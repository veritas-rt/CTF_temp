<?php
$filename = '/etc/passwd';
if (file_exists($filename)) {
    $file = fopen($filename, 'r');

    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }

    // ファイルを閉じる
    fclose($file);
  
    header("location:file:///etc/passwd")

?>
