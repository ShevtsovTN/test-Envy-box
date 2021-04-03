<?php


namespace App\Helpers\DatabaseSave;


use App\Contracts\ISave;
use App\Contracts\ISaveFactory;

class EloquentSaveFactory implements ISaveFactory
{
    private $dataDbConnect;

    /**
     * EloquentSaveFactory constructor.
     * @param $dataDB
     */
    public function __construct($dataDB)
    {
        $this->dataDbConnect = $dataDB;
    }

    /**
     * @return ISave
     */
    public function createSaver(): ISave
    {
        return new EloquentSave($this->dataDbConnect);
    }
}
