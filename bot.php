<?php
date_default_timezone_set("Asia/Jakarta");
@system("clearr");
@system("rm -rf user");
$t="\n";
$r="\n\n";
//warna gue
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
//flag

require"config.php";
echo$red."
.#####....####...##..##..##..##...####....####....####...##..##.
.##..##..##..##..###.##...####...##..##..##..##..##......##..##.
.##..##..##..##..##.###....##....##......######...####...######.$putih.
.##..##..##..##..##..##....##....##..##..##..##......##..##..##.
.#####....####...##..##....##.....####...##..##...####...##..##.
-- Creator$red :$ijo h3dw4r$putih | $red :$ijo FB $red : $ijo facebook/coe.gae $biru
----------------------------------------------------------------

";

error_reporting(0);
$login=json_decode(login($nama,$email,$userid),true);
$msg=$login["msg"];
$nik=$login["username"];
$coin=$login["coin"];
echo$kuning."[$red?$kuning]$ijo Sedang mencoba untuk Login";sleep(1);echo$red."••";sleep(1); echo"•";sleep(1); echo"••";sleep(1);echo$biru."√".$t;
echo$ijo."[$red?$ijo] $turkis login $red : ";sleep(3);echo$ijo.$msg."$biru •••√".$t;
sleep(2);
echo$putih."[$biru!$putih] Info user !! ".$t;
sleep(1);
echo$putih."[".$ijo."•".$putih."] nick$red  : ".$ijo.$nik.$t;
echo$putihh."[".$ijo."•".$putihh."] userid$red  : ".$ijo.$userid.$t;
$js=json_decode(coin($userid),true);
$coin=$js["coin"];
echo$putih."[".$ijo."•".$putih."] coin$red : ".$ijo.$coin.$r;
function coin($userid){
$arr=array("","	");
$body="user_id=".$userid;
   $curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "https://www.donycash.com/api/get_user_total_coin.php",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=> $body,
   CURLOPT_HTTPHEADER=> "Content-Type: application/x-www-form-urlencoded","Accept-Encoding: gzip","User-Agent: okhttp/3.60.0",
   CURLOPT_SSL_VERIFYPEER=>0,));$result=curl_exec($curl);
curl_close($curl);
return$result;}
//91
function login($nama,$email,$userid){
$arr=array("","	");
$h=explode("",str_replace($arr,"","User-Agent: okhttp/3.60.0)"));
$body="email=".$email."&username=".$nama."&social_id=".$userid;
   $curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "https://www.donycash.com/api/registration.php",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=> $body,
   CURLOPT_HTTPHEADER=> $h,
   CURLOPT_SSL_VERIFYPEER=>0,));$result=curl_exec($curl);
curl_close($curl);
return$result;
}
function spin($a,$userid){
$rnd=rand(1,20);
$arr=array("","	");
$h=explode("",str_replace($arr,"","User-Agent: okhttp/3.60.0)"));
$body="amount=90&user_id=".$userid."&title=Spin Bonus";
$curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "https://www.donycash.com/api/add_coin.php",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>$body,
   CURLOPT_HTTPHEADER=>$h,
   CURLOPT_SSL_VERIFYPEER=>0,));$result=curl_exec($curl);
curl_close($curl);
return$result;}
//124
function watch($i,$userid){
$arr=array("","	");
$h=explode("",str_replace($arr,"","User-Agent: okhttp/3.60.0)"));
$body="amount=100&user_id=".$userid."&title=Watch Video";
$curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "https://www.donycash.com/api/add_coin.php",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>$body,
   CURLOPT_HTTPHEADER=>$h,
   CURLOPT_SSL_VERIFYPEER=>0,));$result=curl_exec($curl);
curl_close($curl);
return$result;}
//140
function bonus($x,$userid){
$arr=array("","	");
$h=explode("",str_replace($arr,"","User-Agent: okhttp/3.60.0)"));
$body="amount=200&user_id=".$userid."&title=Watch Video";
$curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "https://www.donycash.com/api/add_coin.php",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>$body,
   CURLOPT_HTTPHEADER=>$h,
   CURLOPT_SSL_VERIFYPEER=>0,));$result=curl_exec($curl);
