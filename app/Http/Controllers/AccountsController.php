<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function store(Request $request)
    {
        return Response()->json(Account::create($request->all()), 201);
    }

    public function show(Request $request)
    {
        $data = Account::find($request->account_id);

        if(is_null($data))
        {
            return response()->json(['error'=>'Not found'], 404);
        }

        return response()->json($data);
    }

    public function balanceOut(Request $request)
    {
        $data = Account::find($request->account_id);

        if(is_null($data))
        {
            return response()->json(['error'=>'Not found'], 404);
        }

        // UPDATE BALANCE ACCOUNT
        $data->balance -= $request->amount;
        $data->save();

        return Response()->json([
            'id' => $request->account_id,
            'balance' => $data->balance,
        ], 201);
    }

    public function balanceTransfer(Request $request)
    {
        $account_origin = Account::find($request->account_origin_id);
        $account_destination = Account::find($request->account_destination_id);

        if(is_null($account_origin) || is_null($account_destination))
        {
            return response()->json(['error'=>'Not found'], 404);
        }

        // UPDATE BALANCE ACCOUNT
        $account_origin->balance -= $request->amount;
        $account_origin->save();

        // UPDATE BALANCE ACCOUNT
        $account_destination->balance += $request->amount;
        $account_destination->save();

        return Response()->json([
            'orign_id' => $request->account_origin_id,
            'origin_balance' => $account_origin->balance,
            'orign_destination_id' => $request->account_destination_id,
            'destination_balance' => $account_destination->balance,
        ], 201);
    }
}
