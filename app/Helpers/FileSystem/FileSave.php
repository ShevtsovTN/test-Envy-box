<?php


namespace App\Helpers\FileSystem;


use App\Contracts\ISave;
use Illuminate\Support\Facades\Storage;

class FileSave implements ISave
{

    private $filename;

    /**
     * FileSave constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Save file in storage
     *
     * @param $data
     * @return bool|mixed
     */
    public function save($data)
    {
        $data = json_encode($data);
        Storage::disk('orders')->put($this->filename, $data);
        return Storage::disk('orders')->exists($this->filename);
    }
}
