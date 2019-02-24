# EasyTelegram
Easy Telegram wrapper for Telegram Bots Api.
## Usage

### Install Through Composer
```
composer require ybagheri/easytelegram dev-master
```
### create .env file with this format:
```
BOT_TOKEN=123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11
```

## Examples
setWebhook example.
after set webhook use this example.
you should set url of setwebhook address of this php file.
for example, 

https://api.telegram.org/bot123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11/setWebhook?url=https://url-address/bot.php

here is bot.php example:
```php
<?php
require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


$Loader = new \josegonzalez\Dotenv\Loader(realpath(__DIR__ . '/.env'));
$Loader->parse();
$environment = $Loader->toArray();

$easyTelegram = new \Ybagheri\EasyTelegram($environment["BOT_TOKEN"]);

$json = file_get_contents('php://input');
$telegram = urldecode($json);
$request = json_decode($telegram);
$message = isset($request->message) ? $request->message : (isset($request->edited_message) ? $request->edited_message : null);
if (isset($message) && $message->chat->type == 'private') {
    // private chat.
    $from_id = $message->chat->id;

    if (isset($message->text)) {
        switch ($message->text) {
            case '/start':
                $key=['inline_keyboard' => [
                    [ // Row 1
                        ['text' => 'switch', "switch_inline_query_current_chat" => "switch:"],
                    ],
                    [ // Row 2
                        ['text' => 'callback button', "callback_data" => "callback1"],
                    ],
                    [ // Row 3
                        ['text' => 'url button', "url" => "https://github.com/ybagheri/easytelegram"],
                    ],

                ],
                ];
                $res = $easyTelegram->sendMessage(['chat_id' => $from_id, 'text' => 'I\'m at your sarvice. How can I help you?', 'reply_markup' => json_encode($key)]);
                break;
        }

    }
    if (isset($message->photo)) {
        $type = 'photo';
        //

    } elseif (isset($message->video)) {
        $type = 'video';
       //

    } elseif (isset($message->audio)) {
        $type = 'audio';
        //


    } elseif (isset($message->document)) {
        $type = 'document';
        //

    } elseif (isset($message->voice)) {
        $type = 'voice';
        //

    } elseif (isset($message->video_note)) {
        $type = 'video_note';
       //

    }

} elseif (isset($message) && $message->chat->type != 'private') {
    // Group or Supergroup .
    


} elseif (isset($request->callback_query)) {


} elseif (isset($request->inline_query)) {


} elseif (isset($request->chosen_inline_result)) {


} elseif (isset($request->channel_post) || isset($request->edited_channel_post)) {
//Channel post.

}

// You can use proxy when run php in your server or local computer.

$easyTelegram = new EasiestBot(BOT_TOKEN);

// if your proxy need username and password
$easyTelegram->forwardMessage(['chat_id' => $chat_id,'from_chat_id' => $from_chat_id, 'message_id' => $message_id, 'proxy_url' => '127.0.0.1', 'proxy_port' => '49719', 'proxy_userpwd' => 'username:pass' ]);

// if you use a proxy does not need username and password like Psiphon:
$easyTelegram->forwardMessage(['chat_id' => $chat_id,'from_chat_id' => $from_chat_id, 'message_id' => $message_id, 'proxy_url' => '127.0.0.1', 'proxy_port' => '49719' ]);


	


```
