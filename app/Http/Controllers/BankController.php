<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BankImport;
use App\Exports\BankExport;
use App\Models\Bank;
use Illuminate\Support\Facades\DB;
use DataTables;
use Carbon\Carbon;

class BankController extends Controller
{
    //
    public function index()
    {
    	//return view('bank/index');
        $bank = DB::table('bank')->get();
        return view('bank.data-bank',['bank'=>$bank]);
        //return view ('bank.data-bank');
    }

    public function upload()
    {
        return view('bank.upload');
    }

    public function fileImport(Request $request)
    {
    	Excel::import(new bankImport, $request->file('file')->store('temp'));
        //return view('bank');
        return redirect('/bank');
    }

    public function fileExport()
    {
    	return Excel::download(new bankExport, 'bank-collection.xlsx');
    }

    public function bank_server_side()
    {
        $data = Bank::latest()->get();
        return DataTables::of($data)
            ->editColumn("created_at", function ($data) {
                return date("m/d/Y", strtotime($data->created_at));
            })
            ->addColumn('ID', function ($data) {
                $update = '<a href="javascript:void(0)" class="btn btn-primary">' . $data->id . '</a>';
                return $update;
            })
            ->rawColumns(['ID'])
            ->make(true);
    }

    public function bank_ssd()
    {
        return view('bank/bank_ssd');
    }
}
