<?php
use Carbon\Carbon;
use App\Models\{
    Product,
    Order,
    Category,
    Item,
    OrderItem,
    Message,
    AnonymousMessage
};
use Illuminate\Support\Facades\Auth;

// ...
/**
 * Summary of compairDate
 * @param mixed $created_at
 * @param mixed $dayNum
 * @return bool
 */
function compairDate($created_at,$dayNum=5){
    $createdAt = Carbon::parse($created_at);
    $now = Carbon::now();

    // var_dump($createdAt->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s'));

    if ($createdAt->diffInDays($now) < $dayNum) {
        return true;
    } else {
        return false;
    }

}
function discount($item){

return (floatval($item->price))-(floatval($item->price)*(floatval($item->discount)/100));
}
function imagePass($link){
    return asset('storage/' . $link);
}
function notNull($value){
    return empty($value)   ? null : $value;
}
function order()
{
    $order =Order::where('user_id',Auth::id()??'');
    return $order->exists();
}
function usr()
{
    return Auth::user();
}
function  orderPaymentStatus($order){

    if($order->price> ($order->payment->sum('amount'))){
        return 0;
    }elseif($order->price== ($order->payment->sum('amount'))){
        return 1;
    }

}
function urlCondtion(... $route){
    return in_array(URL::current(), $route);
}
function message(){
    return [
        'count'=>AnonymousMessage::count(),
        'data'=>AnonymousMessage::get(),
    ];
}
