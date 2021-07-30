<x-app-layout>
    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-auto">

                <table class="mx-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tema
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 text-xs">
                        @foreach($temas as $key=>$tema)
                        <tr>
                            <td class="px-6 py-4 flex flex-col wrap" width="100%">
                                <div class="card shadow-sm">
                                    <div class="card-body bg-blue-200">
                                        <h5 class="card-title mb-3">
                                            <span class="theme-icon-holder card-icon-holder me-2">
                                                <i class="{{$tema->icon}}"></i>
                                            </span>
                                            <!--//card-icon-holder-->
                                            <span class="card-title-text">Tema {{$key}}:{{$tema->titulo}}</span>
                                            <div class="text-sm text-gray-500">
                                                {{$tema->autor}}
                                            </div>
                                        </h5>
                                        <div class="card-text">
                                            {{$tema->descripcion}}
                                        </div>
                                        <a class="card-link-mask" href="docs-page.html#section-1"></a>
                                        <hr class="m-2">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{Storage::url($tema->imagen);}}"
                                                alt="">
                                        </div>
                                        <hr class="m-2">
                                        <div class="text-sm text-gray-500">
                                            <i class="{{$tema->icon}}"></i>
                                            <span>Actualizado :
                                                {{$tema->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <hr class="m-2">
                                        {{$tema->publico == 1 ? 'publicado':'No publicado'}}
                                        <p>Posición:{{$tema->posicion}}</p>
                                    </div>
                                </div>
                                <!--//card-body-->
                                <!--//subtemas-->
                                <hr class="m-1">
                                @foreach ($tema->subtemas as $subtema )
                                <div class="card shadow-sm bg-green-500 flex">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">
                                            <span class="theme-icon-holder card-icon-holder me-2">
                                                <i class="{{$subtema->icon}}"></i>
                                            </span>
                                            <!--//card-icon-holder-->
                                            <span class="card-title-text">SUB-TEMA:
                                                {{$subtema->titulo}}</span>
                                            <div class="text-sm text-gray-500">
                                                {{$subtema->autor}}
                                            </div>
                                        </h5>
                                        <div class="card-text">
                                            {{$subtema->descripcion}}
                                        </div>
                                        <a class="card-link-mask" href="docs-page.html#section-1"></a>
                                        <hr class="m-2">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{Storage::url($subtema->imagen);}}" alt="">
                                        </div>
                                        <hr class="m-2">
                                        <div class="text-sm text-gray-500">
                                            <i class="{{$subtema->icon}}"></i>
                                            <span>Actualizado :
                                                {{$subtema->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <hr class="m-2">
                                        {{$subtema->publico == 1 ? 'publicado':'No publicado'}}
                                        <p>Posición:{{$subtema->posicion}}</p>
                                    </div>
                                    <!--//card-body-->
                                </div>
                                <hr class="m-1">

                                @foreach ($subtema->items as $item )

                                <div class="card shadow-sm bg-blue-500">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">
                                            <span class="theme-icon-holder card-icon-holder me-2">
                                                <i class="{{$item->icon}}"></i>
                                            </span>
                                            <!--//card-icon-holder-->
                                            <span class="card-title-text">ITEM:
                                                {{$item->titulo}}{{$item->images}}</span>
                                            <div class="text-sm text-gray-500">
                                                {{$item->autor}}
                                            </div>
                                        </h5>
                                        <div class="card-text">
                                            {{$item->descripcion}}
                                        </div>
                                        <a class="card-link-mask" href="docs-page.html#section-1"></a>
                                        <hr class="m-2">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @foreach ($item->images as $imagen )
                                            <img class="h-10 w-10 rounded-full" src="{{Storage::url($imagen->url);}}"
                                                alt="" />
                                            @endforeach

                                        </div>
                                        <hr class="m-2">
                                        <div class="text-sm text-gray-500">
                                            <i class="{{$item->icon}}"></i>
                                            <span>Actualizado :
                                                {{$item->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <hr class="m-2">
                                        {{$item->publico == 1 ? 'publicado':'No publicado'}}
                                        <p>Posición:{{$item->posicion}}</p>
                                    </div>
                                    <!--//card-body-->
                                </div>
                                <hr class="m-1">
                                @endforeach
            </div>
            @endforeach
        </div>
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
