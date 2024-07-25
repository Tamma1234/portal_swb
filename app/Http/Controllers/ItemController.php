<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\EventSwin;
use App\Models\Golds;
use App\Models\ItemGalleryImage;
use App\Models\Items;
use App\Models\ItemSizes;
use App\Models\StudentEvent;
use App\Models\ItemPromotion;
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
        $user = \auth()->user();
        $events = EventSwin::orderBy('start_date', 'DESC')->get();
        $dayNow = Carbon::now()->toDateTimeString();

        return view('admin.items.index', compact('items', 'events', 'dayNow', 'user'));
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $item = Items::find($id);
        $items = Items::all();
        $galleryImage = ItemGalleryImage::where('item_id', $id)->get();
        $dayNow = Carbon::now()->toDateTimeString();

        return view('admin.items.detail', compact('item', 'items', 'galleryImage', 'dayNow'));
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
       // $gold_sale = $request->gold_sale;
        $item_gold = $item->gold;
        $date_now = Carbon::now()->toDateTimeString();
        $quantity = $request->cart_quantity;

        if ($quantity <= 0) {
            return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Please choose a quantity greater than 0');
        } else {
            $total_gold_chua_sale = $item_gold * $quantity;
            // $check=ItemPromotion::where('item_id',$item->id)->get();
            $result = ItemPromotion::join('promotions', 'item_promotion.promotion_id', '=', 'promotions.id')
                ->select('promotions.*', 'item_promotion.*')
                ->where('item_promotion.item_id', '=', $item->id)
                ->where('promotions.start_date', '<=', now())
                ->where('promotions.end_date', '>=', now())
                ->first();

            if($result != null){
                $percent = $result->percent;
                $phan_tram= $percent * $item->gold /100;
                $item_gold =  $item->gold - $phan_tram;
            }
            $total_gold = $item_gold * $quantity;

            $gold = Golds::where('gold_receiver', $user_code)->selectRaw('SUM(gold) as total')->first();
            // dd($gold);
            //dd($gold);
            if($gold != null){
                if($total_gold > $gold->total){
                    return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Your gold is not enough to buy');
                }else{
                    $item_quantity = $item->quantity;
                    $total_quantity = $item_quantity - $quantity;
                    $item->update([
                        'quantity' => $total_quantity
                    ]);
                    Golds::create([
                        'gold_receiver' => $user_code,
                        'gold' => '-' . $total_gold,
                        'description' => "Purchase"
                    ]);
                    Bills::create([
                        'user_code' => $user_code,
                        'gold' => $total_gold_chua_sale,
                        'gold_sale' => $total_gold,
                        'item_id' => $request->id,
                        'quantity' => $quantity,
                        'date_time' => $date_now,
                        'status' => 0
                    ]);

                    return redirect()->route('items.bill')->with('msg-add', 'You have successfully made a purchase');
                }
            }else{
                return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Your gold is not enough to buy');
            }
        }







//        if ($gold == null) {
//            return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Your gold is not enough to buy');
//        } else {
//            if ($gold_sale != 0) {
//                $total_sale = $gold_sale * $quantity;
//
//                $gold_user = $gold->total;
//                if ($gold_user < $total_sale) {
//                    return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Your gold is not enough to buy');
//                } else {
//                        $item_quantity = $item->quantity;
//                        $total_quantity = $item_quantity - $quantity;
//                        $item->update([
//                            'quantity' => $total_quantity
//                        ]);
//                        //Create golds khi mua hàng
//                        Golds::create([
//                            'gold_receiver' => $user_code,
//                            'gold' => '-' . $total_sale,
//                            'description' => "Purchase"
//                        ]);
//
//                        //Create Bills
//                        Bills::create([
//                            'user_code' => $user_code,
//                            'gold' => $total_gold,
//                            'gold_sale' => $total_sale,
//                            'item_id' => $request->id,
//                            'quantity' => $quantity,
//                            'date_time' => $date_now,
//                            'status' => 0
//                        ]);
//                        return redirect()->route('items.bill')->with('msg-add', 'You have successfully made a purchase');
//                    // Update quantity in Items
//
//                }
//            }
//            else {
//                $gold_user = $gold->total;
//
//                if ($total_gold > 0) {
//                    if ($gold_user < $total_gold) {
//                        return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Your gold is not enough to buy');
//                    } else {
//                        // Update quantity in Items
//                        $item_quantity = $item->quantity;
//                        $total_quantity = $item_quantity - $quantity;
//                        $item->update([
//                            'quantity' => $total_quantity
//                        ]);
//                        //Create golds khi mua hàng
//                        Golds::create([
//                            'gold_receiver' => $user_code,
//                            'gold' => '-' . $total_gold,
//                            'description' => "Purchase"
//                        ]);
//
//                        //Create Bills
//                        Bills::create([
//                            'user_code' => $user_code,
//                            'gold' => $total_gold,
//                            'gold_sale' => 0,
//                            'item_id' => $request->id,
//                            'quantity' => $quantity,
//                            'date_time' => $date_now,
//                            'status' => 0
//                        ]);
//                        return redirect()->route('items.bill')->with('msg-add', 'You have successfully made a purchase');
//                    }
//                } else {
//                    return redirect()->route('items.detail', ['id' => $request->id])->with('errors', 'Please choose a quantity greater than zero');
//                }
//            }
//
//        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function billList()
    {
        $user = auth()->user();
        $full_name = $user->user_surname . ' ' . $user->user_middlename . ' ' . $user->user_givenname;
        //all order
        $bill_all = Bills::where('user_code', $user->user_code)->get();
        //bill awaiting
        $bill_awaiting = Bills::where('user_code', $user->user_code)->where('status', 0)->get();
        // Bill Confirmed
        $bill_confirmed = Bills::where('user_code', $user->user_code)->where('status', 1)->get();
        // Bill Successful
        $bill_successful = Bills::where('user_code', $user->user_code)->where('status', 2)->get();

        return view('admin.items.bill-list', compact('bill_all', 'user', 'full_name', 'bill_awaiting',
            'bill_confirmed', 'bill_successful'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeEvent(Request $request)
    {
        $event_id = $request->event_id;
        $event_swin = EventSwin::where('id', $event_id)->first();
        $event_gold = $event_swin->gold;
        $user = \auth()->user();
        $user_gold = Golds::where('gold_receiver', $user->user_code)->selectRaw('SUM(gold) as total')->first()->total;

        $dayNow = Carbon::now()->toDateTimeString();
        $full_name = $user->user_surname . ' ' . $user->user_middlename . ' ' . $user->user_givenname;
        $student_event = StudentEvent::where('event_id', $event_id)->where('user_code', $user->user_code)->first();
        if ($student_event != null) {
            return redirect()->route('items.index')->with('errors', 'You have already participated in this event');
        } else {
            if ($event_gold > $user_gold) {
                return redirect()->route('items.index')->with('errors', 'Your gold is currently not enough to participate');
            } else {
                StudentEvent::create([
                    'user_code' => $user->user_code,
                    'full_name' => $full_name,
                    'event_id' => $event_id,
                    'date_add' => $dayNow,
                    'gold' => $event_gold
                ]);
                return redirect()->route('items.index')->with('msg-add', 'You have successfully participated in the event');
            }
        }
    }

    public function promotion() {

    }
}
