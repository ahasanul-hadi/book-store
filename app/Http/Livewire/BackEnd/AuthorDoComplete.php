<?php

namespace App\Http\Livewire\BackEnd;

use DB;
use Livewire\Component;

class AuthorDoComplete extends Component
{
    public $order_id;
    public function mount($id){
        $this->order_id = $id;
        $update_product = DB::table('orders')
        ->where('id', $this->order_id)
        ->update(['delivery_status' => 'Delivered']);
    }

    public function render()
    {
           
        //$new_orders = DB::table('orders')
            //->where('status', 'Complete')
            //->where('delivery_status', 'Pending');

        $new_orders = DB::select("SELECT * FROM orders where status='Complete' and delivery_status='Pending'");

        return view('livewire.back-end.author-pending-delivery',['orders'=>$new_orders])->layout('layouts.dashboard');
    }
}
