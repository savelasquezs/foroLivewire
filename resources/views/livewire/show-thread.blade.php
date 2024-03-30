

        <div class="w-3/4 mx-auto">

            <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 min ">
                <div class="p-4 flex gap-4">
                    <div>
                        <img src="{{$thread->user->avatar()}}" alt="{{$thread->user->name}}" class="rounded-full" width="50">
                    </div>
                    <div class="w-full">
                        <h2 class="mb-4 flex items-start justify-between">
                            <a href="{{route('thread', $thread)}}" class="text-xl font-semibold text-white/90">{{$thread->title}}</a>
                            <span class="rounded-full text-xs py-2 px-4 capitalize" style="color:#00aced;border:1px solid #00aced ">{{$thread->category->name}}</span>
                        </h2>
                        <p class="flex items-center justify-between w-full text-xs">
                            <span class="text-blue-600 text-semibold">
                                {{$thread->user->name}}
                                <span class="text-white/90">{{$thread->created_at->diffForHumans()}}</span>
                            </span>
                            <span class="text-slate-700">{{$thread->replies_count}} Comentario{{$thread->replies_count!=1?"s":""}} |
                            <a href="" class="hover:text-white/90">Editar</a>
                            </span>
                        </p>
                    </div>
                </div>
                <p class=" p-4 text-white/40">{{$thread->body}}</p>
            </div>

           <form action="" wire:submit.prevent="postReply" class="my-4" >
            @error('body') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="...Escribe una respuesta" class="border-0 bg-slate-800 rounded-md p-3 text-white/60 text-xs w-full " wire:model="body">
           </form>
           @forelse ($replies as $reply)
            <livewire:show-reply :reply="$reply" :key="$reply->id"/>
           @empty
               "there is nothing to reply"
           @endforelse

        </div>


