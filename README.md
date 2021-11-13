
littlemo QQ互联
===============

[![Total Downloads](https://poser.pugx.org/littlemo/qq/downloads)](https://packagist.org/packages/littlemo/qq)
[![Latest Stable Version](https://poser.pugx.org/littlemo/qq/v/stable)](https://packagist.org/packages/littlemo/qq)
[![Latest Unstable Version](https://poser.pugx.org/littlemo/qq/v/unstable)](https://packagist.org/packages/littlemo/qq)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D7.1-8892BF.svg)](http://www.php.net/)
[![License](https://poser.pugx.org/littlemo/qq/license)](https://packagist.org/packages/littlemo/qq)

### 介绍
QQ互联常用工具库

### 安装教程

composer.json
```json
{
    "require": {
        "littlemo/qq": "~1.0.0"
    }
}
```

### 使用说明

#### Access_Token

> 使用Authorization_Code获取Access_Token


##### 示例代码


```php
use littlemo\qq\OAuth2;

$OAuth2 = new OAuth2($appid, $appkey);

//使用Authorization_Code获取Access_Token
$result = $OAuth2->token($Authorization_Code, $redirect_uri);
if ($result) {
    echo '获取Access_Token成功';
    $token = $OAuth2->getMessage();
} else {
    echo "获取Access_Token失败";
    $errorMsg = $OAuth2->getErrorMsg();
}

//查询完整的回调消息
$intactMsg = $OAuth2->getIntactMsg();


```

> [官方文档](https://wiki.connect.qq.com/%e4%bd%bf%e7%94%a8authorization_code%e8%8e%b7%e5%8f%96access_token)


#### 刷新Access Token

> 权限自动续期，获取Access Token

##### 示例代码


```php
use littlemo\qq\OAuth2;

$OAuth2 = new OAuth2($appid, $appkey);

$result = $OAuth2->refresh_token($refresh_token)

if ($result) {
    echo '刷新Access_Token成功';
    $token = $OAuth2->getMessage();
} else {
    echo "刷新Access_Token失败";
    $errorMsg = $OAuth2->getErrorMsg();
}

//查询完整的回调消息
$intactMsg = $OAuth2->getIntactMsg();


```

> [官方文档](https://wiki.connect.qq.com/%e4%bd%bf%e7%94%a8authorization_code%e8%8e%b7%e5%8f%96access_token)


#### OpenID_OAuth2.0

> 获取用户OpenID_OAuth2.0

##### 示例代码


```php
use littlemo\qq\OAuth2;

$OAuth2 = new OAuth2($appid, $appkey);

$result = $OAuth2->me($access_token)

if ($result) {
    echo '获取OpenID成功';
    $token = $OAuth2->getMessage();
} else {
    echo "获取OpenID失败";
    $errorMsg = $OAuth2->getErrorMsg();
}

//查询完整的回调消息
$intactMsg = $OAuth2->getIntactMsg();


```

> [官方文档](https://wiki.connect.qq.com/%e8%8e%b7%e5%8f%96%e7%94%a8%e6%88%b7openid_oauth2-0)


####  用户信息

> 获取登录用户在QQ空间的信息，包括昵称、头像、性别及黄钻信息（包括黄钻等级、是否年费黄钻等）。
> 
##### 示例代码


```php
use littlemo\qq\User;

$User = new User($appid, $appkey);

$result = $User->get_user_info($access_token, $openid)

if ($result) {
    echo '获取用户信息成功';
    $token = $User->getMessage();
} else {
    echo "获取用户信息失败";
    $errorMsg = $User->getErrorMsg();
}

//查询完整的回调消息
$intactMsg = $OAuth2->getIntactMsg();


```

> [官方文档](https://wiki.connect.qq.com/%e8%8e%b7%e5%8f%96%e7%94%a8%e6%88%b7openid_oauth2-0)




### 参与贡献

1.  littlemo


### 特技

- 统一、精简
