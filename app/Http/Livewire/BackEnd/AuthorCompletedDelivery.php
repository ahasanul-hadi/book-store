<?php

namespace App\Http\Livewire\BackEnd;

use DB;
use Carbon\Carbon;
use Livewire\Component;

class AuthorCompletedDelivery extends Component
{
    public function render()
    {

       
        $completed_orders = DB::select
        ("
            SELECT
                orders.id as order_id,    
                orders.transaction_id as transaction_id,
                books.id as book_id,
                books.book_name as book_name,
                orders.name as order_name,
                orders.email as order_email,
                orders.phone as order_phone,
                orders.address1 as order_address1,
                orders.amount as order_amount,
                orders.order_date as order_date,
                orders.delivery_date as delivery_date,
                orders.delivery_status as delivery_status

            FROM orders 
            JOIN books ON books.id=orders.book_id 
            where delivery_status='Delivered'
        ");

        return view('livewire.back-end.author-completed-delivery',['orders'=>$completed_orders])->layout('layouts.dashboard');


    }
}
