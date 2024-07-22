<?php
namespace App\Functions;

use InvalidArgumentException;

class Helpers{
    public static function getCsvInfo($filepath){
        $csvData = [];

        //apri il file
        $fileData = fopen($filepath, 'r');

        //se non lo trovi dimmelo
        if($fileData === false){
            throw new InvalidArgumentException('File not found, check your path');
        }
        //se lo trovi leggi riga per riga
        while($csvRow = fgetcsv($fileData)!== false){
            $csvData[] = $csvRow;
        }

            //chiudere il file
            fclose($fileData);


            return $csvData;
    }
}
