<?php
require_once('ring_buffer_class.php');

// 5件のログを記録するリングバッファ
$rb = new RingBuffer(5);
$rb->append('A is Apple');
$rb->append('B is Banana');
$rb->append('C is Cute');
$rb->append('D is Desk');
$rb->append('E is Easy');
$rb->append('F is Fight');
$rb->append('G is Good');

// 5件のログを順に表示
for ($i = 0; $i < 5; $i++) {
    $log = $rb->get($i);
    echo "[$log] \n";
}
