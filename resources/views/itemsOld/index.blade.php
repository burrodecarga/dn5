<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-bold text-center text-2xl text-gray-800 py-2">Listado de items</h1>

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
                                Items
                            </th>


                            <th scope="col" class="relative px-6 py-3">
                                <div class="p-2">
                                    <a href="{{route('temas.create')}}" class="text-center">
                                        <i class="fa fa-plus fa-2x rounded-full border-2"
                                            title="crear nuevo tema"></i></a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($items as $item)
                        <tr>
                            <td class="px-6 py-4 wrap" width="25%">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="{{Storage::url($item->subtema->tema->imagen);}}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$item->subtema->tema->titulo}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$item->subtema->tema->autor}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            <i class="{{$item->subtema->tema->icon}}"></i>
                                            <span>Actualizado :
                                                {{$item->subtema->tema->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <hr class="m-2">
                                        <div class="flex justify-between items-center">
                                            <div class="text-sm text-gray-700">
                                                Pos: {{$item->subtema->tema->posicion}}
                                            </div>
                                            <div class="p-2">
                                                <a href="{{route('subtemas.create',$item->subtema->tema->id)}}"
                                                    class="text-center">
                                                    <i class="fa fa-plus rounded-full border-2"
                                                        title="crear subtema a {{$item->subtema->tema->titulo}}"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 wrap" width="25%">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="{{Storage::url($item->subtema->imagen);}}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$item->subtema->titulo}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$item->subtema->autor}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            <i class="{{$item->subtema->icon}}"></i>
                                            <span>Actualizado :
                                                {{$item->subtema->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <hr class="m-2">
                                        <div class="flex justify-between items-center">
                                            <div class="text-sm text-gray-700">
                                                Pos: {{$item->subtema->posicion}}
                                            </div>
                                            <div class="p-2">
                                                <a href="{{route('items.create',['id'=>$item->subtema->id])}}"
                                                    class="text-center">
                                                    <i class="fa fa-plus rounded-full border-2"
                                                        title="crear item a {{$item->subtema->titulo}}"></i></a>
                                            </div>
                                            <div class="p-2">
                                                <a href="{{route('subtemas.edit',$item->subtema->id)}}"
                                                    class="text-center">
                                                    <i class="fa fa-edit rounded-full border-2"
                                                        title="Editar a {{$item->subtema->titulo}}"></i></a>
                                            </div>
                                            <div class="p-2">
                                                <form action="{{route('subtemas.destroy',$item->subtema->id)}}"
                                                    method="POST" class="text-center">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit">
                                                        <i class="fa fa-trash rounded-full border-2"
                                                            title="Eliminar a {{$item->subtema->titulo}}"></i>
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 wrap" width="35%" colspan="2">
                                <div class="text-sm text-gray-900">{{$item->titulo}}</div>

                                <div class="text-sm text-gray-500">
                                    <i class="{{$item->icon}}"></i>
                                    <span>Actualizado :
                                        {{$item->updated_at->diffForHumans()}}</span>
                                </div>

                                <div class="flex">
                                    @foreach ($item->images as $imagen )
                                    <div class="flex h-10 w-10 ml-1">
                                        <span class="flex-1">
                                            <img class="h-10 w-10 rounded-full" src="{{Storage::url($imagen->url);}}"
                                                alt="">

                                            <form action="{{route('items.borrar-imagen',$imagen->id)}}" method="POST"
                                                class="text-center">
                                                @csrf
                                                @method('POST')
                                                <button type="submit">
                                                    <i class="fa fa-trash rounded-full border-2"
                                                        title="Eliminar a {{$item->titulo}}"></i>
                                                </button>

                                            </form>
                                        </span>
                                    </div>
                                    @endforeach
                                </div>
                                <hr class="mt-4">
                                <div class="flex justify-between items-center">
                                    <div class="text-sm text-gray-700">
                                        Pos: {{$item->posicion}}
                                    </div>

                                    <div class="p-2">
                                        <a href="{{route('items.edit',$item->id)}}" class="text-center">
                                            <i class="fa fa-edit rounded-full border-2"
                                                title="Editar a {{$item->titulo}}"></i></a>
                                    </div>
                                    <div class="p-2">
                                        <form action="{{route('items.destroy',$item->id)}}" method="POST"
                                            class="text-center">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit">
                                                <i class="fa fa-trash rounded-full border-2"
                                                    title="Eliminar a {{$item->titulo}}"></i>
                                            </button>

                                        </form>
                                    </div>
                                </div>

                            </td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-4 py-2">
                    {{$items->links()}}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
