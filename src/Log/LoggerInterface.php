<?php
// +-----------------------------------------------------------
// | 微信小程序二维码
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Andruby\WeChat\Mini\QRCode\Log;

interface LoggerInterface
{
    /**
     * 写入 INFO 日志
     * @param string $message 日志信息
     * @param string $phrase 标记短语
     */
    public function info($message, $phrase=null);

    /**
     * 写入 WARN 日志
     * @param string $message 日志信息
     * @param string $phrase 标记短语
     */
    public function warn($message, $phrase=null);

    /**
     * 写入 ERROR 日志
     * @param string $message 日志信息
     * @param string $phrase 标记短语
     */
    public function error($message, $phrase=null);
}
