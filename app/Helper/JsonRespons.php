<?php

namespace App\Helpers;


class JsonResponse
{
    const MSG_NOT_ALLOWED = 'NOT_ALLOWED';
    const MSG_NOT_FOUND = 'NOT_FOUND';
    const MSG_NOT_AUTHORIZED = 'NOT_AUTHORIZED';
    const MSG_NOT_AUTHENTICATED = 'NOT_AUTHENTICATED';

    public static function respondError($message = null, $status = 500)
    {
        $message = is_string($message) ? [$message] : $message;
        return response()->json([
            'content' => null,
            'status' => $status,
            'message' => $message,
            'data' => null
        ], $status);
    }

    public static function respondSuccess($message, $content = null, $status = 200, $data = null, $meta = null, $links = null)
    {
        $message = is_string($message) ? [$message] : $message;
        return response()->json([
            'content' => $content ,
            'status' => $status ,
            'message' => $message ,
            'data' => $data ,
            'meta' => $meta ,
            'links' => $links
        ], $status);
    }
}
