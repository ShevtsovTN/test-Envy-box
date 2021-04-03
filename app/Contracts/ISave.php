<?php


namespace App\Contracts;


interface ISave
{
    /**
     * @param $data
     * @return mixed
     */
    public function save($data);
}
