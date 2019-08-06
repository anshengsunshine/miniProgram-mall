<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/9/009
 * Time: 10:44
 */

return [
    'app_id' => 'wx676ca7f872f0c03c',
    'app_secret' => 'ef3180b8912b804cbe8fbd63e37125d4',

    // 微信使用code换取用户openid及session_key的url地址
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?" .
        "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s",
];