<?php

namespace App\Http\Livewire\FrontEnd;

use DB;
use App\Models\Book;
use Carbon\Carbon;
use Livewire\Component;

class ResultComponent extends Component
{
    public $transactionId;
    public function mount($tran_id){
        $this->transactionId = $tran_id;
    }
    public function render()
    {
        
        #Check order status in order tabel against the transaction id or order id.
        $order_details = DB::table('orders')
            ->where('transaction_id', $this->transactionId)->first();

        $book = Book::find($order_details->book_id);
        return view('livewire.front-end.paymentResult-component',['order'=>$order_details, 'book'=>$book])->layout('layouts.base');
    }
}
