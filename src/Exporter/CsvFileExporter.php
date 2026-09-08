<?php
    namespace App\Exporter;
    use App\Contract\FileExporter;

    class CsvFileExporter implements FileExporter
    {
        public function export ($records){
            $stream = fopen('php://memory', 'r+');
            foreach ($records as $record){
                fputcsv($stream, $record, ',');
            }
            rewind($stream);
            $contents = stream_get_contents($stream);
            fclose($stream);
            return $contents;
        }
        public function getExtension()
        {
            return 'csv';
        }
    }