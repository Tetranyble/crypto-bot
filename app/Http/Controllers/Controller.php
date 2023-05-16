<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      termsOfService="THe api is subject to terms of services and maybe be changed without service notice",
 *      title="Crypto Bot API Docs",
 *      description="Crypto Bot Application Programme Interface",
 *      x={
 *          "logo": {
 *              "url": "https://png.pngtree.com/element_pic/00/16/07/115783931601b5c.jpg"
 *          }
 *      },
 *      @OA\Contact(
 *          email="senenerst@gmail.com",
 *          name="Ekenekiso Leonard Ugbanawaji",
 *          url="http://example.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * ),
 * @OAS\SecurityScheme(
 *      securityScheme="sanctum",
 *      type="http",
 *      scheme="bearer"
 * ),
 * @OAS\SecurityScheme(
 *      securityScheme="sanctum",
 *      type="https",
 *      scheme="bearer",
 * )
 * @OA\Tag(
 *     name="Telegram Communication",
 *     description="Telegram external communication endpoints.",
 * ),
 * @OA\Server(
 *     description="Telegram Bot test environment",
 *     url="http://crypto-bot.test/api/v1"
 * ),
 * @OA\Components(
 *     @OA\Response(
 *          response="200",
 *          description="Ok.",
 *          @OA\JsonContent(
 *              type="object",
 *              example={"message": "Ok.", "errors": {}}
 *          )
 *     ),
 *     @OA\Response(
 *          response="201",
 *          description="Created.",
 *          @OA\JsonContent(
 *              type="object",
 *              example={"message": "Created.", "errors": {}}
 *          )
 *     ),
 *     @OA\Response(
 *          response="202",
 *          description="Accepted.",
 *          @OA\JsonContent(
 *              type="object",
 *              example={"message": "Created.", "errors": {}}
 *          )
 *     ),
 *     @OA\Response(
 *          response="204",
 *          description="No Content.",
 *          @OA\JsonContent(
 *              type="object",
 *              example={"message": "No Content.", "errors": {}}
 *          )
 *     ),
 *     @OA\Response(
 *         response="400",
 *         description="Bad Request.",
 *         @OA\JsonContent(
 *             type="object",
 *             example={"message": "Bad Request.", "errors": {}}
 *         )
 *     ),
 *     @OA\Response(
 *         response="401",
 *         description="Unauthenticated.",
 *         @OA\JsonContent(
 *             type="object",
 *             example={"message": "Unauthenticated.", "errors": {}}
 *         )
 *     ),

 *     @OA\Response(
 *         response="403",
 *         description="Forbidden.",
 *         @OA\JsonContent(
 *             type="object",
 *             example={"message":"Forbidden.", "errors": {}}
 *         )
 *     ),
 *     @OA\Response(
 *         response="404",
 *         description="Resource Not Found.",
 *         @OA\JsonContent(
 *             type="object",
 *             example={"message":"Resource Not Found.", "errors": {}}
 *         )
 *     ),
 *     @OA\Response(
 *         response="413",
 *         description="Request Entity Too Large.",
 *         @OA\JsonContent(
 *             type="object",
 *             example={"message":"Request Entity Too Large.", "errors": {}}
 *         )
 *     ),
 *     @OA\Response(
 *          response="422",
 *          description="Unprocessable Entity.",
 *          @OA\JsonContent(
 *              type="object",
 *              example={"message":"Unprocessable Entity.", "errors": {}}
 *          )
 *     ),
 *     @OA\Response(
 *          response="423",
 *          description="Locked.",
 *          @OA\JsonContent(
 *              type="object",
 *              example={"message":"Locked.", "errors": {}}
 *          )
 *     ),
 *     @OA\Response(
 *         response="500",
 *         description="Server Error.",
 *         @OA\JsonContent(
 *             type="object",
 *             example={"message":"Server Error.", "errors": {}}
 *         )
 *     )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function success(mixed $data, string $message = 'success', int $status_code = 200, $status = true)
    {
        return \response()->json([
            'status' => $status,
            'message' => $message,
            'code' => $status_code,
            'data' => $data,
        ], $status_code);
    }
}
