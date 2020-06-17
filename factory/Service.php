<?php

require_once 'ReaderFactory.php';

class Sevice
{
    public function printAsHtml(string $filename)
    {
        $readerFactory = new ReaderFactry();
        $reader = $readerFactory->create($filename);
        $reader->read();
        $reader->display();
    }
}