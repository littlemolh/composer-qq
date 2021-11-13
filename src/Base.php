<?php
// +----------------------------------------------------------------------
// | Little Mo - Tool [ WE CAN DO IT JUST TIDY UP IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2021 http://ggui.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: littlemo <25362583@qq.com>
// +----------------------------------------------------------------------

namespace littlemo\qq;


/**
 * 公众号\小程序基础对象
 *
 * @description
 * @example
 * @author LittleMo 25362583@qq.com
 * @since 2021-11-05
 * @version 2021-11-05
 */
class Base
{

    /**
     * 申请QQ登录成功后，分配给网站的appid。
     *
     * @var string
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-10
     * @version 2021-11-10
     */
    protected $client_id = null;

    /**
     * 申请QQ登录成功后，分配给网站的appkey。
     *
     * @var [type]
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-10
     * @version 2021-11-10
     */
    protected $client_secret = null;

    /**
     * 成功消息
     *
     * @var [type]
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-12
     * @version 2021-11-12
     */
    protected static $message = null;

    /**
     * 错误消息
     *
     * @var [type]
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-12
     * @version 2021-11-12
     */
    protected static $error_msg = null;

    /**
     * 完整的消息
     *
     * @var [type]
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-12
     * @version 2021-11-12
     */
    protected static $intact_msg = null;
    /**
     * 构造函数
     *
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-05
     * @version 2021-11-05
     * @param string $client_id         申请QQ登录成功后，分配给网站的appid。
     * @param string $client_secret     申请QQ登录成功后，分配给网站的appkey。
     */
    public function __construct($client_id = null, $client_secret = null)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
    }

    /**
     * 整理接口返回结果
     *
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-12
     * @version 2021-11-12
     * @param [type] $result
     * @return void
     */
    protected function init_result($result)
    {
        static::$intact_msg = $result;

        $content = $result['content'];
        $content =  !empty($content) ? json_decode($content, true) : $content;

        if ($result['code'] !== 200 || !empty($content['error'])) {
            static::$error_msg = $content;
            return false;
        } else {
            static::$message = $content;
            return true;
        }
    }

    /**
     * 返回成功消息
     *
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-12
     * @version 2021-11-12
     * @return void
     */
    public function getMessage()
    {
        return self::$message;
    }

    /**
     * 返回失败消息
     *
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-12
     * @version 2021-11-12
     * @return void
     */
    public function getErrorMsg()
    {
        return self::$error_msg;
    }

    /**
     * 返回完整的消息
     *
     * @description
     * @example
     * @author LittleMo 25362583@qq.com
     * @since 2021-11-12
     * @version 2021-11-12
     * @return void
     */
    public function getIntactMsg()
    {
        return self::$intact_msg;
    }
}
