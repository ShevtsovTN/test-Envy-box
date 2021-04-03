<?php


namespace App\Helpers\FileSystem;


use App\Contracts\ISave;
use App\Contracts\ISaveFactory;

class FileSaveFactory implements ISaveFactory
{
    private $filename;

    /**
     * FileSaveFactory constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename . '_' . date('Y-m-d_H-i-s').'.txt';
    }

    /**
     * @return ISave
     */
    public function createSaver(): ISave
    {
        return new FileSave($this->filename);
    }
}
