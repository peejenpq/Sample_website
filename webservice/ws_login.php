<?
$data = file_get_contents("php://input");
$dataJsonDecode = json_decode($data);
$var_username = $dataJsonDecode->var_username;
$var_password = $dataJsonDecode->var_password;

$user = $var_username;
$pwd = $var_password;

if( ($user=='bank') && ($pwd =='namo') ){

	$results = '{"results":"success_login"}';

}else{

	$results = '{"results":"error_login"}';

}
echo $results;

?>