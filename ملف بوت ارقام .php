<?php

$token = "6087014831:AAH3THZYgK__HTkzx_I4LAK-kHy9I0Lvx9c"#توكن بوتك 
define('API_KEY',$token);
date_default_timezone_set('Asia/Baghdad');
//-------------------------
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
//////////////////////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$namee = $message->from->first_name;
$chat_id = $message->chat->id;
$text = $message->text;
//==========================================//

                         $admin = 5072381070; #ايدي الادمن 

                         $ch1 = "sorsmafia"; #معرف قناتك ب @

                         $ch2 = "sorsmafia"; #معرف قناتك دون @

                         $admin2 = "5560950431"; #معرف الادمن 

//==========================================//
$message_id = $message->message_id;
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$namee = $update->callback_query->from->first_name;
}
$token = $yfeee;
$getmember= explode("\n",$member);
$member = file_get_contents('members.txt');
$lockjoin = file_get_contents('lockjoin.txt');
$start = file_get_contents('start.txt');
$set = file_get_contents("set.txt");
$msgidtxt = file_get_contents("msgids.txt");
$idtxt = file_get_contents("$id/$id.txt");
$rules = file_get_contents("rules.txt");
$rule = file_get_contents("rule.txt");
$channels = file_get_contents("channels.txt");
$channel = file_get_contents("channel.txt");
$set = file_get_contents("set.txt");
$msgsend = file_get_contents("sends.txt");
$sales = json_decode(file_get_contents('sales.json'),true);
$buttons = json_decode(file_get_contents('button.json'),true);
$getmember = explode("\n",$member);
$from_id = $message->from->id;
$rdod = json_decode(file_get_contents("rdod.json"),true);
$replyy = $message->reply_to_message->forward_from->id;
$nameee = $message->from->first_name;
$username = $message->from->username;
$nameeee = $update->callback_query->from->first_name;
$usernamee = $update->callback_query->from->username;
$setcoin = file_get_contents("setcoin.txt");
$getmes_id = explode("\n", file_get_contents("$message_id.txt"));
//==================//
function save($array){
file_put_contents('button.json', json_encode($array));
}
//==================//
if($chat_id == $admin){
if($text == "/admin"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضف رقم",'callback_data'=>"addnumber"],['text'=>"حذف رقم",'callback_data'=>"delnumber"]],
[['text'=>"اارسال نقاط للكل ",'callback_data'=>"coinforall"]],
[['text'=>"المشتركين",'callback_data'=>"members"],['text'=>"اذاعة نشر",'callback_data'=>"send"]],
[['text'=>"تحديد نقاط الدعوة",'callback_data'=>"setcoin"],['text'=>"",'callback_data'=>"delbans"]],
[['text'=>"",'callback_data'=>"delnumbers"],['text'=>"تعيين /start",'callback_data'=>"setstart"]],
]
])
]);
  $sales['mode'] = null;
  file_put_contents("sales.json",json_encode($sales));
 }
if($text == "/all"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
▪ تم بنجاح 😺👍",
]);
for($i=0;$i < count($getmember); $i++){
$sales[$getmember[$i]]['steps'] = "no";
file_put_contents("sales.json",json_encode($sales));
 }
}
if($text == "خصم نقاط"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
ارسل ايدي الشخص المراد ارسال نقاط له .
",
]);
  $buttons['mode'] = 'chatt';
  save($buttons);
  exit;
  }
