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
                        @foreach($temas as $tema)
                        <tr>

                            <td class="px-6 py-4 wrap" width="25%">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{Storage::url($tema->imagen);}}"
                                            alt="{{$tema->titulo}}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$tema->titulo}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$tema->autor}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            <i class="{{$tema->icon}}"></i>
                                            <span>Actualizado :
                                                {{$tema->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <hr class="m-2">
                                        <div class="flex justify-between items-center">
                                            <div class="text-sm text-gray-700">
                                                Pos: {{$tema->posicion}}
                                            </div>
                                            <div class="p-2">
                                                <a href="{{route('temas.subtemas.create',$tema->id)}}"
                                                    class="text-center">
                                                    <i class="fa fa-plus rounded-full border-2"
                                                        title="crear subtema a {{$tema->titulo}}"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 wrap" colspan="2">

                                @foreach ($tema->subtemas as $subtema )
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{Storage::url($subtema->imagen)}}"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$subtema->titulo}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$subtema->autor}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            <i class="{{$subtema->icon}}"></i>
                                            <span>Actualizado :
                                                {{$subtema->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <hr class="m-2">
                                        <div class="flex justify-between items-center">
                                            <div class="text-sm text-gray-700">
                                                Pos: {{$subtema->posicion}}
                                            </div>
                                            <div class="p-2">
                                                <a href="{{route('items.create',['id'=>$subtema->id])}}"
                                                    class="text-center">
                                                    <i class="fa fa-plus rounded-full border-2"
                                                        title="crear nuevo items a {{$subtema->titulo}}"></i></a>
                                            </div>
                                            <div class="p-2">
                                                <a href="{{route('subtemas.edit',$subtema->id)}}" class="text-center">
                                                    <i class="fa fa-edit rounded-full border-2"
                                                        title="Editar a {{$subtema->titulo}}"></i></a>
                                            </div>
                                            <div class="p-2">
                                                <form action="{{route('subtemas.destroy',$subtema->id)}}" method="POST"
                                                    class="text-center">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <i class="fa fa-trash rounded-full border-2"
                                                            title="Eliminar a {{$subtema->titulo}}"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-800 text-white p-2">
                                    <p class="text-xs text-center italic">Items del subtema</p>
                                    <ul>
                                        @foreach ($subtema->items as $key=>$item)
                                        <li class="text-xs">
                                            <a href="{{route('items.edit',$item->id)}}">
                                                <p>{{$key}}-{{$item->titulo}}</ps=>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
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
