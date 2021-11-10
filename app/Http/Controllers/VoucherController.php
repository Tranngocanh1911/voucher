<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoucherCreateRequest;
use App\Models\Voucher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class VoucherController extends Controller
{
    public function list(){
        $voucher = Voucher::all();
        return view('voucher.list', compact('voucher'));
    }

    public function showCreateForm(){
        return view('voucher.create');
    }

    public function create(VoucherCreateRequest $request ,Voucher $voucher){
        $voucher->name = $request->name;
        $voucher->value = $request->value;
        $voucher->status = $request->status;
        $voucher->description = $request->description;
        $voucher->exp_date = $request->exp_date;
        $voucher->save();
        return redirect()->action([VoucherController::class, 'list']);
    }

    public function detail($id){
        $voucher = Voucher::findOrFail($id);
        return view('voucher.detail', compact('voucher'));
    }

    public function edit($id){
        $voucher = Voucher::findOrFail($id);
        return view('voucher.update', compact('voucher'));
    }
    public function update(Request $request, $id): RedirectResponse{
        $voucher = Voucher::findOrFail($id);
        $voucher->name = $request->name;
        $voucher->value = $request->value;
        $voucher->status = $request->status;
        $voucher->description = $request->description;
        $voucher->exp_date = $request->exp_date;
        $voucher->save();
        return redirect()->action([VoucherController::class, 'list']);
    }

    public function destroy($id){
        $voucher = Voucher::findOrFail($id);
        $voucher->delete();
        return redirect()->action([VoucherController::class, 'list']);
    }

    public function search(Request $request){
        $search = $request->input('search');
        $voucher = Voucher::query()
           ->where('name', 'LIKE', '%' . $search . '%')->get();
        return view ('voucher.search', compact('voucher'));
    }
}
