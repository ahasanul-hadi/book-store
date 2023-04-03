<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Book;
use Livewire\Component;

class PurchaseComponent extends Component
{
    public $book;
    public function mount($id){
        $this->book = Book::find($id);
    }
    public function render()
    {
        // $newbooks = Book::latest()->get()->take(5);
        // $oldbooks = Book::orderBy('created_at','asc')->get()->take(6);
        return view('livewire.front-end.purchase-component',['book'=>$this->book])->layout('layouts.purchase');
    }
}