if($chat_id == $admin){
   if($text != '/start' and $text != null and $buttons['mode'] == 'chatt'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "الان ارسل عدد النقاط التي تريد خصم .",
 ]);
   $buttons['mode'] = 'poii';
   $buttons['idd'] = $text;
  save($buttons);
  exit;
}
}
if($chat_id == $admin){
 if($text != '/start' and $text != null and $buttons['mode'] == 'poii'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"◾ تم خصم $text نقطة الى ".$buttons['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$buttons['idd'],
  'text'=>"تم خصم $text نقطة من المطور ",
  ]);
  $buttons['mode'] = null;
  $sales[$buttons['idd']]['collect'] -= $text;
  $buttons['idd'] = null;
  save($buttons);
file_put_contents("sales.json",json_encode($sales));
  exit;
}
}
if($chat_id == $admin){
if($text == "ارسال نقاط"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
ارسل ايدي الشخص المراد ارسال نقاط له .
",
]);
  $buttons['mode'] = 'chhat';
  save($buttons);
  exit;
  }
}
if($chat_id == $admin){
   if($text != '/start' and $text != null and $buttons['mode'] == 'chhat'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "الان ارسل عدد النقاط التي تريد ارسالها .",
 ]);
   $buttons['mode'] = 'poi';
   $buttons['idd'] = $text;
  save($buttons);
  exit;
}
}
if($chat_id == $admin){
 if($text != '/start' and $text != null and $buttons['mode'] == 'poi'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"◾ تم ارسال $text نقطة الى ".$buttons['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$buttons['idd'],
  'text'=>"تم اعطائك $text نقطة من المطور ",
  ]);
  $buttons['mode'] = null;
  $sales[$buttons['idd']]['collect'] += $text;
  $buttons['idd'] = null;
  save($buttons);
file_put_contents("sales.json",json_encode($sales));
  exit;
}
}
if($data == "setstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▪ ارسل رسالة الضهور عند دخول شخص الى البوت :
",
]);
$buttons['mode'] = 'str';
save($buttons);
exit;
 }
 if($text != '/start' and $text != null and $buttons['mode'] == 'str'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. 
',
]);
file_put_contents("start.txt",$text);
  $buttons['mode'] = null;
  save($buttons);
  exit;
 }
if($data == "setcoin"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▪ ارسل عدد النقاط التي تريد ان يكسبها العضو عند دعوة عضو اخر 🔰
(ارقام فقط)
",
]);
$buttons['mode'] = 'coc';
save($buttons);
exit;
}
 if($text != '/start' and $text != null and $buttons['mode'] == 'coc'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. 
',
]);
file_put_contents("setcoin.txt","$text");
$buttons['mode'] = null;
save($buttons);
exit;
}
if($data == "send"){
file_put_contents("set.txt","send");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
هلا بك في قسم الاذاعه 

1- ارسال رسلتك 
2- حدد نوع النشر
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text and $set == "send"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◻ تم حفظ رسالتك :
*$text*

◾ اختر طريقة النشر الان .
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- نشر عادي 💬",'callback_data'=>"sendmsg"],['text'=>"- ارسال ماركدون 🗯",'callback_data'=>"sendmark"]],
[['text'=>"- ارسال هتمل 🔃",'callback_data'=>"sendhtml"],['text'=>"- ارسال لشخص محدد 🔘",'callback_data'=>"sendone"]],
[['text'=>"",'callback_data'=>"formsg"],['text'=>"- ارسال لاشخاص محددين 💭",'callback_data'=>"sendsome"]],
[['text'=>"- اوامر النشر بتوجيه 🗳",'callback_data'=>"orderfor"]],
]
])
]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt",$text);
}
if($data == "sendmsg"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$msgsend 

$text
◾ جاري نشر الرسالة ... 💬",
]);
for($i=0;$i < count($getmember); $i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>$msgsend,
]);
file_put_contents("sends.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم نشر الرسالة الى {$count} مشترك 🔰
",
]);
}
//=====
if($data == "orderfor"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ حسنا !! اختر نوع التوجيه .
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"نشر توجيه 🔁",'callback_data'=>"formsg"],['text'=>"- ارسال لاشخاص محددين 💭",'callback_data'=>"sendsome"]],
[['text'=>"- توجيه لشخص محدد 👤",'callback_data'=>"forone"]],
[['text'=>"- توجية لعدة اشخاص 👥",'callback_data'=>"forsome"]],
]
])
]);
}
if($data == "formsg"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الرسالة الان .",
]);
file_put_contents("set.txt","sendl");
}
if($text and $set == "sendl"){
for($i=0;$i < count($getmember); $i++){
bot('ForwardMessage',[
	'chat_id'=>$getmember[$i],
	'from_chat_id'=>$chat_id,
	'message_id'=>$message->message_id,
]);
file_put_contents("set.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم توجيه الرسالة الى {$count} مشترك 🔰
",
]);
}
//=====
if($data == "sendmark"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ جاري نشر الرسالة ... 💬",
]);
for($i=0;$i<count($getmember);$i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
file_put_contents("sends.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم نشر الرسالة الى {$count} مشترك 🔰

(ماركداون)
",
]);
}
if($data == "sendhtml"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ جاري نشر الرسالة ... 💬",
]);
for($i=0;$i<count($getmember);$i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>$msgsend,
'parse_mode'=>"HTML",
]);
file_put_contents("sends.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم نشر الرسالة الى {$count} مشترك 🔰

(هتمل)
",
]);
}
if($data == "sendone"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان ايدي الشخص المراد الارسال له .
",
]);
file_put_contents("set.txt","xxx");
}
if($text and $set == "xxx"){
bot('sendMessage',[
'chat_id'=>$text,
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
$count = count($getmember)-1;
if($data == "sendsome"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان رقم محدد من حساب عدد المشتركين .

*عدد المشتركين* :- $count

◾ مثلا 20 ✅
◾ بعد ذلك سيتم ارسال رسالتك لـ 20 شخص من بين $count شخص 🔰
",
]);
file_put_contents("set.txt","nnn");
$allcount = $count - $text;
}
$countt = count($getmember)-$allcount;
if($text and $set == "nnn"){
for($i=0;$i<count($countt);$i++){
bot('sendMessage',[
'chat_id'=>$countt[$i],
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم ارسال رسالتك لـ $count[$i] شخص بنجاح ✅ .
",
    ]);
  }
//==============@amrakl=========
if($text == "/admin"){
file_put_contents("data/$from_id/stats.txt","none");
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
file_put_contents('users.txt', $add_user);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~
",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
           'keyboard'=>[
[['text'=>'خصم نقاط'],['text'=>'ارسال نقاط']],
],
"resize_keyboard"=>true,
])
]);
} 


