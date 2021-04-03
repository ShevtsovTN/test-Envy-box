<?php

namespace App\Http\Controllers;

use App\Helpers\DatabaseSave\EloquentSaveFactory;
use App\Helpers\FileSystem\FileSaveFactory;
use App\Http\Requests\OrdersCreateRequest;

class OrdersController extends Controller
{
    /**
     * Create order
     *
     * @param OrdersCreateRequest $request
     * @return array
     */
    public function create(OrdersCreateRequest $request)
    {
        $result = [];
        $data = [
            'name' => htmlspecialchars($request->name),
            'phone' => htmlspecialchars($request->phone),
            'message' => htmlspecialchars($request->message),
        ];
        $factoryFileSave = new FileSaveFactory('order');
        $isSaved = $factoryFileSave->createSaver()->save($data);
        $factoryEloquentSave = new EloquentSaveFactory('my_base');
        $idDataBase = $factoryEloquentSave->createSaver()->save($data);
        $result['status'] = (!empty($idDataBase) || !empty($isSaved))
            ? 'success'
            : 'error';
        $result['message'] = $result['status'] == 'success'
            ? ['Order has been added in ' . (!empty($isSaved)? 'storage' : '') . (!empty($idDataBase)? ' and DB': '')]
            : ['Order has not been added'];
        return $result;
    }
}
