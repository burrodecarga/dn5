<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-bold text-center text-2xl text-gray-800 py-2">Listado de Sub-Temas</h1>

                <table class="mx-auto w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Titulo
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripcion
                            </th>

                            <th scope="col" class=" text-center px-6 py-3">
                                <div class="p-2">
                                    <a href="{{route('temas.create')}}" class="text-center"
                                        title="Agregar un Nuevo tema....">
                                        <i class="fa fa-plus fa-2x rounded-full border-2"></i></a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($temas as $tema)
                        <tr>
                            <td class="px-6 py-4 wrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{Storage::url($tema->imagen);}}"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            TEMA : {{$tema->titulo}} <div class="text-sm text-gray-500">
                                            </div>
                                            <div class="text-sm font-medium text-gray-900">
                                                SUBTEMA : {{$tema->titulo}} <div class="text-sm text-gray-500">
                                                    {{$tema->autor}}
                                                </div>
                                                <div class="p-1">
                                                    <a href="{{route('subtemas.create')}}" class="text-center"
                                                        title="Agregar un Nuevo Subtema al tema.... .{{$tema->titulo}}">
                                                        <i class="fa fa-plus rounded-full border-2"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </td>
                            <td class="px-6 py-4 wrap">
                                <div class="text-xs text-gray-900">{!!$tema->descripcion!!}</div>

                                <div class="text-sm text-gray-500">
                                    <i class="{{$tema->icon}}"></i>
                                    <span>Actualizado :
                                        {{$tema->updated_at->diffForHumans()}}</span>
                                </div>
                                <p class="text-xs">Estatus : {{$tema->publicado == 1 ? 'publicado':'No publicado'}}</p>
                                <p class="text-xs">Posición N°: {{$tema->posicion}}</p>
                            </td>


                            <td class="px-6 py-4 wrap text-sm font-medium text-center">
                                <a href="{{route('temas.edit', $tema->id)}}"
                                    class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('temas.destroy', $tema->id)}}" method="POST">
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
                    {{$temas->links()}}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
