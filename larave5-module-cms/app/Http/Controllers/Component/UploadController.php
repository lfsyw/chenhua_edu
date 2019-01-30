<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\BaseController;
use App\Library\Tools\Upload;
use Illuminate\Http\Request;
use Exception;

class UploadController extends BaseController
{
    //缩略图上传
    public function thumb(Request $request)
    {
        try {
            $fileName  = 'thumb-file';
            $configKey = 'thumb';
            $urls      = Upload::upload($request, $fileName, $configKey);

            //上传文件配置项
            config("apps.uploads." . $configKey . ".connections.local.prefix", 'uploads');
            $data = [
                'url' => isset($urls[config("apps.uploads." . $configKey . ".default")]) ? $urls[config("apps.uploads." . $configKey . ".default")] : '',
            ];
            return self::returnJson(0, 'success', $data);
        } catch (Exception $e) {
            return self::returnJson(-1, $e->getMessage());
        }
    }

}
