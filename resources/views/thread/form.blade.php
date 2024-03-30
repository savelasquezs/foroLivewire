<div>
<select name="category_id" id="" class="bg-slate-800 w-full border-1 border-slate-900 rounded-md p-3 text-white/60 text-s capitalize mb-4">
<option value="">Seleccionar Categoria</option>
@foreach ($categories as $category)
<option value="{{$category->id}}" @if ($thread->category_id == $category->id)
    selected
@endif>{{$category->name}}

</option>

@endforeach

</select>

<input type="text"
 name="title"
 class="border-1 border-slate-900 bg-slate-800 rounded-md p-3 text-white/60 text-s w-full mb-4 "
 value="{{$thread->title}}"
 placeholder="Titulo..."
 >
<textarea
name="body"
rows="10"
class="border-1 border-slate-900 bg-slate-800 rounded-md p-3 text-white/60 text-s w-full"
placeholder="Descripcion del problema..."
>{{$thread->body}}</textarea>
</div>
