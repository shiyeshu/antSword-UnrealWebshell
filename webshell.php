<?php 
$A=urldecode(file_get_contents("php://input"));

$iscmd="%(.*)127;%si";

if (preg_match($iscmd,$A,$B)!=0) {
    
$ze="%echo \"([^<]*?).\"([^<]*?)\";%si";
preg_match($ze,$A,$B);
$c="$B[0]";
$key= str_replace(['"', '.', 'echo', ' ', ";"], "", $c);

    $payload='http://127.0.0.1/index.html';
    echo "$key".'ret=405'."\n".'数据解码错误，请访问使用文档查询解决方案。AntSword：'."$payload";
} else {
    
    echo "no";
$ze="%echo \"([^<]*?).\"([^<]*?)\";%si";
preg_match($ze,$A,$B);
$c="$B[0]";
$key= str_replace(['"', '.', 'echo', ' ', ";"], "", $c);
$txt='D:/phpstudy_pro/WWW'."\t".'C:D:E:F:'."\t".'Windows NT LAPTOP-46FFII5G 6.2 build 9200 (Windows 8 Business Edition) i586'."\t".'administrator';

echo "$key"."$txt";

}



?>
