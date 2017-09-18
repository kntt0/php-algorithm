<?php

// キュー構造を表現したもの
class Queue
{
    // 内部データ
    private $list = [];

    // データを末尾に追加
    public function enqueue($v)
    {
        $this->list[] = $v;
    }

    // データを先頭から取り出す
    public function dequeue()
    {
        return array_shift($this->list);
    }

    // データ個数を返す
    public function length()
    {
        return count($this->list);
    }
}