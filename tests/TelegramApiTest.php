<?php
use Ybagheri\EasyTelegram;

class TelegramApiTest extends PHPUnit_Framework_TestCase
{
    private $token = '521988982:AAGOA0NLTfSxjv3YfnqmMl4aUuKdRI5c-3k'; //HelloXOXBot
    private $chatId = 105841687;

    public function testTelegramApi()
    {
        $tele=new EasyTelegram($this->token);
        $keyboard=['inline_keyboard' => [
            [ // Row 1
                ['text' => 'Row 1 c1',"callback_data" => "myCallbackData_11"],
                ['text' => 'Row 1 c2',"callback_data" => "myCallbackData_12"],
                ['text' => 'Row 1 c3',"callback_data" => "myCallbackData_13"],
            ],
            [ // Row 2
                ['text' => 'Row 2 c1',"callback_data" => "myCallbackData_21"],
                ['text' => 'Row 2 c2',"callback_data" => "myCallbackData_22"],
                ['text' => 'Row 2 c3',"callback_data" => "myCallbackData_23"],
            ],
            [ // Row 3
                ['text' => 'Row 3 c1',"callback_data" => "myCallbackData_31"],
                ['text' => 'Row 3 c2',"callback_data" => "myCallbackData_32"],
                ['text' => 'Row 3 c3',"callback_data" => "myCallbackData_33"],
            ],
        ],
        ];
        $result = $tele->sendMessage(['chat_id' => $this->chatId,'text' => 'new text for','reply_markup' => json_encode($keyboard)]);
        $this->assertEquals($result->ok, true);

        $result = $tele->getMe();
        $this->assertEquals($result->ok, true);



    }

}