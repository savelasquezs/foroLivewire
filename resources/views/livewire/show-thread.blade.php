

        <div class="flex flex-col items-center">

            <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4 ">
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

            <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
            </div>

        </div>


