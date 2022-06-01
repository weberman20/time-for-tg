<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$timUSA=date("H:i",strtotime("-5 hour"));
$timUKR=date("H:i",strtotime("3 hour"));
$timUZB = date("H:i",strtotime("5 hour"));
$timGER = date("H:i",strtotime("1 hour"));
$kun=date("d-m-Y",strtotime("5 hour"));
$input = [""];
  $rand=array_rand($input);
  $text="$input[$rand]";
 $nik = ["🇱 🇺 🇨 🇮 🇫 🇪 🇷"," ᏞᑌᑕᏆᖴᗴᖇ","ʟᴜᴄɪꜰᴇʀ "," 🅻🆄🅲🅸🅵🅴🆁" ," 🅛🅤🅒🅘🅕🅔🅡"]; // тут место LUCIFER напишите свой ник
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
  
   $bio = ["🇺🇿 $timUZB [$kun]","🇺🇸 $timUSA [$kun]","🇺🇦 $timUKR [$kun]" ,"🇩🇪 $timGER [$kun]"]; // это био
  $biorand=array_rand($bio);
  $biotxt="$bio[$biorand]";
  
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt",'about'=>$biotxt]);
$MadelineProto->account->updateStatus(['offline' => false, ]);

$yil = date("Y", strtotime("5 hour"));
$sana = date("d/m/Y", strtotime("5 hour"));


$MadelineProto->account->updateStatus(['offline' => false, ]);
$yil = date("Y", strtotime("5 hour"));
$sana = date("d/m/Y", strtotime("5 hour"));
$logo = ["https://house-ghouls.000webhostapp.com/nick/img/001.jpg",
"https://lucifer.xvest.ru/api3/api.php?text=$timeGER", // $timeUKR - Украина | $timeUZB - Узбекистан |
"https://lucifer.xvest.ru/api3/api.php?text=$timeGER"]; // $timeGER - Германия | $timeUSA - Америка |
  $logorand=array_rand($logo);
  $logopic="$logo[$logorand]";

if($yil == "2020"){
header('Content-type: image/jpg');
file_put_contents("got.jpg",file_get_contents($logopic));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
$MadelineProto->photos->updateProfilePhoto(['file' => "got.jpg" ]);

?>
