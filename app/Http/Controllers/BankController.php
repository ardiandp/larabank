<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BankImport;
use App\Exports\BankExport;
use App\Models\Bank;
use Illuminate\Support\Facades\DB;


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
}
