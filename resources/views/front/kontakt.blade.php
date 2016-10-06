@extends('layouts.layout-front')

@section('meta')
    <meta name="title" content="{{$page->meta_title}}">
    <meta name="keywords" content="{{$page->meta_keywords}}">
    <meta name="description" content="{{$page->meta_description}}">
    <meta name="meta_image" content="{{$page->meta_image}}">
    <title>{{$page->meta_title}}</title>
@stop

@section('content')

    <section class="page-wide kontakt-page">

        <div class="left">

            <div class="content">
                <h2 class="medium">Kontakt</h2>
                <div class="text-block">

                    <div class="shops text-row">
                        <h3>Nasze sklepy:</h3>
                        <div class="shop">
                            <ul class="shop-info">
                                <li>
                                    <p><strong>"Wędliny z Dębiny" Elżbieta Tomaszewska</strong></p>
                                    <p>Dębina ul. Pańska 12, 05-152 Czosnów</p>
                                </li>
                                <li>
                                    <a href="#" class="button red active marker-1">sprawdź</a>
                                </li>
                            </ul>
                            <ul class="shop-info">
                                <li>
                                    <p><strong>Hala Banacha "Zieleniak"</strong></p>
                                    <p>pawilon numer 26 ul. Grójecka 97 02-101 Warszawa</p>
                                </li>
                                <li>
                                    <a href="#" class="button red marker-2">sprawdź</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="map-mobile" id="map-2"></div>

                    <div class="open-days text-row">
                        <h3>Godziny otwarcia:</h3>
                        <ul class="open-date">
                            <li><span>Środa</span> godz. 8-20</li>
                            <li><span>Czwartek</span> godz. 8-20</li>
                            <li><span>Piątek</span> godz. 8-20</li>
                        </ul>
                        <p>
                            W czasie przedświątecznym, ustalamy odmienne lub dodatkowe dni otwarcia.
                            Prosimy o śledzenie naszej strony, profilu na Facebooku lub czytanie ogłoszeń wywieszonych w
                            sklepie.
                        </p>
                    </div>

                    <div class="contact-details text-row">
                        <h3>Dane kontaktowe:</h3>
                        <ul class=" details contact-icons">
                            <li class="phone">608 532 046</li>
                            <li class="email"><a href="mailto:wedlinyzdebiny@o2.pl">wedlinyzdebiny@o2.pl</a></li>
                        </ul>
                    </div>

                    <div class="directions text-row">
                        <h3>Wskazówki dojazdu:</h3>
                        <p>
                            <strong>Zaklad znajduje się 20 minut jazdy samochodem od granicy Warszawy (27km od
                                centrum).</strong>
                            Jadąc z Warszawy trasą E7 na Gdańsk ok. 13 km za Łomiankami skręt na światłach w prawo na
                            Czosnów,
                            2 km prosto, następnie skręt w lewo pod wiaduktem na Kazuń Bielany, dalej ok. 500 m, sklep
                            po
                            prawej stronie. Przed sklepem 10 miejsc parkingowych do Państwa dyspozycji.
                        </p>
                        <p>
                            <strong>Nasze produkty można nabyć również w nowopowstałym sklepie firmowym<br/>
                                pod Halą Banacha: <span>"U Agi" Agnieszka Jaworska</span></strong><br/>
                            Hala Banacha "Zieleniak" pawilon numer 26 ul. Grójecka 97 02-101 Warszawa
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div class="right">

            <div class="map-big" id="map"></div>

        </div>

    </section>

@endsection
