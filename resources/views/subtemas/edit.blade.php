<x-app-layout>
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8 bg-red-200" style="max-width:70%">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-bold text-center text-gray-800 py-2 uppercase">Editar Sub-Tema: {{$tema->titulo}}</h1>
                <hr>
                <div class="mt-0 md:mt-0">
                    <form action="{{route('subtemas.update',$subtema->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-2 bg-white space-y-6 sm:p-6">
                                <label for="titulo" class="block text-sm font-medium text-gray-700">
                                    Título del Subtema
                                </label>
                                <input id="titulo" type="text" name="titulo" value="{{old('titulo', $subtema->titulo)}}"
                                    class="w-full my-2 border-gray-300 rounded @error('titulo')is-invalid @else border-1 @enderror"
                                    placeholder="Titulo del tema">
                                <x-jet-input-error for="titulo" />

                                <div>
                                    <label for="descripcion" class="block text-sm font-medium text-gray-700">
                                        Descripción del Subtema
                                    </label>
                                    <div class="mt-0">
                                        <textarea id="editor" name="descripcion"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('descripcion')is-invalid @else border-0 @enderror"
                                            placeholder="Descripcion del tema">
                                                {{old('descripcion', $subtema->descripcion)}}
                                            </textarea>
                                    </div>
                                    <x-jet-input-error for="descripcion" />
                                </div>

                                <div class="grid grid-rows-2 gap-2">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <input type="file" name="imagen" id="imagen">
                                            <x-jet-input-error for="imagen" />
                                        </div>
                                        <div class="">
                                            <select name="icon" class="rounded">
                                                @foreach ($iconos as $i)
                                                <option value="{{$i->clase}}">{{$i->clase}}</option>
                                                @endforeach
                                            </select>
                                            <x-jet-input-error for="icon" />
                                        </div>

                                    </div>
                                    <div class="flex justify-between">


                                        <div class="">
                                            <label for="publicado">Publicado</label>
                                            <input type="checkbox" name="publicado" @if($subtema->publicado == 1)
                                            checked
                                            @endif>
                                            <x-jet-input-error for="publicado" />
                                        </div>
                                        <div class="">
                                            <label for="posicion">Posicion</label>
                                            <input type="text" name="posicion" min="0" class="rounded text-sm"
                                                value=" {{old('posicion', $subtema->posicion)}}">
                                            <x-jet-input-error for="posicion" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>
</x-app-layout>
