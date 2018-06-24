<?php
/**
 * Created by PhpStorm.
 * User: bagheri
 * Date: 02/21/2018
 * Time: 08:03 AM
 */

namespace Ybagheri;
use Ybagheri\TelegramBotsApi;


class EasyTelegram  implements TelegramBotsApi
{
    use TelegramHelper;
    use EasyOOP;   
    public $token;
    public $botId;

    /**
     * TelegramApi constructor.
     * @param string $token
     */
    public function __construct(string $token=null)
    {

        $this->token = isset($token)?$token:$this->token;
    } //Lumen_robot;

    public function getUpdates(array $params){ return $this->doWithMethod($params);}

    public function setWebhook(array $params){ return $this->doWithMethod($params);}

    public function sendMessage(array $params){ return $this->doWithMethod($params);}

    public function forwardMessage(array $params){ return $this->doWithMethod($params);}

    public function sendPhoto(array $params){ return $this->doWithMethod($params);}

    public function sendAudio(array $params){ return $this->doWithMethod($params);}

    public function sendDocument(array $params){ return $this->doWithMethod($params);}

    public function sendVideo(array $params){ return $this->doWithMethod($params);}

    public function sendVoice(array $params){ return $this->doWithMethod($params);}

    public function sendVideoNote(array $params){ return $this->doWithMethod($params);}

    public function sendMediaGroup(array $params){ return $this->doWithMethod($params);}

    public function sendLocation(array $params){ return $this->doWithMethod($params);}

    public function editMessageLiveLocation(array $params){ return $this->doWithMethod($params);}

    public function stopMessageLiveLocation(array $params){ return $this->doWithMethod($params);}

    public function sendVenue(array $params){ return $this->doWithMethod($params);}

    public function sendContact(array $params){ return $this->doWithMethod($params);}

    public function sendChatAction(array $params){ return $this->doWithMethod($params);}

    public function getUserProfilePhotos(array $params){ return $this->doWithMethod($params);}

    public function getFile(array $params){ return $this->doWithMethod($params);}

    public function kickChatMember(array $params){ return $this->doWithMethod($params);}

    public function unbanChatMember(array $params){ return $this->doWithMethod($params);}

    public function restrictChatMember(array $params){ return $this->doWithMethod($params);}

    public function promoteChatMember(array $params){ return $this->doWithMethod($params);}

    public function exportChatInviteLink(array $params){ return $this->doWithMethod($params);}

    public function setChatPhoto(array $params){ return $this->doWithMethod($params);}

    public function deleteChatPhoto(array $params){ return $this->doWithMethod($params);}

    public function setChatTitle(array $params){ return $this->doWithMethod($params);}

    public function setChatDescription(array $params){ return $this->doWithMethod($params);}

    public function pinChatMessage(array $params){ return $this->doWithMethod($params);}

    public function unpinChatMessage(array $params){ return $this->doWithMethod($params);}

    public function leaveChat(array $params){ return $this->doWithMethod($params);}

    public function getChat(array $params){ return $this->doWithMethod($params);}

    public function getChatAdministrators(array $params){ return $this->doWithMethod($params);}

    public function getChatMembersCount(array $params){ return $this->doWithMethod($params);}

    public function getChatMember(array $params){ return $this->doWithMethod($params);}

    public function setChatStickerSet(array $params){ return $this->doWithMethod($params);}

    public function deleteChatStickerSet(array $params){ return $this->doWithMethod($params);}

    public function answerCallbackQuery(array $params){ return $this->doWithMethod($params);}

    public function editMessageText(array $params){ return $this->doWithMethod($params);}

    public function editMessageCaption(array $params){ return $this->doWithMethod($params);}

    public function editMessageReplyMarkup(array $params){ return $this->doWithMethod($params);}

    public function deleteMessage(array $params){ return $this->doWithMethod($params);}

    public function sendSticker(array $params){ return $this->doWithMethod($params);}

    public function getStickerSet(array $params){ return $this->doWithMethod($params);}

    public function uploadStickerFile(array $params){ return $this->doWithMethod($params);}

    public function createNewStickerSet(array $params){ return $this->doWithMethod($params);}

    public function addStickerToSet(array $params){ return $this->doWithMethod($params);}

    public function setStickerPositionInSet(array $params){ return $this->doWithMethod($params);}

    public function deleteStickerFromSet(array $params){ return $this->doWithMethod($params);}

    public function answerInlineQuery(array $params){ return $this->doWithMethod($params);}

    public function sendInvoice(array $params){ return $this->doWithMethod($params);}

    public function answerShippingQuery(array $params){ return $this->doWithMethod($params);}

    public function answerPreCheckoutQuery(array $params){ return $this->doWithMethod($params);}

    public function sendGame(array $params){ return $this->doWithMethod($params);}

    public function setGameScore(array $params){ return $this->doWithMethod($params);}

    public function getGameHighScores(array $params){ return $this->doWithMethod($params);}

    public function deleteWebhook(array $params=[]){ return $this->doWithMethod();}

    public function getWebhookInfo(array $params=[]){ return $this->doWithMethod();}

    public function getMe(array $params=[]){ return $this->doWithMethod() ;}
}

