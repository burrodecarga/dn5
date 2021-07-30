<x-app-layout>
    <div class="page-content">

        <div class="container">
            <div class="docs-overview py-5">
                <div class="row justify-content-center">
                    @foreach ($temas as $tema )
                    <div class="col-12 col-lg-4 py-3">

                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">

                                        <i class="{{$tema->icon}}"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">{!!$tema->titulo!!}</span>
                                </h5>
                                <div class="card-text">
                                    {!!$tema->descripcion!!}
                                </div>
                                <a class="card-link-mask" href="{{route('pagina.index',$tema->id)}}"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    @endforeach


                </div>
                <!--//row-->
            </div>
            <!--//container-->
        </div>
        <!--//container-->
    </div>
    <!--//page-content-->

</x-app-layout>
