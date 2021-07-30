<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="font-bold font-weight-500 text-center text-2xl text-gray-800 py-2">Editar Tema</h1>

                <div class="">
                    <div class="mt-5 md:mt-0">
                        <form action="{{route('temas.update',$tema->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <label for="titulo" class="block text-sm font-medium text-gray-700">
                                        Título
                                    </label>
                                    <input id="titulo" type="text" name="titulo"
                                        value="{{old('titulo', $tema->titulo)}}"
                                        class="form-control shadow-sm w-full my-2  rounded @error('titulo')is-invalid @else border-0 @enderror"
                                        placeholder="Titulo del tema" />
                                    <x-jet-input-error for="titulo" />

                                    <div>
                                        <label for="descripcion" class="block text-sm font-medium text-gray-700">
                                            Descripción
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="editor" name="descripcion" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('descripcion')is-invalid @else border-0 @enderror"
                                                placeholder="Breve descripcion del tema">
                                                {{old('descripcion', $tema->descripcion)}}
                                            </textarea>
                                        </div>
                                        <x-jet-input-error for="descripcion" />
                                    </div>

                                    <hr>
                                    <div>
                                        <label for="descripcion" class="block text-sm font-medium text-gray-700">
                                            Descripción
                                        </label>
                                        <input id="concepto" type="text" name="concepto"
                                            value="{{old('concepto', $tema->concepto)}}"
                                            class="form-control shadow-sm w-full my-2  rounded @error('concepto')is-invalid @else border-0 @enderror"
                                            placeholder="Concepto del tema" />
                                        <x-jet-input-error for="concepto" />
                                    </div>



                                    <div>
                                        <label for="definicion" class="block text-sm font-medium text-gray-700">
                                            Definición
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="editor1" name="definicion" rows="3"
                                                class=" text-justify shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('definicion')is-invalid @else border-0 @enderror"
                                                placeholder="Breve definicion del tema">
                                                {{old('definicion', $tema->definicion)}}</textarea>
                                        </div>
                                        <x-jet-input-error for="definicion" />
                                    </div>


                                    <div class="flex items-center">
                                        <div class="flex-1 text-sm">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                    src="{{Storage::url($tema->imagen);}}" alt="">
                                            </div>
                                            <input type="file" name="imagen" id="imagen" />
                                        </div>
                                        <div class="flex-1">
                                            <label for="icon">Icono</label>
                                            <select name="icon" class="rounded block">
                                                @foreach ($iconos as $i)
                                                <option value="{{$i->clase}}" @if($i->clase == $tema->icon) selected
                                                    @endif>{{$i->clase}}</option>
                                                @endforeach
                                            </select>
                                            <x-jet-input-error for="icon" />
                                        </div>
                                        <div class="flex-1">
                                            <label for="publico">Publicado</label>
                                            <select name="publico" class="rounded text-sm block">
                                                <option value="0" @if($tema->publico==0) selected @endif>No
                                                    publicado</option>
                                                <option value="1" @if($tema->publico==1) selected @endif>
                                                    Publicado</option>
                                            </select>
                                        </div>

                                        <div class="">
                                            <label for="posicion">Posicion</label>
                                            <input type="text" name="posicion" min="0" class="rounded text-sm block"
                                                value=" {{old('posicion', $tema->posicion)}}" />
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

            ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .catch( error => {
                console.error( error );
            } );


    </script>
</x-app-layout>
