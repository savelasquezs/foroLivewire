

    <div class="w-64">
        <a href="" class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover: to-blue-700 text-white/90 text-bold text-xs text-center rounded-md">Preguntar</a>
        <ul>
            @forelse ($categories as $cat)
            <li>
                <a href="" wire:click.prevent="emitir({{$cat->id}})" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize mb-2">
                    <span class="w-2 h-2 rounded-full " style="background-color: {{$cat->color}}"></span>
                   {{$cat->name}}
                </a>
            </li>

            @empty
            <li>
                <a href="" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                 Lo siento, no tienes categorias para mostrar
                </a>
            </li>
            @endforelse
            <li>
                <a href="" wire:click.prevent="emitir('')" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize mb-2">
                    <span class="w-2 h-2 rounded-full " style="background-color: black"></span>
                  Todas las categorias
                </a>
            </li>
        </ul>
    </div>



