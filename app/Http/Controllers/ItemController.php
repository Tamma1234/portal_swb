<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\EventSwin;
use App\Models\Golds;
use App\Models\Items;
use App\Models\ItemSizes;
use App\Models\StudentEvent;
use App\Models\User;
use Google\Service\ServiceControl\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $items = Items::all();
        $events = EventSwin::orderBy('start_date', 'DESC')->get();
        $dayNow = Carbon::now()->toDateTimeString();
        return view('admin.items.index', compact('items', 'events', 'dayNow'));
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $item = Items::find($id);
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
                    'quantity' => $quantity,
                    'date_time' => $date_now,
                    'size_id' => $request->size
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

    public function storeEvent(Request $request) {
        $event_id = $request->event_id;
        $user = \auth()->user();
        $student_event = StudentEvent::where('event_id', $event_id)->where('user_code', $user->user_code)->first();
        if (count($student_event) > 0) {
            return redirect()->route('items.index')->with('errors', 'Your gold is not enough to buy');
        }
    }
}
