@extends('layouts.layout-front')

@section('meta')
    <meta name="title" content="{{$page->meta_title}}">
    <meta name="keywords" content="{{$page->meta_keywords}}">
    <meta name="description" content="{{$page->meta_description}}">
    <meta name="meta_image" content="{{$page->meta_image}}">
    <title>{{$page->meta_title}}</title>
@stop

@section('content')
    <section class="page-wide o-nas">

        <div class="left">

            <div class="content">
                <h2 class="short">O nas</h2>
                <div class="text-block">
                    <p>
                        Maecenas id nulla ac magna eleifend vestibulum. Suspendisse potenti.
                        Pellentesque bibendum ornare mauris, lacinia placerat mauris accumsan ut. Fusce at quam quam.
                        Duis eu viverra eros. Integer suscipit condimentum eros pretium posuere. Sed a aliquet risus.
                        Praesent elementum est sed sapien
                        ultricies sagittis. Nam et lectus eget ligula lobortis lobortis. Aliquam conse ctetur, sapien
                        non varius aliquam, metus ante consectetur ligula, vitae
                        convallis magna purus venenatis libero.
                    </p>
                    <p>
                        Praesent lacus lorem, lobortis at urna eget, interdum consequat nunc.
                        Vestibulum laoreet magna justo, vitae euismod enim faucibus ac. Pellentesque vel scelerisque
                        eros. Integer pulvinar tellus eu diam interdum pellentesque. Pellentesque suscipit vel augue non
                        iaculis. Pellentesque imperdiet sollici
                        tudin quam, a malesuada tellus commodo sit amet. Donec vestibulum, nunc non facilisis facilisis,
                        arcu dui pellentesque dolor.
                    </p>
                </div>
            </div>

        </div>

        <div class="right">

            <img src="{{URL::asset('front/images/onas.jpg')}}">

        </div>

    </section>

@endsection

