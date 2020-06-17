<?php

require_once 'IReader.php';

/**
 * xmlファイルを読み込んで結果をhtmlに出力
 */
class XmlReader implements IReader
{
    private $filename;

    private $handler;


    public function __construct(string $filename)
    {
        if (!is_readable($filename)) {
            throw new Exception('file "' . $filename . '" is not readable !');
        }

        $this->filename = $filename;
    }

    public function read(): void
    {
        $this->handler = fopen ($this->filename, "r");
    }

    public function display()
    {
        // 出力する処理
    }
}