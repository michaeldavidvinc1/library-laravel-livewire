<?php

namespace App\Livewire\Client;

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;


#[Layout('layouts.client')]
class LandingPage extends Component
{
    public function render()
    {


        return view('livewire.client.landing-page', [
            'latest' => Book::latest('created_at')->take(9)->get(),
        ]);
    }
}
