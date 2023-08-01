<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        // Lấy thông tin từ form
        $quantity = $request->input('quantity');
        $date = $request->input('date');
        $full_name = $request->input('full_name');
        $phone = $request->input('phone');
        $email = $request->input('email');

        // Chuyển hướng đến form khác và truyền dữ liệu
        return redirect('/thanhtoan')->with([
            'quantity' => $quantity,
            'date' => $date,
            'full_name' => $full_name,
            'phone' => $phone,
            'email' => $email,
        ]);
    }


    public function store(Request $request)
    {
        $order = Order::create([
            'amount' => $request->input('amount'),
            'quantity' => $request->input('quantity'),
            'date' => $request->input('date'),
            'full_name' => $request->input('full_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'card_number' => $request->input('card_number'),
            'card_name' => $request->input('card_name'),
            'expiry_date' => $request->input('expiry_date'),
            'cvv' => $request->input('cvv'),
        ]);

        $quantity = $request->input('quantity');
        $orderDetails = [];
        $count = 0;

        for ($i = 0; $i < $quantity; $i++) {

            $count++;
            // Tạo chuỗi ngẫu nhiên gồm 8 chữ số
            $random_str = "ALT" . Str::random(6, '1234567890');
            $new_filename = "qr_code.png";

            $orderDetails[] = new OrderDetail([
                'nameid' => $random_str,
                'date' => $request->input('date'),
                'qr_name' =>  $new_filename,
            ]);
        }

        $page = $count / 4;
        $page = ceil($page);

        $order->orderDetails()->saveMany($orderDetails);

        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        return view('payment-detail', ['orderDetails' => $orderDetails, 'count' => $count, 'page' => $page])->with('message', 'Đặt vé thành công');;
    }
}
