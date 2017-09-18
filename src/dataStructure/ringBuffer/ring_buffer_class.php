<?php
// リングバッファーを表現したもの
class RingBuffer
{
    // 内部データ(配列で表現)
    private $buf = [];
    private $top;
    private $bottom;
    private $size;

    public function __construct($size)
    {
        $this->size   = $size;
        $this->buf    = array_fill(0, $size, null);
        $this->top    = 0;
        $this->bottom = -1;
    }

    // 値を取得する
    public function get($index)
    {
        $i = ($this->top + $index) % $this->size;
        return $this->buf[$i];
    }

    // 値を設定する
    public function set($index, $v)
    {
        // バッファを物理的にリング状に配置することはできないので
        // インデックス（添え数）をバッファサイズで割って剰余を取る
        $i = ($this->top + $index) % $this->size;
    }

    // 値を末尾に追加
    public function append($v)
    {
        $this->bottom = ($this->bottom + 1) % $this->size;
        $this->buf[$this->bottom] = $v;
        if ($this->bottom <= $this->top) {
            $this->top = $this->bottom + 1;
        }
    }
}