if($data == "sendone"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان ايدي الشخص المراد الارسال له .
",
]);
file_put_contents("set.txt","xxx");
}
if($text and $set == "xxx"){
bot('sendMessage',[
'chat_id'=>$text,
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
$count = count($getmember)-1;
if($data == "sendsome"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان رقم محدد من حساب عدد المشتركين .

*عدد المشتركين* :- $count

◾ مثلا 20 ✅
◾ بعد ذلك سيتم ارسال رسالتك لـ 20 شخص من بين $count شخص 🔰
",
]);
file_put_contents("set.txt","nnn");
$allcount = $count - $text;
}
$countt = count($getmember)-$allcount;
if($text and $set == "nnn"){
for($i=0;$i<count($countt);$i++){
bot('sendMessage',[
'chat_id'=>$countt[$i],
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم ارسال رسالتك لـ $countt شخص بنجاح ✅ .
",
    ]);
  }
//===============
if($data == "forone"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان ايدي الشخص المراد التوجيه له .
",
]);
file_put_contents("set.txt","forw");
}
if($text and $set == "forw"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ ارسل الرسالة الان .
",
]);
file_put_contents("set.txt","foronee");
file_put_contents("sends.txt",$text);
}
if($text and $set == "foronee"){
    bot('forwardMessage',[
        'chat_id'=>$msgsend,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم ارسال رسالتك للشخص بنجاح .",
]);
  }
