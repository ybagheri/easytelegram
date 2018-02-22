<?php
/**
 * Created by PhpStorm.
 * User: bagheri
 * Date: 02/21/2018
 * Time: 08:03 AM
 */

namespace Ybagheri;
use Ybagheri\TelegramBotsApi;


class EasyTelegram extends EasyOOP implements TelegramBotsApi
{
    use TelegramHelper;
    public $token = '510428316:AAFZ70daKKlJ54YZ-z3nlej2tiveR4U3PzE';

    /**
     * TelegramApi constructor.
     * @param string $token
     */
    public function __construct(string $token=null)
    {

        $this->token = isset($token)?$token:$this->token;
    } //Lumen_robot;

    public function getUpdates(array $params){ return TelegramHelper::doWithMethod($params);}

    public function setWebhook(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendMessage(array $params){ return TelegramHelper::doWithMethod($params);}

    public function forwardMessage(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendPhoto(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendAudio(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendDocument(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendVideo(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendVoice(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendVideoNote(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendMediaGroup(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendLocation(array $params){ return TelegramHelper::doWithMethod($params);}

    public function editMessageLiveLocation(array $params){ return TelegramHelper::doWithMethod($params);}

    public function stopMessageLiveLocation(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendVenue(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendContact(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendChatAction(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getUserProfilePhotos(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getFile(array $params){ return TelegramHelper::doWithMethod($params);}

    public function kickChatMember(array $params){ return TelegramHelper::doWithMethod($params);}

    public function unbanChatMember(array $params){ return TelegramHelper::doWithMethod($params);}

    public function restrictChatMember(array $params){ return TelegramHelper::doWithMethod($params);}

    public function promoteChatMember(array $params){ return TelegramHelper::doWithMethod($params);}

    public function exportChatInviteLink(array $params){ return TelegramHelper::doWithMethod($params);}

    public function setChatPhoto(array $params){ return TelegramHelper::doWithMethod($params);}

    public function deleteChatPhoto(array $params){ return TelegramHelper::doWithMethod($params);}

    public function setChatTitle(array $params){ return TelegramHelper::doWithMethod($params);}

    public function setChatDescription(array $params){ return TelegramHelper::doWithMethod($params);}

    public function pinChatMessage(array $params){ return TelegramHelper::doWithMethod($params);}

    public function unpinChatMessage(array $params){ return TelegramHelper::doWithMethod($params);}

    public function leaveChat(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getChat(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getChatAdministrators(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getChatMembersCount(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getChatMember(array $params){ return TelegramHelper::doWithMethod($params);}

    public function setChatStickerSet(array $params){ return TelegramHelper::doWithMethod($params);}

    public function deleteChatStickerSet(array $params){ return TelegramHelper::doWithMethod($params);}

    public function answerCallbackQuery(array $params){ return TelegramHelper::doWithMethod($params);}

    public function editMessageText(array $params){ return TelegramHelper::doWithMethod($params);}

    public function editMessageCaption(array $params){ return TelegramHelper::doWithMethod($params);}

    public function editMessageReplyMarkup(array $params){ return TelegramHelper::doWithMethod($params);}

    public function deleteMessage(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendSticker(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getStickerSet(array $params){ return TelegramHelper::doWithMethod($params);}

    public function uploadStickerFile(array $params){ return TelegramHelper::doWithMethod($params);}

    public function createNewStickerSet(array $params){ return TelegramHelper::doWithMethod($params);}

    public function addStickerToSet(array $params){ return TelegramHelper::doWithMethod($params);}

    public function setStickerPositionInSet(array $params){ return TelegramHelper::doWithMethod($params);}

    public function deleteStickerFromSet(array $params){ return TelegramHelper::doWithMethod($params);}

    public function answerInlineQuery(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendInvoice(array $params){ return TelegramHelper::doWithMethod($params);}

    public function answerShippingQuery(array $params){ return TelegramHelper::doWithMethod($params);}

    public function answerPreCheckoutQuery(array $params){ return TelegramHelper::doWithMethod($params);}

    public function sendGame(array $params){ return TelegramHelper::doWithMethod($params);}

    public function setGameScore(array $params){ return TelegramHelper::doWithMethod($params);}

    public function getGameHighScores(array $params){ return TelegramHelper::doWithMethod($params);}

    public function deleteWebhook(){ return TelegramHelper::doWithMethod();}

    public function getWebhookInfo(){ return TelegramHelper::doWithMethod();}

    public function getMe(){ return TelegramHelper::doWithMethod();}
}

