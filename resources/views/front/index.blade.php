@extends('layouts.layout-front')

@section('meta')
    <meta name="title" content="{{$page->meta_title}}">
    <meta name="keywords" content="{{$page->meta_keywords}}">
    <meta name="description" content="{{$page->meta_description}}">
    <meta name="meta_image" content="{{$page->meta_image}}">
    <title>{{$page->meta_title}}</title>
@stop

@section('content')

    <section class="start">

        <div class="homepage-loader"></div>
        <div class="start-overlay"></div>

        <div class="page">

            <div class="content">

                <div class="logo">
                    <img src="{{URL::asset('front/images/logo-big.png')}}">
                </div>

                <div class="logo-text">
                    <img src="{{URL::asset('front/images/logo-text.png')}}">
                </div>

                <div class="title">Wędliny naturalnie <strong>pyszne.</strong></div>

                <a href="#nasza-oferta" class="button">Zobacz naszą ofertę</a>

            </div>

        </div>

    </section>

    <section class="masarnia parallax-section light" id="nasza-oferta">
        <div class="page col-group">

            <div class="col-7">
                <h2>Masarnia</h2>
                <div class="text-block">
                    <p>
                        Rodzinna masarnia „Wędliny z Dębiny” to połączenie tradycyjnych recepturz niepowtarzalnym
                        aromatem drewna akacjowego, dębowego czy owocowego,
                        które służy nam do opalania wszystkich potraw. Ten sposób przyrządzania wyrobów,
                        opróczniepowtarzalnego smaku i aromatu, ma jeszcze jedną ważną cechę.
                        Wędliny zachowująświeżość do dwóch tygodni, a z czasem nie lepią się (co ma miejsce w przypadku
                        masarninastawionych wyłącznie na dużą produkcję)
                        tylko naturalnie się podsuszają.
                    </p>
                </div>

            </div>
        </div>

        <div class="parallaxes">
            <div class="parallax item-1" data-start="60" data-end="75" data-right="150"><img
                        src="{{URL::asset('front/images/s2-ham.png')}}"></div>
            <div class="parallax item-2" data-start="280" data-end="310" data-right="50"><img
                        src="{{URL::asset('front/images/s2-garlic.png')}}"></div>
        </div>

    </section>

    <section class="nasze-produkty parallax-section gray">
        <div class="page col-group">

            <div class="col-12">
                <h2>Nasze produkty</h2>
                <div class="col-group">

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('front/images/melle.jpg')}}" data-lightbox="0" data-group="all"
                               data-title="Krakowska"
                               data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
              malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
              finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
              auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
              congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               data-image="images/galeria-big.png" class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/box.jpg')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('front/images/galeria-big.png')}}" data-lightbox="1" data-group="all"
                               data-title="Krakowska" data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
                malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
                finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
                auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
                congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/box.jpg')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('front/images/galeria-big.png')}}" data-lightbox="2" data-group="all"
                               data-title="Krakowska" data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
                malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
                finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
                auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
                congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/galeria-big.png')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('front/images/galeria-big.png')}}" data-lightbox="3" data-group="all"
                               data-title="Krakowska" data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
                malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
                finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
                auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
                congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/box.jpg')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('front/images/galeria-big.png')}}" data-lightbox="4" data-group="all"
                               data-title="Krakowska" data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
                malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
                finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
                auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
                congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/box.jpg')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('images/galeria-big.png')}}" data-lightbox="5" data-group="all"
                               data-title="Krakowska"
                               data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
                malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
                finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
                auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
                congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/box.jpg')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('images/galeria-big.png')}}" data-lightbox="6" data-group="all"
                               data-title="Krakowska"
                               data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
                malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
                finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
                auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
                congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/box.jpg')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                    <div class="col-3">
                        <figure>
                            <a href="{{URL::asset('front/images/galeria-big.png')}}" data-lightbox="7" data-group="all"
                               data-title="Krakowska" data-description="Etiam quis tempus nibh. Suspendisse ultrices eleifend convallis. Curabitur vel euismod erat, sed
                malesuada sem. Fusce non semper magna, vitae euismod odio. Sed lacus leo, tempus ut nisi vitae, congue
                finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac,
                auctor lectus. Praesent pulvinar lacus in nisl faucibus viverra. Sed lacus leo, tempus ut nisi vitae,
                congue finibus nisl. Maecenas in finibus neque, id lacinia lacus. Duis sed dolor mattis, ultricies ipsum ac, auctor lectus."
                               class="wrapper lightbox-trigger">
                                <img src="{{URL::asset('front/images/box.jpg')}}">
                                <div class="overlay">
                                </div>
                                <div class="title">Krakowska</div>
                            </a>
                        </figure>
                    </div>

                </div>
                <div class="buttons">
                    <a href="#" class="button">wczytaj więcej</a>
                </div>

            </div>
        </div>
    </section>

    <section class="wiejski-stol parallax-section light">
        <div class="page col-group">

            <div class="col-6">
                <h2>Wiejski stół<span>klasyka ze smakiem</span></h2>
                <div class="text-block">
                    <p>
                        Wesele bez wiejskiego stołu praktycznie nie istnieje – Ten zwyczaj na stałe wszedł do ofert sal
                        weselnych.
                        Większość sal zapewnia wiejski stół, ale pospróbowaniu naszych tradycyjnych wędlin, będą
                        chcieli Państwo,
                        aby gościeweselni również poznali jakość tradycji. Przygotowanie weselnego stołurealizujemy po
                        wcześniejszych
                        ustaleniach, a ponieważ chcemy, żeby naszeprodukty zachowały pełnię smaku i aromatu,
                        przyjmujemy zamówieniawyłącznie
                        dla par biorących ślub w miejscowości Warszawa, Legionowo, Nowy Dwór Mazowiecki, Płońsk i
                        okolice do maksymalnie 100km.
                    </p>
                </div>

            </div>
        </div>
        <div class="parallax item-3" data-start="60" data-end="110" data-right="0"><img src="front/images/s2-meat.png">
        </div>
        <div class="parallax item-4" data-start="300" data-end="300" data-right="0"><img src="front/images/s2-bg.png">
        </div>

    </section>

    <section class="kontakt parallax-section gray">
        <div class="page">

            <h2>Zapraszamy do naszego sklepu!</h2>
            <div class="col-group">
                <div class="col-5">

                    <div class="text-block">
                        <img src="{{URL::asset('front/images/contact-ham.png')}}">
                        <p>
                            <strong>"Wędliny z Dębiny"</strong> Elżbieta Tomaszewska<br/>Dębina ul. Pańska 12, 05-152
                            Czosnów
                        </p>
                        <ul class="contact-icons">
                            <li class="phone">608 532 046</li>
                            <li class="email"><a href="mailto:wedlinyzdebiny@o2.pl">wedlinyzdebiny@o2.pl</a></li>
                        </ul>
                        <ul class="social-icons">
                            <li class="facebook"><a href="#"></a></li>
                            <li class="google-plus"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-7">
                    <div id="map"></div>
                    <div id="map-2"></div>
                </div>

            </div>
        </div>

    </section>

@endsection
