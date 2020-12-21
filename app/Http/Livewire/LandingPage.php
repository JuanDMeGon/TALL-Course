<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LandingPage extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email:filter|unique:subscribers,email',
    ];

    public function subscribe()
    {
        $this->validate();

        DB::transaction(function() {
            $subscriber = Subscriber::create([
                'email' => $this->email,
            ]);

            $notification = new VerifyEmail;

            $subscriber->notify($notification);
        }, $deadlockRestries = 5);


        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
