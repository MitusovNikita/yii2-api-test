<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class ApiController extends Controller
{
    public function actionIndex()
    {
    }

    public function actionList()
    {
        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, 'http://yii2.local/customers?token=100-token');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            $out = curl_exec($curl);
            echo $out;
            curl_close($curl);
        }
    }

    public function actionDelete()
    {
        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, 'http://yii2.local/customers/3');
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            $out = curl_exec($curl);
            echo $out;
            curl_close($curl);
        }
    }

    public function actionCreate()
    {
        if( $curl = curl_init() ) {

            $post_data = array (
                "name" => "Barbarian",
            );

            curl_setopt($curl, CURLOPT_URL, 'http://yii2.local/customers');
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

            $out = curl_exec($curl);
            echo $out;
            curl_close($curl);
        }
    }

    public function actionUpdate()
    {
        if( $curl = curl_init() ) {

            $post_data = array (
                "name" => "Anton",
            );

            curl_setopt($curl, CURLOPT_URL, 'http://yii2.local/customers/1');
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));

            $out = curl_exec($curl);
            echo $out;
            curl_close($curl);
        }
    }
}