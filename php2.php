<?php
//Www.StarManh.Net
set_time_limit(0);
$token = ''; 
$camxuc = array('ANGRY','HAHA','LOVE','WOW','SAD');
$cx= $camxuc[ rand(0, count($camxuc)-1) ];
$post = json_decode(request('https://graph.facebook.com/fql?q=SELECT+post_id,+message,+actor_id,+type+FROM+stream+WHERE+type+!=+%27257%27+AND+source_id+IN+(SELECT+uid2+FROM+friend+WHERE+uid1+=+me())+LIMIT+10&access_token=' . $token), true); //Cảm ơn anh Bách cho em đoạn graph này nha 
$logpost = file_get_contents("reaction.log");
for ($i = 0; $i < 100; $i++) {
 $idpost = $post['data'][$i]['post_id'];

if (strpos($logpost, $idpost) === FALSE) 
{
request('https://graph.fb.me/' . urlencode($idpost) . '/reactions?type=' . $cx . '&method=post&access_token=' . $token);
 $luulog = fopen("reaction.log", "a");
 fwrite($luulog, $idpost . "\n");
 fclose($luulog);
 
} else {
 
echo ('ID STATUS : <a href="https://www.facebook.com/'.$idpost .'" target="_blank"> '.$idpost .'</a> <span style="color:red"> => Xong Reactions '.$cx.'</span><hr/>');
 
}
}

function request($url)
{
 if (!filter_var($url, FILTER_VALIDATE_URL)) {
 return FALSE;
 }
 
 $options = array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => TRUE,
 CURLOPT_HEADER => FALSE,
 CURLOPT_FOLLOWLOCATION => TRUE,
 CURLOPT_ENCODING => '',
 CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.87 Safari/537.36',
 CURLOPT_AUTOREFERER => TRUE,
 CURLOPT_CONNECTTIMEOUT => 15,
 CURLOPT_TIMEOUT => 15,
 CURLOPT_MAXREDIRS => 5,
 CURLOPT_SSL_VERIFYHOST => 2,
 CURLOPT_SSL_VERIFYPEER => 0
 );
 
 $ch = curl_init();
 curl_setopt_array($ch, $options);
 $response = curl_exec($ch);
 $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 curl_close($ch);
 unset($options);
 return $http_code === 200 ? $response : FALSE;
}
?>