<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweet extends Component
{
    use WithPagination;

    public $content = 'content Teste';
    protected $rules = [
        'content' => ['required', 'min:3', 'max:20']
    ];

    public function render()
    {
        $tweets = Tweet::with(['user', 'likes'])->latest()->paginate(5);

        return view('livewire.show-tweet', ['tweets' => $tweets]);
    }

    public function create()
    {

        $this->validate();

        $user = Auth::user();

        $user->tweets()->create([
            'content' => $this->content
        ]);

        $this->content = '';
    }

    public function like(Tweet $tweet)
    {
        $tweet->likes()->create([
            'user_id' => Auth::user()->id
        ]);
    }

    public function unlike(Tweet $tweet)
    {
        $tweet->likes()->delete();
    }
}
