<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8  py-12">
        <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 min ">
            <div class="p-4 ">
                    <h2 class="mb-4 text-xl text-semibold text-white/90">
                        Pregunta a la comunidad
                    </h2>
                    <form action="{{route('threads.store')}}" method="POST">
                    @csrf
                    @include('thread.form')
                    <input type="submit" value="Guardar pregunta" class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover: to-blue-700 text-white/90 text-bold text-xs text-center rounded-md">
                    </form>

            </div>

        </div>

    </div>
</x-app-layout>
