<?php

namespace App\Http\Handlers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Routing\ResponseFactory;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class Login
{

    protected $response;

    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    public function __invoke(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $payload = [
            'scope' => [
                'roles' => ['admin', 'premium']
            ]
        ];

        try {
            if (! $token = JWTAuth::attempt($credentials, $payload)) {
                return $this->getResponse()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return $this->getResponse()->json(['error' => 'could_not_create_token'], 500);
        }

        return $this->getResponse()->json(compact('token'));
    }

    public function getResponse()
    {
        return $this->response;
    }

}
