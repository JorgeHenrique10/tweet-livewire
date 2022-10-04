<div class="flex flex-col justify-center items-center">
    <div class="flex flex-col w-10/12 bg-white">
        <h1>Show Tweet</h1>

        <form method="post" wire:submit.prevent = 'create' class="flex flex-col py-4 px-4">
            <textarea name="content" id="content" wire:model='content'></textarea>
            <button class=" w-28 mt-4 text-lg text-white p-1 rounded bg-cyan-800" type="submit" >Enviar</button>
            @error('content')
                {{$message}}
            @enderror
        </form>

    </div>

    <hr>
        <div class="flex flex-col justify-center items-center mt-8 w-10/12">
        @foreach ($tweets as $tweet)
            <div class="flex justify-start items-center m-2 py-4 w-full bg-white rounded">
                <div class= "rounded-full p-2 mr-2">
                    @if($tweet->user->photo)
                        <img class=" w-8 h-8 rounded-full" src="{{ url("storage/{$tweet->user->photo}") }} ">
                    @else
                        <img class=" w-8 h-8 rounded-full" src="data:image/jpeg;base64,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">
                    @endif
                </div>
                <div class="">
                    <span class=" text-xs text-black font-bold">Comment: </span>
                    <span class=" text-1xl font-medium text-gray-600"> {{$tweet->content}}</span>
                    <span class="text-sm text-cyan-500">(
                    @if ($tweet->likes->count())
                        <a href="#" wire:click.prevent = "unlike({{$tweet->id}})">Descurtir 👎</a>
                    @else
                        <a href="#" wire:click.prevent = "like({{$tweet->id}})">Curtir 👍</a>
                    @endif )
                    </span>

                </div>
            </div>
        @endforeach
    </div>
    <hr>
    {{$tweets->links()}}
</div>