$count = count($getmember)-1;
if($data == "forsome"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان رقم محدد من حساب عدد المشتركين .

*عدد المشتركين* :- $count

◾ مثلا 20 ✅
◾ بعد ذلك سيتم توجيه رسالتك لـ 20 شخص من بين $count شخص 🔰
",
]);
file_put_contents("set.txt","nnnn");
}
$count = count($getmember);
if($text and $set == "nnnn"){
$allcount = $count - $text;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ ارسل رسالتك الان .

◾ سيتم ارسالها لـ $text ولن يتم ارسالها لـ $allcount
",
]);
file_put_contents("set.txt","sendfor");
file_put_contents("sends.txt","$allcount");
}
if($text and $set == "sendfor"){
$countt = count($getmember)-$msgsends;
for($i=0;$i<count($countt);$i++){
    bot('forwardMessage',[
        'chat_id'=>$countt[$i],
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم التوجيه لـ $countt شخص بنجاح ✅ .
",
    ]);
  }
$count = count($getmember)-1;
if($data == "members"){
 bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"$count مشترك 🔰",
      'show_alert'=>true,
   ]);}
if($data == "backup"){
$user = (file_get_contents("sales.json"));
file_put_contents("backup.json",$user);
$usser = (file_get_contents("button.json"));
file_put_contents("backup1.json",$usser);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▪ تم عمل نسخة احتياطية بنجاح 
قناة التحديثات @sorsmafia
",
]);
}
if($data == "coinforall"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▪ ارسل الان عدد النقاط المراد ارسالها لـ $count مشترك ✅
",
]);
$buttons['mode'] = 'aadd';
save($buttons);
exit;
 }
 if($text != '/start' and $text != null and $buttons['mode'] == 'aadd'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. 
▪ تم ارسال $text بنجاح لـ $count مشترك 🙂',
]);
for($i=0;$i<count($getmember);$i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>"
▪ تم اعطائك $text $ من المطور 
",
]);
$sales[$getmember[$i]]['collect'] += $text;
file_put_contents("sales.json",json_encode($sales));
}
$buttons['mode'] = null;
save($buttons);
exit;
}
if($data == "delallcoin"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▪ ارسل الان عدد النقاط المراد خصمها من $count مشترك ✅
",
]);
$buttons['mode'] = 'aaadd';
save($buttons);
exit;
 }
 if($text != '/start' and $text != null and $buttons['mode'] == 'aaadd'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. 
▪ تم خصم $text بنجاح لـ $count مشترك 🙂',
]);
for($i=0;$i<count($getmember);$i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>"
▪ تم اعطائك $text $ من المطور
",
]);
$sales[$getmember[$i]]['collect'] -= $text;
file_put_contents("sales.json",json_encode($sales));
}
$buttons['mode'] = null;
save($buttons);
exit;
}

