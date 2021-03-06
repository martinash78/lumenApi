<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
  public function createSuccessResponse($data, $code)
  {
    return response()->json(['data' => $data], $code);
  }

  public function createErrorResponse($message, $code)
  {
    return response()->json(['data' => $message, 'code' => $code], $code);
  }
}
