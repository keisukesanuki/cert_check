<?php
$tempfile = $_FILES['privatekey']['tmp_name'];
$filename = './files/server.key';
 
if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile , $filename )) {
	echo $filename . "をアップロードしました。";
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
} 
?>
