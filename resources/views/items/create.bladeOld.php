<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <h1 class="font-bold text-center text-2xl text-gray-800 pt-2 bg-gray-50">Nuevo Item</h1>

                <div class="">
                    <div class="mt-5 md:mt-0">
                        <form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="subtema_id" value="{{$subtema_id}}" />
                            <div class="sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 bg-white space-y-6 sm:p-6">
                                    <label for="tema_id" class="block text-sm font-medium text-gray-700">
                                        Título del Item
                                    </label>
                                    <input id="titulo" type="text" name="titulo"
                                        value="{{old('titulo', $item->titulo)}}"
                                        class="w-full my-2  rounded @error('titulo')is-invalid @else border-1 @enderror"
                                        placeholder="Titulo del item">
                                    <x-jet-input-error for="titulo" />
                                    <div>
                                        <label for="descripcion" class="block text-sm font-medium text-gray-700">
                                            Descripción
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="editor" name="descripcion" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('descripcion')is-invalid @else border-0 @enderror"
                                                placeholder="Breve descripcion del item">
                                                {{old('descripcion', $item->descripcion)}}
                                            </textarea>
                                        </div>
                                        <x-jet-input-error for="descripcion" />
                                    </div>

                                    <hr>

                                    <div class="flex justify-around">
                                        <div class="flex-1">
                                            <input type="file" name="images[]" id="images" multiple>
                                        </div>

                                        <div class="flex-1">
                                            <select name="icon" class="rounded">
                                                @foreach ($iconos as $i)
                                                <option value="{{$i->clase}}">{{$i->clase}}</option>
                                                @endforeach
                                            </select>
                                            <x-jet-input-error for="icon" />
                                        </div>
                                        <div class="flex-1 ml-4">
                                            <label for="publicado">Publicado</label>
                                            <input type="checkbox" name="publicado">
                                        </div>

                                        <div class="flex-1">
                                            <label for="posicion">Posicion</label>
                                            <input type="text" name="posicion" min="0" class="rounded text-sm"
                                                value="{{old('posicion', $item->posicion)}}">
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
