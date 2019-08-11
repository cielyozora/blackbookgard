<?php
// Warna Terminal
$d01 = "\e[34m";
$d02 = "\e[33m";
$d03 = "\e[96m";
$d04 = "\e[35m";
$d05 = "\e[92m";
$d06 = "\e[91m";
echo "$d05  ×============================================×\n";
echo "$d05  [ The BlackBook \n";
echo "$d05  [ Dont Forget Our Page\n";
echo "$d05  [ Please Press Enter\n";
echo "$d05  [ To Access Heaven\n";
echo "$d05  ×============================================ï¿½\n\n";
echo "$input $d04 Like our Page! fb.me/theblackbookph' : ";
$tokenx= trim(fgets(STDIN));
$md5 = md5(time());
$hash = substr($md5, 0, 8)."-".substr($md5, 8, 4)."-".substr($md5, 12, 4)."-".substr($md5, 16, 4)."-".substr($md5, 20, 12);
function curl($url, $post=null) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    if($post != null) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $exec = curl_exec($ch);
    curl_close($ch);
    return $exec;
}


include 'lib/config.php';
$token = file_get_contents("token.txt");
$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}




$me = json_decode(curl("https://graph.facebook.com/me?fields=id&access_token=".$token));
if($me && $me->id) {
    $var = "{\"0\":{\"is_shielded\":true,\"session_id\":\"$hash\",\"actor_id\":\"$me->id\",\"client_mutation_id\":\"$hash\"}}";
    $dewie = json_decode(curl("https://graph.facebook.com/graphql", array(
        "variables" => $var,
        "doc_id" => "1477043292367183",
        "query_name" => "IsShieldedSetMutation",
        "strip_defaults" => "true",
        "strip_nulls" => "true",
        "locale" => "en_US",
        "client_country_code" => "US",
        "fb_api_req_friendly_name" => "IsShieldedSetMutation",
        "fb_api_caller_class" => "IsShieldedSetMutation",
        "access_token" => $token
    )));
    if($dewie->data->is_shielded_set->is_shielded) echo "$d03 Status ==> $d05 Profile Guard Activated";
    else "error 404 jowa not found Please Install jowa to fix this erroe";
}
?>