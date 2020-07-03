<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RoomImage;

class Room extends Model
{
    protected $fillable = [
        'name','location','bed','bath','area','priceNight','priceWeekends','priceWeekly','priceClearFee','description','status','gym','Laundry','tvCable','wifi','FreeParking','Security','category_room_id','user_room_id','brand_id'
    ];

    public function cateRoom(){
        return $this->belongsTo('App\Models\CategoryRoom','category_room_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_room_id','id');
    }

    public function roomImage(){
        return $this->hasMany('App\Models\RoomImage','room_id','id');
    }

    public function reviewRoom()
    {
        return $this->hasMany('App\Models\ReviewRoom','room_id','id');
    }

    public function roomStar()
    {
        return $this->hasMany('App\Models\RoomStar','room_id','id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }

    public function add(){
        
        $model = $this->create([
            'name'=>request()->name,
            'location'=>request()->location,
            'bed'=>request()->bed,
            'bath'=>request()->bath,
            'area'=>request()->area,
            'priceNight'=>request()->priceNight,
            'priceWeekends'=>request()->priceWeekends,
            'priceWeekly'=>request()->priceWeekly,
            'priceClearFee'=>request()->priceClearFee,
            'description'=>request()->description,
            'status'=>request()->status,
            'gym'=>request()->gym,
            'Laundry'=>request()->Laundry,
            'tvCable'=>request()->tvCable,
            'wifi'=>request()->wifi,
            'FreeParking'=>request()->FreeParking,
            'Security'=>request()->Security,
            'category_room_id'=>request()->category_room_id,
            'user_room_id'=>request()->user_room_id,
            'brand_id'=>request()->brand_id
        ]);
        $images = request()->file('files');
        foreach($images as $img){
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/rooms'),$img_name);
            RoomImage::create([
                'image'=>$img_name,
                'room_id'=>$model->id
            ]);
        }

        return $model;
    }

    public function updateEdit(){
        if(request()->has('files')){
            $images = request()->file('files');
            foreach($images as $img){
                $img_name = $img->getClientOriginalName();
                $img->move(base_path('Public/uploads/images/rooms'),$img_name);
                RoomImage::create([
                    'image'=>$img_name,
                    'room_id'=>$this->id
                ]);
            }
            $model = $this->update([
                'name'=>request()->name,
                'location'=>request()->location,
                'bed'=>request()->bed,
                'bath'=>request()->bath,
                'area'=>request()->area,
                'priceNight'=>request()->priceNight,
                'priceWeekends'=>request()->priceWeekends,
                'priceWeekly'=>request()->priceWeekly,
                'priceClearFee'=>request()->priceClearFee,
                'description'=>request()->description,
                'status'=>request()->status,
                'gym'=>request()->gym,
                'Laundry'=>request()->Laundry,
                'tvCable'=>request()->tvCable,
                'wifi'=>request()->wifi,
                'FreeParking'=>request()->FreeParking,
                'Security'=>request()->Security,
                'category_room_id'=>request()->category_room_id,
                'user_room_id'=>request()->user_room_id
            ]);
            return $model;
        }else{
            $model = $this->update([
                'name'=>request()->name,
                'location'=>request()->location,
                'bed'=>request()->bed,
                'bath'=>request()->bath,
                'area'=>request()->area,
                'priceNight'=>request()->priceNight,
                'priceWeekends'=>request()->priceWeekends,
                'priceWeekly'=>request()->priceWeekly,
                'priceClearFee'=>request()->priceClearFee,
                'description'=>request()->description,
                'status'=>request()->status,
                'gym'=>request()->gym,
                'Laundry'=>request()->Laundry,
                'tvCable'=>request()->tvCable,
                'wifi'=>request()->wifi,
                'FreeParking'=>request()->FreeParking,
                'Security'=>request()->Security,
                'category_room_id'=>request()->category_room_id,
                'user_room_id'=>request()->user_room_id
            ]);
            return $model;
        }
    }


    public function scopeOrderByParam($query){
        // dd(request()->orderby);
        
        if(request()->orderby && request()->ord){
            $orderby = request()->orderby;
            $ord= request()->ord;
            $query = $query->orderBy($orderby,$ord);
        }
        // dd($orderby);
        // dd($query);
        return $query;
    }

    public function filteRoom($params)
    {
        // biết hàm này ko//biết thế éo nào đc vc
        // cái này nó phân tích cai mảng params ra 
        // ví dụ// $params = [
        //     'location' =>$request->location,
        //     'from_date' => $request->searchFromDate,
        //     'to_date' => $request->searchToDate,
        // ];
        // thằng params nó là như thế nó se phân tích ra cho biển $loccation $from_datte $to_date
        // cho nên có dữ liệu gì chỉ cần để trong thằng params =))
        //vc xong rồi à hiểu luồng ko ?//hiểu thế éo nào đc vl //giờ nhá //để đjc lại là hiêu
        // đm code sướng vl, đam mê cmnr =))//vl
        //xong chưa để dọc 
        extract($params);
        // laravel đéo nối được query//vl//
        // đéo nối được thì viết queryy hơi nhiều rồi phải if liên tục code lại đéo dry
        // được này =))

        $query = $this;

        // viết này sau dễ phát triển nếu có search thì 
        // ko sowj looix =)
        // code super dry =))? đang tẩu hỏa đm//zô 
        if(!empty($search)){
            $query = $query->where('name', 'like', $search);
        }

        if(!empty($listRoomUsed)){
            $query = $query->whereNotIn('id', $listRoomUsed);
        }

        return $query->get();
        // $rom = Room::whereNotIn('id', $cc)->get();
    }
}
