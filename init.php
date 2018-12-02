<?php
include("vendor/autoload.php");

include("botConfig.php");
$telegramApi = new TelegramBot();
while (true) {
	sleep(2);

	$updates=$telegramApi->getUpdates();
    print_r($updates);
foreach ($updates as $update) {
	$name=$update->message->from->first_name;
	if($update->message->from->id===403123191){
      if($update->message->text==="Куда можно пойти в эту субботу?"){
       $telegramApi->sendMessage($update->message->chat->id,"Доброго времени суток,Юля.Красивый парень Паша,приглашает вас пойти покататься на коньках в эту субботу!");
	}
    }
	// if($update->message->from->id===403123191){
 //      if($update->message->text==="Куда можно пойти в эту субботу?"){
 //       $telegramApi->sendMessage($update->message->chat->id,"Доброго времени суток,Юля.Красивый парень Паша,приглашает вас пойти покататься на коньках в эту субботу!");
 //      }
	// }
	switch ($update->message->text) {
		case 'Привет':
			$telegramApi->sendMessage($update->message->chat->id,"Привет,".$name.".Вас приветствует WebProgerBot!");
			break;
		
		case 'привет':
			$telegramApi->sendMessage($update->message->chat->id,"Привет,".$name.".Вас приветствует WebProgerBot!");
			break;

		case 'Как дела?':
			$telegramApi->sendMessage($update->message->chat->id,"Нормально, а у вас?");
			break;

		default:
			# code...
			break;
	}
	
}
}


?>