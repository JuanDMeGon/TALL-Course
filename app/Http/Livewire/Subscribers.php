<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class Subscribers extends Component
{
    public function delete(Subscriber $subscriber)
    {
        $subscriber->delete();
    }

    public function render()
    {
        $subscribers = Subscriber::all();

        return view('livewire.subscribers')->with([
            'subscribers' => $subscribers,
        ]);
    }
}
