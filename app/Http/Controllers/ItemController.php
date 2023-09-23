<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\Golds;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    public function index()
    {
        $items = Items::all();
        return view('admin.items.index', compact('items'));
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $item = Items::where('id', $id)->first();
        return view('admin.items.detail', compact('item'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        $item = Items::where('id', $id)->first();
        $gold = $item->gold;
        $total = $gold * $qty;

        return $total;
    }

    public function orders(Request $request)
    {
        $user = auth()->user();
        $user_code = $user->user_code;
        $item = Items::find($request->id);
        $item_gold = $item->gold;
        $quantity = $request->cart_quantity;
        $total_gold = $item_gold * $quantity;
        $gold = Golds::where('gold_receiver', $user_code)->first();
        if ($gold == null) {
            return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Your gold is not enough to buy');
        } else {
            $gold_user = $gold->gold;
            if ($gold_user < $total_gold) {
                return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Your gold is not enough to buy');
            } else {
                Golds::create([
                    'gold_receiver' => $user_code,
                    'gold' => '-'.$total_gold,
                    'description' => "Purchase"
                ]);
                $date_now = Carbon::now()->toDateTimeString();

                Bills::create([
                    'user_code' => $user_code,
                    'gold' => $total_gold,
                    'item_id' => $request->id,
                    'quantity' => $request->$quantity,
                    'date_time' => $date_now
                ]);

                return redirect()->route('items.bill')->with('msg-add', 'You have successfully made a purchase');
            }

        }
    }

    public function billList() {
        $user = auth()->user();
        $full_name = $user->user_surname .' '. $user->user_middlename .' '. $user->user_givenname;
        $bills = Bills::where('user_code', $user->user_code)->get();

        return view('admin.items.bill-list', compact('bills', 'user', 'full_name'));
    }
}
