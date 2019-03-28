<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Balance;
use App\Models\Mutation;
use App\Models\Topup;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $accounts = Account::where('user_id', Auth::user()->id)->get();
        $balance = Balance::where(['user_id' => Auth::user()->id])->first();
        $mutations = Mutation::where('user_id', Auth::user()->id)->limit(5)->orderBy('id', 'desc')->get();
        return view('dashboard', ['accounts' => $accounts, 'balance' => $balance == null ? '0' : $balance->balance, 'mutations' => $mutations]);
    }

    public function topup(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['document_number'] = 'TP-'.uniqid(rand());
        Topup::create($input);
        $this->updateBalance('topup', $input['total']);
        $this->updateMutation('topup', $input['document_number'], $input['total']);
        return redirect(route('home'))->with('success', 'Rekening berhasil ditambahkan');
    }

    public function withdraw(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['document_number'] = 'WD-'.uniqid(rand());
        $balance = Balance::where(['user_id' => Auth::user()->id])->first();
        $total_balance = $balance == null ? '0' : $balance->balance;

        if($total_balance < $input['total']){
            return redirect(route('home'))->with('error', 'Saldo anda tidak cukup untuk melakukan withdraw');
        } else {
            Withdraw::create($input);
            $this->updateBalance('withdraw', $input['total']);
            $this->updateMutation('withdraw', $input['document_number'], $input['total']);
            return redirect(route('home'))->with('success', 'Withdraw berhasil');
        }
    }

    public function updateBalance($type, $total)
    {
        $balance = Balance::where(['user_id' => Auth::user()->id])->first();
        $total_balance = $balance == null ? '0' : $balance->balance;

        if($type == 'topup'){
            $total_balance = $total_balance + $total;
        }

        else if($type == 'withdraw'){
            $total_balance = $total_balance - $total;
        }

        if($balance == null){
            Balance::create(['user_id' => Auth::user()->id, 'balance' => $total_balance]);
        } else {
            Balance::where(['user_id' => Auth::user()->id])->update(['balance' => $total_balance]);
        }
    }

    public function updateMutation($type, $document_number, $total)
    {
        $data = ['user_id' => Auth::user()->id, 'type' => $type, 'total' => $total, 'document_number' => $document_number];
        Mutation::create($data);
    }
}
