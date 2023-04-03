<?php

use App\Http\Controllers\MessagesController;
use App\Http\Livewire\BackEnd\AuthorAddBookComponent;
use App\Http\Livewire\BackEnd\AuthorBookComponent;
use App\Http\Livewire\BackEnd\AuthorDashboardComponent;
use App\Http\Livewire\BackEnd\AuthorEditBookComponent;
use App\Http\Livewire\BackEnd\AuthorReadBook;
use App\Http\Livewire\BackEnd\AuthorUserComponent;

use App\Http\Livewire\BackEnd\AuthorPendingDelivery;
use App\Http\Livewire\BackEnd\AuthorCompletedDelivery;
use App\Http\Livewire\BackEnd\AuthorDoComplete;




use App\Http\Livewire\FrontEnd\AllBooksComponent;
use App\Http\Livewire\FrontEnd\BookSearchComponent;
use App\Http\Livewire\FrontEnd\DetailsComponent;
use App\Http\Livewire\FrontEnd\ResultComponent;
use App\Http\Livewire\FrontEnd\PurchaseComponent;
use App\Http\Livewire\FrontEnd\HomeComponent;
use App\Http\Livewire\FrontEnd\ReadBookIndexComponent;
use App\Http\Livewire\FrontEnd\SearchComponent;
use App\Http\Livewire\FrontEnd\StudentBookComponent;
use App\Http\Livewire\FrontEnd\StudentDashboardComponent;
use App\Http\Livewire\FrontEnd\StudentEditProfile;
use App\Http\Livewire\FrontEnd\StudentProfileComponent;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SslCommerzPaymentController;



//Common
Route::get('/',HomeComponent::class)->name('home')->middleware('devicelimit');
Route::get('/book_details/{id}',DetailsComponent::class)->name('book_details');
Route::get('/payment-result/{tran_id}',ResultComponent::class)->name('payment-result');
Route::get('/book_purchase/{id}',PurchaseComponent::class)->name('book_purchase');
Route::get('/read_book_index/{id}',ReadBookIndexComponent::class)->name('read_book_index')->middleware('devicelimit');
Route::get('/all_books',AllBooksComponent::class)->name('all_books');
Route::get('/autocomplete-search', [SearchComponent::class, 'autocompleteSearch'])->name('autocompleteSearch');
Route::get('/book_search',BookSearchComponent::class)->name('book_search');

//User
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/student/dashboard',StudentDashboardComponent::class)->name('student_dashboard');
    Route::get('/student/books',StudentBookComponent::class)->name('student_books');
    Route::get('/student/profile',StudentProfileComponent::class)->name('student_profile');
    Route::get('/student/edit_profile',StudentEditProfile::class)->name('student_edit_profile');
});

//Author
Route::middleware(['auth:sanctum','verified','authauthor'])->group(function(){
    Route::get('/author/dashboard',AuthorDashboardComponent::class)->name('author_dashboard');
    Route::get('/author/books',AuthorBookComponent::class)->name('author_books');
    // Route::get('/author/books',OrderComponent::class)->name('orders');
    Route::get('/author/add_book',AuthorAddBookComponent::class)->name('author_add_book');
    Route::get('/author/edit_book/{id}',AuthorEditBookComponent::class)->name('author_edit_book');
    Route::get('/author/read_book/{id}',AuthorReadBook::class)->name('author_read_book');
    Route::get('/author/show/users',AuthorUserComponent::class)->name('author_show_users');


    Route::get('/author/new-orders',AuthorPendingDelivery::class)->name('author_pending');
    Route::get('/author/completed-orders',AuthorCompletedDelivery::class)->name('author_completed');
    Route::get('/author/do-complete/{id}',AuthorDoComplete::class)->name('author_do_complete');
 });

 //Messages
 Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('/create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('/{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('/{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('/{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

