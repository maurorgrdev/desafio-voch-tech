<?php

namespace App\Http\Controllers;

use Exception;

class BaseController extends Controller
{
    public function sendResponse($result = null, $message = null, $code = null)
    {
        $response = [
            'success' => true,
            'data' => !isset($result) ? [] : $result,
            'message' => !isset($message) ? 'Requisição feita com sucesso' : $message,
        ];

        return response()->json($response, !isset($code) ? 200 : $code);
    }

    public function sendError($error = null , $errorMessages = null, $code = null)
    {
        $response = [
            'success' => false,
            'message' => !isset($error) ? 'Requisição falhou' : $error,
        ];

        if(!isset($errorMessages) && !empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, !isset($code) ? 404 : $code);
    }

}