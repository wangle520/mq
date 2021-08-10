# mq 使用说明 php

> # 1. 安装 rabbitMQ 服务环境

>>  erlang：otp_win64_23.0 [说明: 此为rabbitMQ 运行 默认服务器环境 win10 64环境]  https://www.erlang.org/downloads

>>  rabbitMQ：rabbitmq-server-3.8.5 [此为rabbitMQ 服务 默认服务器环境 win10 64环境] https://www.rabbitmq.com/install-windows.html
>>  说明: rabitMQ 用户名 guest 密码 guest 链接端口5672， 客户端访问端口 15672 

> # 2. 调用安装包 composer 
>>  composer require php-amqplib/php-amqplib

> # 3. 使用 receive.php 和 send.php 两个文件 
>> send.php 文件发送消息队列
>> receive.php 文件接受消息队列，需要后台运行接收

> # 注意,使用时要启动 对应的 rabbitMQ 服务

