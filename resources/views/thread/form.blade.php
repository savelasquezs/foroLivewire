<div>
<select name="category_id" id="" class="bg-slate-800 w-full border-1 border-slate-900 rounded-md p-3 text-white/60 text-s capitalize mb-4">
<option value="">Seleccionar Categoria</option>
@foreach ($categories as $category)
<option value="{{$category->id}}" @if (old('category_id',$thread->category_id  )== $category->id)
    selected
@endif>{{$category->name}}

</option>

@endforeach

</select>

@error('title') <span class="error text-red-600 ">{{ $message }}</span> @enderror
<input type="text"
 name="title"
 class="border-1 border-slate-900 bg-slate-800 rounded-md p-3 text-white/60 text-s w-full mb-4 "
 value="{{old('title',$thread->title )}}"
 placeholder="Titulo..."
 >
 @error('body') <span class="error text-red-600">{{ $message }}</span> @enderror
<textarea
name="body"
rows="10"
class="border-1 border-slate-900 bg-slate-800 rounded-md p-3 text-white/60 text-s w-full"
placeholder="Descripcion del problema..."
>{{old('body',$thread->body )}}</textarea>
</div>
