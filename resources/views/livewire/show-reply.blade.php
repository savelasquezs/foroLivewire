<div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
    <div class="p-4 flex gap-4">
        <div>
            <img src="{{$reply->user->avatar()}}" alt="{{$reply->user->name}}" class="rounded-full" width="50">
        </div>
        <div class="w-full">
                <p class=" mb-2 text-blue-600 text-semibold">
                    {{$reply->user->name}}

                </p>

               <p class="text-white/60">
            {{$reply->body}}</p>

            @if ($isCreating || $isEditing)
            <form action="" wire:submit.prevent="{{$isCreating?'postChild':'editReply'}}" class="my-4" >
                @error('body') <span class="error text-red-500">{{ $message }}</span> @enderror
                <div class="flex  gap-2">
                    <img src="{{auth()->user()->avatar()}}" alt=""  class="rounded-full w-10">
                    <input type="text" placeholder="...Escribe una respuesta" class="border-1 border-slate-900 bg-slate-800 rounded-md p-3 text-white/60 text-xs w-3/4 " wire:model="body">
                </div>
            </form>
            @endif
         <p class="mt-4 text-white/60 text-xs flex gap-2 justify-end">
            @if (empty($reply->reply_id))
            <a href="" wire:click.prevent="$toggle('isCreating')" class="hover:text-white">Responder</a>

            @endif
            @can('update', $reply)
            <a href="" wire:click.prevent="$toggle('isEditing')" class="hover:text-white">Editar</a>
           @endcan
        </p>

        </div>
    </div>


    @foreach ($reply->replies as $item)
    <div class="ml-8">

        <livewire:show-reply :reply="$item" :key="$item->id"/>
    </div>
    @endforeach
</div>
