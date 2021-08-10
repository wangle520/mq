<?php
// namespace app\addons;
namespace app;
require_once __DIR__.'/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;

use PhpAmqpLib\Message\AMQPMessage;
class Send{

    public function index(){
        // ip地址 端口号 账户名 密码
        $connect = new AMQPStreamConnection("localhost",5672,'guest','guest');
        $channel = $connect->channel();
        $channel->queue_declare('ac',false,false,false,false);

        // 信息
        $msg = new AMQPMessage('测试中文~');

        $channel->basic_publish($msg,'','ac');

        echo "[x] Sent 'Hello World !'\n";

        $channel->close();

        $connect->close();
    }
}

$demo = new Send();
$demo->index();

