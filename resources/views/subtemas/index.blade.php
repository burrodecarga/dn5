<x-app-layout>
    <div>
        <div class="flex flex-wrap">
            @foreach ($temas as $tema )
            <div class="max-w-xl mx-auto py-4">
                <div class='w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
                    <div class='h-2 w-full bg-gray-800'></div>
                    <div class='px-2 py-3'>
                        <div class='w-full text-center mb-3'>
                            <img class='w-24 h-24 inline-block object-cover rounded-full' alt='{{$tema->titulo}}'
                                src='{{Storage::url($tema->imagen);}}'>

                        </div>
                        <div class='w-full text-center border-t mb-1 pb-3'>
                            <h1 class="mt-2 text-xl font-bold">{{$tema->titulo}}</h1>
                            <p class="my-1 text-xs font-bold">Autor : {{$tema->autor}}</p>
                            <p class="my-1 text-xs font-bold">Icono : <i class='i {{$tema->icon}}'></i></p>
                            <p class="my-1 text-xs font-bold">Estatus : @if($tema->publicado=='on') publicado @else no
                                publicado @endif - Actualizado :
                                {{$tema->updated_at->diffForHumans()}}</p>
                            <a href="{{route('nuevo-subtema',['idTema'=>$tema->id,'idSub'=>0])}}">
                                <i class='fas fa-plus-circle'></i></a>
                        </div>
                        <table class="w-full border">
                            <thead>
                                <tr class="border-t-2 font-bold">
                                    <td class="p-2 border-r w-1/12">#</td>
                                    <td class="p-2 border-r w-6/12">Titulo</td>
                                    <td class="p-2 border-r w-1/12">Estatus</td>
                                    <td class="p-2 text-center w-4/12">Imagen</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tema->subtemas as $subtema )
                                <tr class="border-t text-sm">
                                    <td class="p-1 pl-2 border-r ">{{$subtema->posicion}}</td>
                                    <td class="p-1 pl-2 border-r">{{$subtema->titulo}}</td>
                                    <td class="p-1 pl-2 border-r">
                                        <p class="text-xs">Estatus:
                                            {{$subtema->publicado == 1 ? 'publicado':'No publicado'}}</p>
                                        <p class="text-xs">Posición N°: {{$subtema->posicion}}</p>
                                    </td>
                                    <td class="p-1"><small class="font-bolder text-lg pr-2 text-gray-300">
                                            <div class="flex-shrink-0 h-10 w-10 mx-auto">
                                                <a href="{{route('temas.subtemas.edit',[$tema->id,$subtema->id])}}">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="{{Storage::url($subtema->imagen);}}" alt=""></a>
                                            </div>
                                        </small></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