curl_close($curl);
return$result;
}
sleep(2);
echo$biru.
"[----x----][".$turkis." DAFTAR MENU BOT ".$biru."][----x----]\n";
echo"-----------------------------------------".$t;
echo$ijo."[".$biru."1".$ijo."] Spin".$t;
echo$ijo."[".$biru."2".$ijo."] Hot Video".$t;
echo$ijo."[".$biru."3".$ijo."] Watch Video".$t;
sleep(1);
echo$ijo."[$red?$ijo] Konfirmasi Pilih Menu$turkis Bot".$t;
sleep(1);
$opsi=readline($ijo."[$biru?$ijo] Input$red : ".$biru);
 if($opsi=="1"OR$opsi=="spin"){
$st_spin=true;
} elseif($opsi=="2"OR$opsi=="mob tokens"){
$st_bonus=true;
}
 elseif($opsi=="3"OR$opsi=="watch"){
$st_watch=true;
}
 else{
echo$ijo."[$red!$ijo]$red hanya ada 3 pilihan dalam menu !!".$t;
}
sleep(1);
 if($st_spin){
echo$ijo.$t."[$biru√$ijo]$turkis Delay Spin 5 sec ".$t;
echo$ijo."[$red!$ijo]$turkis limit Spin 60$ijo Spin$pink /$ijo Hari!!".$r;
$lmt=50;
$a=0;
$a++;
 for($a=0;$a<$lmt;$a++){
sleep(i);
$spin=json_decode(spin($a,$userid),true);
$msg=$sp4n["msg"];
$con=json_decode(coin($userid),true);
$coin=$con["coin"];
echo$pink."[".$ijo."•".$pink."] message$red : ".$ijo.$msg.$t;
echo$pink."[".$ijo."~".$ijo."] userid$red : ".$turkiss.$userid.$ijo." | total coin$red : ";echo$turkis.$coin.$t;
$st_spin=false;
  }
}
 elseif($st_spin){
echo$red."[!] spin Selesai !!".$putih.$t;
exit;
}
//204
 if($st_bonus){
echo$ijo.$t."[$biru√$ijo]$turkis Hot Video !!".$t;
echo$ijo."[$red!$ijo]$turkis Delay Hot Video 30 sec ".$r;
$lm=14;
$x=0;
$x++;
 for($x=0;$x<$lm;$x++){
sleep(20);
$bonus=json_decode(bonus($x,$userid),true);
$msg=$bonus["msg"];
$coni=json_decode(coin($userid),true);
$coi=$coni["coin"];
echo$ijo."[".$biru."•".$ijo."] message$red : ".$pink.$msg.$t;
echo$ijo."[".$biru."~".$ijo."] userid$red : ".$turkis.$userid.$pink." | total coin$red : ";echo$turkis.$coi.$t;
$st_bonus=false;
  }
}
 elseif($st_bonus){
echo$red."[!] Bonus Selesai !!".$ijo.$t;
exit;
}

 if($st_watch){
echo$pink.$t."[$red!$pink]$turkis Watch Videos !!".$t;
echo$pink."[$red!$pink]$ijo Dengan Delay 10 sec ".$r;
$lmit=10;
$i=0;
$i++;
 for($i=0;$i<$lmit;$i++){
sleep(10);
$watch=json_decode(watch($i,$userid),true);
$msg=$watch["msg"];
$co=json_decode(coin($userid),true);
$c=$co["coin"];
echo$putih."[".$biru."•".$putih."] message$red : ".$ijo.$msg.$t;
echo$putih."[".$biru."~".$putih."] userid$red : ".$ijo.$userid.$putihh." | total coin$red : ";echo$turkis.$c.$t;
$err=false;
  }
}
 if($err){
echo$red."[!] Watch Video Sudah selesai !!".$putih.$t;
exit;
}

?>
