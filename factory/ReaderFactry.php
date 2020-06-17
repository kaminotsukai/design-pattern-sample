<?php

class ReaderFactry
{
    public function create(string $filename): IReader
    {
        $reader = $this->createReader($filename);
        return $reader;
    }

    public function createReader(string $filename): IReader
    {
        $poscsv = stripos($filename, '.csv');
        $posxml = stripos($filename, '.xml');

        if ($poscsv !== false) {
            return new CsvReader($filename);
        }

        if ($posxml !== false) {
            return new XmlReader($filename);
        }

        throw new Exception('このファイル形式はサポートされていません');
    }
}