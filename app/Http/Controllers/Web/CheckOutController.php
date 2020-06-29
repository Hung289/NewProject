<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryService;
use App\Models\User;
use App\Models\Room;
use App\Models\Blog;
use App\Models\CategoryRoom;
use App\Models\CategoryBlog;
use App\Models\RoomImage;
use App\Models\BlogImage;
use App\Models\Customer;
use App\CartRoom\CartRoom;
use App\Models\Service;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckOutController extends Controller
{
    public function __construct()
    {
        $CategoryRoom = CategoryRoom::all();
        view()->share('CategoryRoom', $CategoryRoom);

        $CategoryService = CategoryService::all();
        view()->share('CategoryService', $CategoryService);

        $CategoryBlog = CategoryBlog::all();
        // dd($CategoryBlog);
        view()->share('CategoryBlog', $CategoryBlog);

        // $rooms = Room::all();
        // view()->share('rooms',$rooms);

        $roomImages = RoomImage::all();
        view()->share('roomImages', $roomImages);

        $blogs = Blog::all();
        view()->share('blogs', $blogs);

        $blogImages = BlogImage::all();
        view()->share('blogImages', $blogImages);
    }

    public function getCheckOut()
    {
        return view('page.checkout');
    }

    public function postCheckOut(Request $request, CartRoom $cart)
    {
        
        // dd($service);
        // dd($cart->items);
        // dd($cart->services);
        $total_price_room_service = (($cart->total_price) + ($cart->total_price_service));
        // dd($total_price_room_service);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->note = $request->note;
        $customer->save();

        $u_id = Auth::user()->id;
        

        $order = Order::create([
            'total_price'=>$total_price_room_service, 
            'payment'=>$request->payment, 
            // 'note'=>$request->note, 
            'user_id'=>$u_id, 
            'customer_id'=>$customer->id
        ]);
        if($cart->services == null){
            foreach($cart->items as $item)
            $orderDetail = OrderDetail::create([
                'order_id'=>$order->id,
                'room_id'=>$item['id'],
                'from_date'=>$item['arriveDate'],
                'to_date'=>$item['departDate']
            ]);
        }else{
            foreach($cart->items as $item)
            foreach($cart->services as $service)
            $orderDetail = OrderDetail::create([
                'order_id'=>$order->id,
                'room_id'=>$item['id'],
                'service_id'=>$service['id'],
                'quantity_service'=>$service['quantity'],
                'from_date'=>$item['arriveDate'],
                'to_date'=>$item['departDate']
            ]);
        }
        
        // session(['cart'=>[]]);
        // session(['cartService'=>[]]);

        
        
    }
}