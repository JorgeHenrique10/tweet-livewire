<div>
    <div class="flex flex-col w-8/12 bg-gray-200 rounded">
        <form action="post" wire:submit.prevent='upload'>
            <div class="flex flex-col" >
                <h1>Upload Photo</h1>
                <input type="file" name="photo" wire:model='photo'>
                <button>Send</button>
            </div>
        </form>
    </div>
</div>
