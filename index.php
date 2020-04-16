﻿﻿<?php
define('API_KEY','1088018222:AAG0jPCid9PoLLO0hCjCQmAd2OfEb86VUMQ');
$admin = "1045789783"; // admin idsi
$kanalim = "-1001220178187"; 
$kanalim2 = "-1001310880608";
$kanalim3 = "-1001185649311";

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$uid = $message->from->id;
$name = $message->from->first_name;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$user = $message->from->username;
$new_chat_members = $message->new_chat_member->id;
$tx = $message->text;
$text = $message->text;
$performer = $message->performer;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$caption = $message->caption;
$edit = $update->edited_message;
$edname = $edit ->from->first_name;
$edid = $editm ->from->id;
$qid = $update->callback_query->id; 
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $message->message_id;
$cmtx = $mes->text;
$callmid = $update->callback_query->message->message_id;
$callcid = $update->callback_query->message->chat->id;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$cbname = $callback->from->first_name;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;

if (mb_stripos($data,"tekshir") !== false){
$kanal = bot('GetChatMember', [ 
'chat_id'=> $kanalim, 
'user_id'=> $callcid, 
]); 
$get = $kanal->result->status; 
$kanal2 = bot('GetChatMember', [ 
'chat_id'=> $kanalim2, 
'user_id'=> $callcid, 
]); 
$get2 = $kanal2->result->status; 
$kanal3 = bot('GetChatMember', [ 
'chat_id'=> $kanalim3, 
'user_id'=> $callcid, 
]); 
$get3 = $kanal3->result->status; 
if((($get=="creator" or $get=="administrator" or $get=="member") and ($get2=="creator" or $get2=="administrator" or $get2=="member") and ($get3=="creator" or $get3=="administrator" or $get3=="member"))){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=> "✅ Juda soz endi ismingizni menga jo'nating!",
'show_alert'=>true,
]);
bot('deletemessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('sendMessage', [
'chat_id'=>$callcid,
'text'=>"*Ismingizni kiriting:*",
'parse_mode'=>'markdown',
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=> "❌ Siz barcha kanalimizda to'liq a'zo bo‘lmadingiz!",
'show_alert'=>true,
]);
}
}

$ism = file_get_contents("ism/". $update->callback_query->message->chat->id.".txt");
if (mb_stripos($data,"2") !== false){
bot('deletemessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('SendPhoto',[
'chat_id'=>$callcid, 
'parse_mode'=>'markdown',
'photo'=>"https://uzwebnet.altervista.org/api/?name=$ism",
'caption'=>"*😊 Ism:* $ism

*Ramazon oyi muborak bo'lsin!*

@ceofox - Разработка Телеграм-ботов",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data' => "1", 'text' => "◀️"],['callback_data' => "3", 'text' => "▶️"]],
[['callback_data' => "yangi", 'text' => "⏺ Yangi ism yasash"]],
]
]),
]);
}

$ism = file_get_contents("ism/". $update->callback_query->message->chat->id.".txt");
if (mb_stripos($data,"3") !== false){
bot('deletemessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('SendPhoto',[
'chat_id'=>$callcid, 
'parse_mode'=>'markdown',
'photo'=>"https://ahror.zadc.ru/API/go.php?text=$ism",
'caption'=>"*😊 Ism:* $ism

#uydaqoling #оставайтесьдома
#vahimasizkarantin #карантинбезпаники

@ceofox - Разработка Телеграм-ботов",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data' => "2", 'text' => "◀️"]],
[['callback_data' => "yangi", 'text' => "⏺ Yangi ism yasash"]],
]
]),
]);
}

$ism = file_get_contents("ism/". $update->callback_query->message->chat->id.".txt");
if (mb_stripos($data,"1") !== false){
bot('deletemessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('SendPhoto',[
'chat_id'=>$callcid, 
'parse_mode'=>'markdown',
'photo'=>"https://ahror.zadc.ru/API/go.php?text=$ism",
'caption'=>"*😊 Ism:* $ism

#uydaqoling #оставайтесьдома
#vahimasizkarantin #карантинбезпаники

@ceofox - Разработка Телеграм-ботов",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data' => "2", 'text' => "▶️"]],
[['callback_data' => "yangi", 'text' => "⏺ Yangi ism yasash"]],
]
]),
]);
}

if (mb_stripos($data,"yangi") !== false){
bot('deletemessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('Sendmessage',[
'chat_id'=>$callcid, 
'parse_mode'=>'markdown',
'text'=>"*Ismingizni kiriting:*",
]);
unlink("ism/". $update->callback_query->message->chat->id.".txt");
}

if($text == "$text"){ 
$kanal = bot('GetChatMember', [ 
'chat_id'=> $kanalim, 
'user_id'=> $cid, 
]); 
$get = $kanal->result->status; 
$kanal2 = bot('GetChatMember', [ 
'chat_id'=> $kanalim2, 
'user_id'=> $cid, 
]); 
$get2 = $kanal2->result->status; 
$kanal3 = bot('GetChatMember', [ 
'chat_id'=> $kanalim3, 
'user_id'=> $cid, 
]); 
$get3 = $kanal3->result->status; 
if((($get=="creator" or $get=="administrator" or $get=="member") and ($get2=="creator" or $get2=="administrator" or $get2=="member") and ($get3=="creator" or $get3=="administrator" or $get3=="member"))){
if(mb_stripos($text,"/start")!== false){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*Ismingizni kiriting:*",
'parse_mode'=>'markdown',
]);
unlink("ism/". $update->message->chat->id.".txt");
}else{
bot('SendPhoto',[
'chat_id'=>$cid, 
'parse_mode'=>'markdown',
'photo'=>"https://ahror.zadc.ru/API/go.php?text=$tx",
'caption'=>"*😊 Ism:* $tx

#uydaqoling #оставайтесьдома
#vahimasizkarantin #карантинбезпаники

@ceofox - Разработка Телеграм-ботов",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data' => "2", 'text' => "▶️"]],
[['callback_data' => "yangi", 'text' => "⏺ Yangi ism yasash"]],
]
]),
]);
file_put_contents("ism/$cid.txt", $text);
}
}else{
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*$name*!
🤖Botdan to'liq foydalanish uchun bizning kanalga ulanishingiz kerak!

[1️⃣ - Kanal](t.me/uzprocoders)
[2️⃣ - Kanal](t.me/iDevuz)
[3️⃣ - Kanal](t.me/uzphpchannel)",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"➕ 1-Kanal",'url'=>"http://t.me/UZPROCODERS"]],
[['text'=>"➕ 2-Kanal",'url'=>"http://t.me/idevuz"]],
[['text'=>"➕ 3-Kanal",'url'=>"http://t.me/uzphpchannel"]],
[['callback_data' => "tekshir", 'text' => "✅ Tekshirish"]],
]
]),
]);
}
}

if(mb_stripos($text,"/start")!==false){
   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="\n$cid";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if(mb_stripos($text,"/stats")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $tx = "👤 Odamlar soni: $us";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'html',
   'text'=>$tx,
  ]);
}
?>
