<?php
/**
 * Author: Zachary
 * Date: 2017/10/29 10:55
 */

namespace common\baseclass;


use yii\filters\ContentNegotiator;
use yii\rest\Controller;
use yii\web\Response;

class BaseAPIController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['authenticator']);

        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors'  => [
                // restrict access to
                'Access-Control-Request-Method'    => ['*'],
                // Allow only POST and PUT methods
                'Access-Control-Request-Headers'   => ['*'],
                // Allow only headers 'X-Wsse'
                'Access-Control-Allow-Credentials' => true,
                // Allow OPTIONS caching
                'Access-Control-Max-Age'           => 3600,
                // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                'Access-Control-Expose-Headers'    => ['X-Pagination-Current-Page'],
            ],
        ];

        $behaviors['contentNegotiator'] = [
            'class'   => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];
        return $behaviors;
    }

}
