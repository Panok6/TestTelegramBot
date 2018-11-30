<?php
include("vendor/autoload.php");

include("botConfig.php");
$telegramApi = new TelegramBot();
$updates=$telegramApi->getUpdates();
print_r($updates);
?>