//==================//
 if($data == 'addnumber'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
▪ ارسل اسم الرقم لإضافته .
",
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- الغاء 🚫!','callback_data'=>'c']]
      ]
    ])
  ]);
  $buttons['mode'] = 'add';
  save($buttons);
  exit;
 }
 if($text != '/start' and $text != null and $buttons['mode'] == 'add'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. 
▪ ارسل عدد النقاط الان (ارقام فقط)',
  ]);
  $buttons['n'] = $text;
  $buttons['mode'] = 'addm';
  save($buttons);
  exit;
 }
 if($text != '/start' and $text != null and $buttons['mode'] == 'addm'){
  $code = rand(100000, 999999);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ السلعة ✅. 
   ℹ️┇الاسم : '.$buttons['n'].'
💵┇السعر : '.$text.'
⛓┇كود السلعة : '.$code
  ]);
  $buttons['sales'][$code]['name'] = $buttons['n'];
  $buttons['sales'][$code]['price'] = $text;
  $buttons['n'] = null;
  $buttons['mode'] = null;
  save($buttons);
  exit;
 }
 if($data == 'delnumber'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'• قم بأرسال كود السلعة ، 📬',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- الغاء 🚫!','callback_data'=>'c']]
      ]
    ])
  ]);
  $buttons['mode'] = 'del';
  save($buttons);
  exit;
 }
 if($text != '/start' and $text != null and $buttons['mode'] == 'del'){
  if($buttons['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم حذف السلعة ✅. 
   ℹ️┇الاسم : '.$buttons['sales'][$text]['name'].'
💵┇السعر : '.$buttons['sales'][$text]['price'].'
⛓┇كود السلعة : '.$text
  ]);
  unset($buttons['sales'][$text]);
  $buttons['mode'] = null;
  save($buttons);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'- الكود الذي ارسلته غير موجود 🚫!'
   ]);
  }
 }
} else {
 if(preg_match('/\/(start)(.*)/', $text)){
  $ex = explode(' ', $text);
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
   if($setcoin == null){
   file_put_contents("setcoin.txt",1);
   }
    $sales[$ex[1]]['collect'] += $setcoin;
    $sales[$ex[1]]['mynum'] += 100;
    file_put_contents("sales.json",json_encode($sales));
    bot('sendMessage',[
     'chat_id'=>$ex[1] ,
     'text'=>"
◾ دخل شخص الى رابطك الخاص .

◾ ايديه : $chat_id

◾ نقاطك الان : ".$sales[$ex[1]]['collect']." $ ",
    ]);
    $sales[$chat_id]['id'][] = $chat_id;
    file_put_contents("sales.json",json_encode($sales));
   }
  }
  $status = bot('getChatMember',['chat_id'=>'-1001317987229','user_id'=>$chat_id])->result->status;
  if($status == 'left'){
   bot('sendMessage',[
       'chat_id'=>$chat_id,
       'text'=>"
- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- $ch1
- اشترك ثم ارسل { /start }📛!
",
       'reply_to_message_id'=>$message->message_id,
         'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'◾ اشتراك .','url'=>'https://t.me/$ch2']],
     ]
     ])
   ]);
if ($update && !in_array($chat_id, $getmember)) {
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
file_put_contents("members.txt","$chat_id\n", FILE_APPEND);
}
   exit();
  }
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   file_put_contents("sales.json",json_encode($sales));
  }
    if($sales[$chat_id]['mynum'] == null){
   $sales[$chat_id]['mynum'] = 0;
   file_put_contents("sales.json",json_encode($sales));
  }
  if($buttons['activity'] == null){
  $buttons['activity'] = "YES";
 }
  if($sales[$chat_id]['mysend'] == null){
   $sales[$chat_id]['mysend'] = "لايوجد لديك طلبات !!";
   file_put_contents("sales.json",json_encode($sales));
  }
