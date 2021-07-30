<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-bold text-center text-2xl text-gray-800 py-2">Listado de Subtemas</h1>


                <table class="mx-auto w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tema
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                SubTema
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                Descripcion
                            </th>


                            <th scope="col" class=" text-center px-6 py-3">
                                <div class="p-2">
                                    <a href="{{route('subtemas.create')}}" class="text-center">
                                        <i class="fa fa-plus fa-2x rounded-full border-2"></i></a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($subtemas as $subtema)
                        <tr>
                            <td class="px-6 py-4 wrap" width="25%">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="{{Storage::url($subtema->tema->imagen);}}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$subtema->tema->titulo}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$subtema->tema->autor}}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 wrap" width="25%">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{Storage::url($subtema->imagen);}}"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$subtema->titulo}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$subtema->autor}}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 wrap" width="35%">
                                <div class="text-sm text-gray-900">{!!$subtema->descripcion!!}</div>

                                <div class="text-sm text-gray-500">
                                    <i class="{{$subtema->icon}}"></i>
                                    <span>Actualizado :
                                        {{$subtema->updated_at->diffForHumans()}}</span>
                                </div> {{$subtema->publico == 1 ? 'publicado':'No publicado'}}
                                <p>Posición:{{$subtema->posicion}}</p>
                            </td>


                            <td class="px-6 py-4 wrap text-sm font-medium text-center">
                                <a href="{{route('subtemas.edit', $subtema->id)}}"
                                    class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('subtemas.destroy', $subtema->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit"> <i class="fas fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-4 py-2">
                    {{$subtemas->links()}}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
