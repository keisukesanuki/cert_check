<?php

if ($_POST["s"]=="実行"){

        $exe_script = "./cert_check.sh ./files/server.crt ./files/server.key ./files/server.ca.crt";
        exec($exe_script, $inet, $return_var);

        if ( $return_var == 0){
                $return_result = "処理が完了しました。";
        }else{
                $return_result = "エラーが発生しました。";
}
        echo "実行結果：".$return_result;
        echo "<br />";
        print_r( $inet );

	$exe_script_rm = "rm -f ./files/server.crt ./files/server.key ./files/server.ca.crt";
	exec($exe_script_rm);

}
