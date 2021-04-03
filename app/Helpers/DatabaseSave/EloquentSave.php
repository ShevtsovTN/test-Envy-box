<?php


namespace App\Helpers\DatabaseSave;


use App\Contracts\ISave;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use mysqli;

class EloquentSave implements ISave
{
    private $orders;
    private $useEloquent = true;
    private $model = Order::class;

    /**
     * EloquentSaveFactory constructor.
     * @param $dataDB
     */
    public function __construct($dataDB)
    {
        $db = DB::connection($dataDB);
        if (!empty($db->getDatabaseName())) {
            $this->orders = DB::connection($dataDB)->table('orders');
            $this->useEloquent = false;
        }
    }

    /**
     * Save data at database;
     *
     * @param $data
     * @return mixed
     */
    public function save($data)
    {
        if ($this->useEloquent) {
            $id = $this->model::insertGetId([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'message' => $data['message']
            ]);
        } else {
            $id = $this->orders->insertGetId([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'message' => $data['message']
            ]);
        }
        return $id;
    }
}
