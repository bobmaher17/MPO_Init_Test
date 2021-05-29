<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use Yajra\DataTables\Facades\DataTables as DataTables;

class productController extends Controller
{
    public function index()
    {
        return view('task_one');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = productModel::orderBy('barcode', 'ASC')
                                ->selectRaw("barcode, COUNT(barcode) count_barcode, SUM(price) total_price, 
                                    SUM(CASE 
                                        WHEN status='READY' 
                                        THEN 1 ELSE 0 
                                    END) ready, 
                                    SUM(CASE
                                        WHEN status='ONHOLD'
                                        THEN 1 ELSE 0
                                    END) on_hold,
                                    SUM(CASE 
                                        WHEN status='DELIVERED'
                                        THEN 1 ELSE 0
                                    END) delivered,
                                    SUM(CASE 
                                        WHEN status='PACKING'
                                            THEN 1 ELSE 0
                                    END) packing,
                                    SUM(CASE
                                        WHEN status='SENT'
                                        THEN 1 ELSE 0
                                    END) sent")
                                ->groupBy('barcode')
                                ->get()
                                ->map(function($data){
                                    return[
                                        'barcode' => $data->barcode,
                                        'quantity' => $data->count_barcode,
                                        'total_price'  => $data->total_price,
                                        'ready' => $data->ready,
                                        'on_hold' => $data->on_hold,
                                        'delivered' => $data->delivered,
                                        'packing' => $data->packing,
                                        'sent' => $data->sent
                                    ];
                                });
            return DataTables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
