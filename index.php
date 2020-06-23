<!DOCTYPE html>
<html lang = "ja">
                <head>
                        <mera charset = "UFT-8">
                        <link rel="stylesheet" href="./default.css" type="text/css">
                <title>cert_check tool</title>
                </head>
        <body>
                <h4>証明書の整合性確認</h4>
                <div class="cp_iptxt">
                        <p>証明書<form action="app/file1_up.php" enctype="multipart/form-data" method="post"><input name="crtificate" type="file"> <input type="submit" value="アップロード"></form>
                </div>
                <div class="cp_iptxt">
                        <p>秘密鍵<form action="app/file2_up.php" enctype="multipart/form-data" method="post"><input name="privatekey" type="file"> <input type="submit" value="アップロード"></form>
                </div>
                <div class="cp_iptxt">
                        <p>中間証明書<form action="app/file3_up.php" enctype="multipart/form-data" method="post"><input name="intermediate" type="file"> <input type="submit" value="アップロード"></form>
                </div>
                <form method="post" action="app/action.php">
                <input type="submit" name="s" value="実行">
                </form>
        </body>
</html>
