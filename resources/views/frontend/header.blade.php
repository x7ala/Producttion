<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProducTTion</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css" integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('style.css')}}" rel="stylesheet">


    <link rel="icon" href="{{url('imgs/favicion-tt.ico')}}" type="image/x-icon">

</head>
<body>



 <header>

     <div class="row py-2 mrl-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <!--LOGO-->
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url('imgs/LOGO-TT.png')}}" alt="Logo" style="height: 100px;">
                  </a>
                <!--LOGO-->

                <!--button for smaller screens-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--button for smaller screens-->

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('haberler')}}">Haberler</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('hakkimizda')}}">Hakkimizda</a></li>

                    <!-- Dropdown for Hizmetlerimiz -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{url('hizmetlerimiz')}}" id="hizmetlerimizDropdown" role="button" aria-expanded="false">
                            Hizmetlerimiz
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="hizmetlerimizDropdown">
                            @foreach($service_categories as $service_category)
                            <li><a class="dropdown-item" href="{{url('hizmet/'.$service_category->link)}}">{{$service_category->title}}</a></li>
                            @endforeach
                            <!--<li><a class="dropdown-item" href="{{url('hizmet/konserler')}}">Konserler</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/festival')}}">Festival</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/mezuniyet-toreni')}}">Mezuniyet Töreni</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/kongre')}}">Kongre</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/dugun')}}">Düğün</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/lansman')}}">Lansman</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/sportif-aktivite')}}">Sportif Aktivite</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/acilis')}}">Açılış</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/temel-atma-toreni')}}">Temel Atma Töreni</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/defile')}}">Defile</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/fuar')}}">Fuar</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/tv')}}">TV</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/sanatci-temini')}}">Sanatçı Temini</a></li>
                            <li><a class="dropdown-item" href="{{url('hizmet/prova-studyosu')}}">Prova Stüdyosu</a></li>-->
                        </ul>
                    </li>

                    <!-- Dropdown for Sistemler -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{url('sistemler')}}" id="sistemlerDropdown" role="button" aria-expanded="false">
                            Sistemler
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sistemlerDropdown">
                            @foreach($system_categories as $system_category)
                            <li><a class="dropdown-item" href="{{url('sistem/'.$system_category->link)}}">{{$system_category->title}}</a></li>
                            @endforeach
                            <!--<li><a class="dropdown-item" href="{{url('sistem/ses-sistemleri')}}">Ses Sistemleri</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/simultane')}}">Simultane</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/isik')}}">Işik</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/goruntu')}}">Görüntü</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/truss')}}">Truss</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/sahne')}}">Sahne</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/dekor-susleme')}}">Dekor, Süsleme</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/kamera-fotograf-reji')}}">Kamera, Fotoğraf, Reji</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/dj')}}">DJ</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/teknik-hizmet')}}">Teknik Hizmet</a></li>
                            <li><a class="dropdown-item" href="{{url('sistem/sahne-tasarimi')}}">Sahne Tasarımı</a></li>-->
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{url('sanatcilar')}}" >Sanatcilar</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{url('referanslarimiz')}}">Referanslarimiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('iletisim')}}">Iletisim</a></li>
                </ul>


            </div>
            </div>
        </nav>
     </div>

 </header>
