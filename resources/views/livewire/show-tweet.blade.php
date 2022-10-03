<div>
    Show Tweet: {{ $content }}

    <form method="post" wire:submit.prevent = 'create'>
        <input type="text" name="content" id="content" wire:model='content'>
        <button type="submit" >Enviar</button>
        @error('content')
            {{$message}}
        @enderror
    </form>

    <hr>

    <ul>
        @foreach ($tweets as $tweet)
            <li>User: {{$tweet->user->name}}  -  Comment: {{$tweet->content}}</li>
        @endforeach
    </ul>

    <hr>
    {{$tweets->links()}}
</div>
