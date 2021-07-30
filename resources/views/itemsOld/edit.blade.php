<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="">
                    <div class="mt-5 md:mt-0">
                        <form action="{{route('subtemas.update',$subtema->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="shadow sm:rounded-md sm:overflow-hidden">

                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <label for="tema_id" class="block text-sm font-medium text-gray-700">
                                        Seleccione tema
                                    </label>
                                    <select name="tema_id" id=""
                                        class="form-control shadow-sm w-full my-2  rounded @error('titulo')is-invalid @else border-0 @enderror">
                                        @foreach ($temas as $tema )
                                        <option value="{{$tema->id}}" @if($tema->id ==$subtema->tema_id) selected @endif
                                            >{{$tema->titulo}}</option>
                                        @endforeach
                                    </select>
                                    <x-jet-input-error for="tema_id" />
                                </div>
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <input id="titulo" type="text" name="titulo"
                                        value="{{old('titulo', $subtema->titulo)}}"
                                        class="form-control shadow-sm w-full my-2  rounded @error('titulo')is-invalid @else border-0 @enderror"
                                        placeholder="Titulo del subtema">
                                    <x-jet-input-error for="titulo" />
                                    <div>
                                        <label for="descripcion" class="block text-sm font-medium text-gray-700">
                                            Descripción
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="descripcion" name="descripcion" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('descripcion')is-invalid @else border-0 @enderror"
                                                placeholder="Breve descripcion del subtema">
                                                {{old('descripcion', $subtema->descripcion)}}
                                            </textarea>
                                        </div>
                                        <x-jet-input-error for="descripcion" />
                                    </div>

                                    <hr>

                                    <div class="flex justify-around">
                                        <div class="flex-1">
                                            <input type="file" name="imagen" id="imagen">
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
                                            <input type="checkbox" name="publicado" @if($subtema->publicado==1) checked
                                            @endif>
                                        </div>

                                        <div class="flex-1">
                                            <label for="posicion">Posicion</label>
                                            <input type="text" name="posicion" min="0" class="rounded text-sm"
                                                value=" {{old('posicion', $subtema->posicion)}}">
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
    </div>
    </div>
</x-app-layout>
