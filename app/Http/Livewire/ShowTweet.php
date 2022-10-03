<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use GuzzleHttp\Psr7\Request;
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
        $tweets = Tweet::with('user')->paginate(2);

        return view('livewire.show-tweet', ['tweets' => $tweets]);
    }

    public function create()
    {

        $this->validate();

        Tweet::create([
            'content' => $this->content,
            'user_id' => 1
        ]);

        $this->content = '';
    }
}
