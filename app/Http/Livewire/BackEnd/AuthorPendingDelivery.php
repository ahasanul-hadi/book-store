<?php

namespace App\Http\Livewire\BackEnd;

use DB;
use Carbon\Carbon;
use Livewire\Component;

class AuthorPendingDelivery extends Component
{
    public function render()
    {

        //$new_orders = DB::table('orders')
          //  ->where('status', 'Complete')
           // ->where('delivery_status', 'Pending');

            $new_orders = DB::select
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
                    orders.delivery_date as delivery_date
                FROM orders 
                JOIN books ON books.id=orders.book_id 
                WHERE orders.status='Complete' 
                AND orders.delivery_status='Pending'
            ");

        return view('livewire.back-end.author-pending-delivery',['orders'=>$new_orders])->layout('layouts.dashboard');
    }
}
