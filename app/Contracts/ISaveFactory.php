<?php


namespace App\Contracts;


interface ISaveFactory
{
    /**
     * @return ISave
     */
    public function createSaver() : ISave;
}
