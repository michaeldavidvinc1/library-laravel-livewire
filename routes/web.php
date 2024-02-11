<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('', App\Livewire\Client\LandingPage::class)->name('home');
Route::get('book', App\Livewire\Client\ListBook::class)->name('list.book');
Route::get('book/{id}', App\Livewire\Client\DetailBook::class)->name('detail.book');
Route::get('profile', App\Livewire\Client\Profile\Proflie::class)->name('profile')->middleware('auth');
Route::get('history', App\Livewire\Client\History::class)->name('history')->middleware('auth');

Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('/dashboard', App\Livewire\Admin\Dashboard::class)->name('dashboard.page');
    Route::get('/profile', App\Livewire\Admin\Profile\Proflie::class)->name('profile.page');

    // Route Book
    Route::get('book', App\Livewire\Admin\Book\Book::class)->name('book.page');
    Route::get('book-item/{id}', App\Livewire\Admin\Book\BookItem::class)->name('book.item');
    Route::get('book/create', App\Livewire\Admin\Book\Create::class)->name('book.create');
    Route::get('book/{id}', App\Livewire\Admin\Book\Edit::class)->name('book.edit');

    // Route Category
    Route::get('category', App\Livewire\Admin\Category\Index::class)->name('category.page');

    // Route Transaction
    Route::get('transaction', App\Livewire\Admin\Transaction\Index::class)->name('transaction.page');

    // Route Loan
    Route::get('loan', App\Livewire\Admin\Loan\Index::class)->name('loan.page');
    
    // Route Fines
    Route::get('fines', App\Livewire\Admin\Fines\Index::class)->name('fines.page');

    // Route Users
    Route::get('users', App\Livewire\Admin\User\Index::class)->name('users.page');
    Route::get('users/create', App\Livewire\Admin\User\Create::class)->name('users.create');
    Route::get('users/{id}', App\Livewire\Admin\User\Edit::class)->name('users.edit');
});

Route::get('login', App\Livewire\Auth\Login::class)->name('login.page')->middleware('guest');
Route::get('register', App\Livewire\Auth\Register::class)->name('register.page')->middleware('guest');
Route::get('forgot-password', App\Livewire\Auth\ForgotPassword::class)->name('forgot.password')->middleware('guest');
Route::get('reset/{token}', App\Livewire\Auth\ResetPassword::class)->name('reset.password')->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
