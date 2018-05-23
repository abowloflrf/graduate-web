<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Qiniu\Auth;


class UploadController extends Controller
{
    public function getToken()
    {
        $accessKey = env("QINIU_AK");
        $secretKey = env("QINIU_SK");
        $bucket = env("QINIU_BUCKET");
        $auth = new Auth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);
        return array(
            "token" => $token
        );
    }
}
