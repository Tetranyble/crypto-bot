<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscribeBotRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class SubscribeToChatBotController extends Controller
{
    /**
     *
     * @OA\post(
     * path="/subscribe-chat",
     * operationId="SubscribeToChatBotController::invoke",
     * tags={"Telegram Communication"},
     * summary="Subscribe to telegram.",
     * description="Subscribe to telegram chat.",
     *    @OA\RequestBody(
     *         description="new user subscription",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             example={
     *                 "user": "Ugbanawaji"
     *             },
     *             @OA\Schema(ref="#/components/schemas/SubscribeBotRequest")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             type="object",
     *             example={
     *                 "message":"subscribed",
     *                 "status": true,
     *                 "code": 200,
     *                 "data": {
     *                     "channel" : "Ugbanawaji"
     *                 }
     *             }
     *         )
     *     ),
     *    @OA\Response(response=400, ref="#/components/responses/400"),
     *    @OA\Response(response=404, ref="#/components/responses/404"),
     *    @OA\Response(response=422, ref="#/components/responses/422"),
     *    @OA\Response(response="default", ref="#/components/responses/500")
     * )
     *
     * Subscribe to chatbot.
     *
     * @param  SubscribeBotRequest  $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {

        $response = Telegram::getMe();
        return $this->success($response);
    }
}
