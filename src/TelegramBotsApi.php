<?php
/**
 * Created by PhpStorm.
 * User: bagheri
 * Date: 02/19/2018
 * Time: 09:58 AM
 */

namespace Ybagheri;


interface TelegramBotsApi
{
    public function getUpdates(array $params);

    public function setWebhook(array $params);

    public function sendMessage(array $params);

    public function forwardMessage(array $params);

    public function sendPhoto(array $params);

    public function sendAudio(array $params);

    public function sendDocument(array $params);

    public function sendVideo(array $params);

    public function sendVoice(array $params);

    public function sendVideoNote(array $params);

    public function sendMediaGroup(array $params);

    public function sendLocation(array $params);

    public function editMessageLiveLocation(array $params);

    public function stopMessageLiveLocation(array $params);

    public function sendVenue(array $params);

    public function sendContact(array $params);

    public function sendChatAction(array $params);

    public function getUserProfilePhotos(array $params);

    public function getFile(array $params);

    public function kickChatMember(array $params);

    public function unbanChatMember(array $params);

    public function restrictChatMember(array $params);

    public function promoteChatMember(array $params);

    public function exportChatInviteLink(array $params);

    public function setChatPhoto(array $params);

    public function deleteChatPhoto(array $params);

    public function setChatTitle(array $params);

    public function setChatDescription(array $params);

    public function pinChatMessage(array $params);

    public function unpinChatMessage(array $params);

    public function leaveChat(array $params);

    public function getChat(array $params);

    public function getChatAdministrators(array $params);

    public function getChatMembersCount(array $params);

    public function getChatMember(array $params);

    public function setChatStickerSet(array $params);

    public function deleteChatStickerSet(array $params);

    public function answerCallbackQuery(array $params);

    public function editMessageText(array $params);

    public function editMessageCaption(array $params);

    public function editMessageReplyMarkup(array $params);

    public function deleteMessage(array $params);

    public function sendSticker(array $params);

    public function getStickerSet(array $params);

    public function uploadStickerFile(array $params);

    public function createNewStickerSet(array $params);

    public function addStickerToSet(array $params);

    public function setStickerPositionInSet(array $params);

    public function deleteStickerFromSet(array $params);

    public function answerInlineQuery(array $params);

    public function sendInvoice(array $params);

    public function answerShippingQuery(array $params);

    public function answerPreCheckoutQuery(array $params);

    public function sendGame(array $params);

    public function setGameScore(array $params);

    public function getGameHighScores(array $params);

    public function deleteWebhook(array $params=[]);

    public function getWebhookInfo(array $params=[]);

    public function getMe(array $params=[]);
}