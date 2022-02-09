<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function store(Request $request)
    {
        // UPDATE BALANCE ACCOUNT
        $account = Account::find($request->account_id);
        $account->balance += $request->amount;
        $account->save();

        // INSERT EVENT
        Event::create([
            'account_id' => $request->account_id,
            'type' => $request->type,
            'amount' => $request->amount
        ]);

        return Response()->json([
            'id' => $request->account_id,
            'balance' => $account->balance,
        ], 201);
    }

    public function show(Request $request)
    {
        $data = Event::find($request->account_id);

        if(is_null($data))
        {
            return response()->json(['error'=>'Not found'], 404);
        }

        return response()->json($data);
    }
}