if($start == null){
file_put_contents("start.txt","

◾ اهلا بك في بوت الارقام 👋
◾ البوت يقوم بإعطائك ارقام مقابل النقاط 🧡
◾ قم بتجميع النقاط واحصل على الارقام 🌚
قناة التحديثات $ch1

");
}
  bot('sendmessage',[
   'chat_id'=>$chat_id,
'text'=>"
$start
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"شراء رقم",'callback_data'=>"sales"],['text'=>"جمع نقاط",'callback_data'=>"col"]],
[['text'=>"نقاطي ",'callback_data'=>"info"],['text'=>"طلباتي 🛎",'callback_data'=>"mysend"]],
[['text'=>"تحويل نقاط",'callback_data'=>"sendcoin"],['text'=>"شراء نقاط",'callback_data'=>"buy"]],
[['text'=>"شرح البوت 🎥",'callback_data'=>"about"],['text'=>"طلب النقاط",'callback_data'=>"getcoin"]],
[['text'=>"مراسلة الدعم 📮",'callback_data'=>"sup"]],
    ] 
   ])
  ]);
 }
}
  if($data == 'back'){
  $sales['mode'] = null;
  file_put_contents("sales.json",json_encode($sales));
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>"
$start
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"شراء رقم",'callback_data'=>"sales"],['text'=>"جمع نقاط",'callback_data'=>"col"]],
[['text'=>"نقاطي ",'callback_data'=>"info"],['text'=>"طلباتي 🛎",'callback_data'=>"mysend"]],
[['text'=>"شراء نقاط",'callback_data'=>"buy"]],
[['text'=>"مراسلة الدعم 📮",'callback_data'=>"sup"]],
    ] 
   ])
  ]);
 }
 if($data == 'sup'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>"
◾ ارسل اقتراحاتك ومشاكلك حول البوت الان .
",
 'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                                [
                        ['text'=>"◾ العودة",'callback_data'=>"back"],
                        ],
                    ]
])
]);
$sales['mode'] = 'sun';
$sales['chat'] = $chat_id;
file_put_contents("sales.json",json_encode($sales));
}
if($chat_id == $sales['chat']){
 if($text != '/start' and $text != null and $sales['mode'] == 'sun'){
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم ارسال رسالتك وسيتم النظر فيها .
◾ شكرا لك !!",
 'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                                [
                        ['text'=>"◾ العودة",'callback_data'=>"back"],
                        ],
                    ]
])
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
◾ رسالة من : `$chat_id`
◾ الرسالة : *$text*
",
'parse_mode'=>"Markdown",
]);
}
}
//================//
//================//
if($data == "buy"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▪ راسل المطور لشراء النقاط ✅

$admin2
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة",'callback_data'=>"back"]],
]
])
]);
}
//================//
//================//
if($data == "mysend"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
قائمة طلباتك :-

▪ ".$sales[$chat_id]['mysend']."
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة",'callback_data'=>"back"]],
]
])
]);
}
//================//
if($data == "info"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
عدد الذين دعوتهم : ".$sales[$chat_id]['mynum']."
عدد نقاطك : ".$sales[$chat_id]['collect']."
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة",'callback_data'=>"back"]],
]
])
]);
}
//================//
if($data == "col"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
انسخ الرابط ثم قم بمشاركته مع اصدقائك 📥 .

- كل شخص يقوم بالدخول ستحصل على 100 نقطه 📊 .

- بإمكانك عمل اعلان خاص برابط الدعوة الخاص بك 📬 .

~ رابط الدعوة :

https://t.me/$bot?start=$chat_id
",
 'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                                [
                        ['text'=>"🌐 مشاركة الرابط",'switch_inline_query'=>" "],
                        ],
[['text'=>"- العودة",'callback_data'=>"back"]],
                        ]
                        ])
  ]);
 }

if($rules == null){
file_put_contents("rules.txt","NO");
}
if($rule == null){
file_put_contents("rule.txt","▪ اقرأ هذا اولا :
▪ اقرأ هذا اولا :
▪ حسنا صديقي !! جميع العروض الموجودة في الاسفل حقيقية وبكميات محدودة .
▪ وجميعها ايضا محددة بالنقاط لكي تحصل عليها يجب تجميع هذه النقاط 🔰
◾لاتقلق اذا لايوجد لديك معرف فسوف نقوم بإيصال العرض اليك عبر الايدي الخاص بك ✅

▪ اضغط على التالي لعرض العروض ✅");
}
if($data == "sales"){
if($rules == "NO"){
file_put_contents("set.txt","null");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$rule
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- التالي ➡",'callback_data'=>"next"]],
[['text'=>"- العودة",'callback_data'=>"back"]],
]
])
]);
file_put_contents("rules.txt","YES");
}
else{
$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'🔰 السعر 💰','callback_data'=>'s'],['text'=>'📞 نوع الرقم 🔰','callback_data'=>'s']];
  foreach($buttons['sales'] as $code => $buttonss){
   $reply_markup['inline_keyboard'][] = $reply_markup[] =[['text'=>"".$buttonss['price']."نقاط 💵",'callback_data'=>$code],['text'=>$buttonss['name'],'callback_data'=>$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'العودة','callback_data'=>'back']];
  $reply_markup = json_encode($reply_markup);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- الارقام التي يقدمها البوت ، 🔥

▪ نقاطك : ".$sales[$chat_id]['collect']." نقاط 💰
▪ قائمة العروض المتوفرة لدينا 🔰??
",
'reply_markup'=>($reply_markup)
  ]);
  }
 }
