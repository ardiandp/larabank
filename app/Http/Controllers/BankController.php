<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BankImport;
use App\Exports\BankExport;


class BankController extends Controller
{
    //
    public function index()
    {
    	return view('bank/index');
    }

    public function fileImport(Request $request)
    {
    	Excel::import(new bankImport, $request->file('file')->store('temp'));
        return back();
    }

    public function fileExport()
    {
    	return Excel::download(new bankExport, 'bank-collection.xlsx');
    }
}
