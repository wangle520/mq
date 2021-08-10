<?php
// namespace app\addons;
namespace app;
require_once __DIR__.'/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;

use PhpAmqpLib\Message\AMQPMessage;
class Receive{

    public function index(){
        echo '123';
        $connect = new AMQPStreamConnection("localhost",5672,'guest','guest');
        $channel = $connect->channel();
        $channel->queue_declare('hello',false,false,false,false);
        
        echo "[x] 接收 'Hello World !'\n";
        
        $callback = function($msg){
            echo '接受消息', $msg->body,"\n";
        };
        $channel->basic_consume('hello','',false,true,false,false,$callback);
        while($channel->is_consuming()){
            $channel->wait();
        }
    }
}

$demo = new Receive();
$demo->index();