if($data == "next"){
$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'🔰 السعر 💰','callback_data'=>'s'],['text'=>'نوع العرض ☎️🔰','callback_data'=>'s']];
  foreach($buttons['sales'] as $code => $buttonss){
   $reply_markup['inline_keyboard'][] = $reply_markup[] =[['text'=>"".$buttonss['price']."نقاط 💰",'callback_data'=>$code],['text'=>$buttonss['name'],'callback_data'=>$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'🔙 العودة 🔜','callback_data'=>'back']];
  $reply_markup = json_encode($reply_markup);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
قائمة العروض المتوفرة لدينا 📮
",
'reply_markup'=>($reply_markup)
  ]);
  }
//=============//
elseif(strpos($text, "حظر ") !== false){
$nambtn = str_replace("حظر ",$text);
file_put_contents("banslist.txt","$nambtn\n", FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم حظره بنجاح .',
]);
bot('sendMessage',[
'chat_id'=>$nambtn,
'text'=>'▪ تم حظرك بنجاح .',
]);
}
elseif(strpos($text, "الغاء حظر ") !== false ){
$replyy = str_replace("الغاء حظر ",$text);
$strr = str_replace($replyy."\n", "" ,$bans);
file_put_contents("banslist.txt",$strr);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>'تم الغاء حظره بنجاح .',
]);
bot('sendMessage',[
'chat_id'=>$replyy,
'text'=>'تم الغاء حظرك بنجاح .'
]);
}
if($bans == "" or $bans == null){
file_put_contents("banslist.txt","");
}
if($data == "showbans"){
$count = count($banlist)-1;
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
المحظورين : *$count*

*$bans*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- ?????? ??",'callback_data'=>"all"]],
]
])
]);
}
if($data == "delbans"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- ?????? ??",'callback_data'=>"all"]],
]
])
]);
file_put_contents("banslist.txt","");
}
//===============//
if($data == 'yes'){
  $price = $buttons['sales'][$buttons[$chat_id]['mode']]['price'];
  $name = $buttons['sales'][$buttons[$chat_id]['mode']]['name'];
  bot('editMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>"
▪تم شراء العرض بنجاح ☎💰✅
▪ في خلال 48 ساعة بالكثير سيتم تسليم رقمك 😼👍

▪ اذا حدث وماستلمت طلبك تواصل معنا :
$admin2
▪ يرجى التواصل معنا اذا لم تستلم طلبك في غضون 48 ساعه 😐
",
  ]);
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"[$namee](tg://user?id=$chat_id) \n - قام بشراء $name بسعر $price ، 🧨

 عدد من دعاهم : ".$sales[$chat_id]['mynum']."
عدد النقاطه : ".$sales[$chat_id]['collect']."
▪ طلباته ".$sales[$chat_id]['mysend']."
",
   'parse_mode'=>"Markdown",
  ]);
  $buttons[$chat_id]['mode'] = null;
  $sales[$chat_id]['collect'] -= $price;
  $buttons[$chat_id]['mysend'] = "$name بـ $price نقاط ✅";
  file_put_contents("sales.json",json_encode($sales));
  save($buttons);
  exit;
 } else {
if($data == 's') { exit; }
$price = $buttons['sales'][$data]['price'];
$name = $buttons['sales'][$data]['name'];
if($price != null){
if($price <= $sales[$chat_id]['collect']){
bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"- هل انت متأكد من شراء ( $name ) بقيمة ( $price ) ?!",
      'reply_markup'=>json_encode([
       'inline_keyboard'=>[
        [['text'=>'- نعم 🔰','callback_data'=>'yes'],['text'=>'- لا 🚫','callback_data'=>'sales']] 
       ] 
      ])
     ]);
     $buttons[$chat_id]['mode'] = $data;
     save($buttons);
     exit;
    } else {
     bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"- نقاطك ليست كافية لشراء هذا العرض 🚫 📋
- نقاطك الان : ".$sales[$chat_id]['collect']." نقاط 💵",
      'show_alert'=>true,
     ]);
    }
   }
}
}