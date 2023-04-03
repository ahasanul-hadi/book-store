<?php

namespace App\Http\Livewire\FrontEnd;

use Livewire\Component;
use App\Models\Book;

class StudentDashboardComponent extends Component
{
    public function render()
    {
        $purchasedBooks = Book::get();
        $newbooks = Book::latest()->get()->take(5);
        return view('livewire.front-end.student-dashboard-component',['purchasedBooks'=>$purchasedBooks,'newbooks'=>$newbooks])->layout('layouts.dashboard');
    }
}
