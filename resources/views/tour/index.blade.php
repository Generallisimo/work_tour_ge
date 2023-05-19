@extends('tour.layouts.master')
@section('title', 'Tour')
@section('content')
<script src="js/index.js"></script>
<img class="blog-bg-img" style="width: 100%;" src="images/md.png" alt="">
   <!-- header section start -->
   <div class="header_section video_src_head" style="max-height: 800px;">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="{{route('tour_home')}}"><img style="width: 70px; border-radius:50px;" src="images/tour.jpeg"></a></div>
               <div class="d-block">
                  <h2 style="color:white; " class="mt-2">Georgia in Tour</h2>
                  <a style="padding:5px;" href="{{route('render_social', ['id'=>'whatsapp'])}}" class="mr-2 ">
                  <img width="40px" style="border-radius: 70px;" src="images/w3.png">
               </a>
               <a style="padding:5px;" href="{{route('render_social', ['id'=>'telegram'])}}" class="mr-2 ">
                  <img width="75px" class="" style="border-radius: 70px;" src="images/tg2.png">
               </a>
               <a class="" style="padding:5px;" href="{{route('render_social', ['id'=>'instagram'])}}">
                  <img width="40px" style="border-radius: 70px;" src="images/in2.png">
               </a>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('tour_home')}}">Главная</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('tour_category')}}">Туры</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div style="display: block;">
               <div class="logo"><a href="{{route('tour_home')}}"><img style="width: 70px; border-radius:50px;" src="images/tour.jpeg"></a>
                  <h2 style="color:white;" class="mt-2">Georgia in Tour</h2>
                  <a style="padding:5px;" href="{{route('render_social', ['id'=>'whatsapp'])}}" class="mr-2 ">
                       <img width="40px" style="border-radius: 70px;" src="images/w3.png">
                    </a>
                    <a style="padding:5px;" href="{{route('render_social', ['id'=>'telegram'])}}" class="mr-2 ">
                       <img width="75px" class="" style="border-radius: 70px;" src="images/tg2.png">
                    </a>
                    <a class="" style="padding:5px;" href="{{route('render_social', ['id'=>'instagram'])}}">
                       <img width="40px" style="border-radius: 70px;" src="images/in2.png">
                    </a>
               </div>

            </div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="{{route('tour_home')}}">Главная</a></li>
                  <li><a href="{{route('tour_category')}}">Туры</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_taital">Туры по Грузии с гидом-историком</h1>
                     <p class="banner_text" style="padding-top: 80px;">Открывай страну вместе с нами</p>
                     <div class="read_bt"><a href="#tour">Подробнее</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <video id="video-element" autoplay loop muted>
         <source id="video-source" src="/tour/images/head.mp4" type="video/mp4">
         Ваш браузер не поддерживает воспроизведение видео.
      </video>
   </div>
   <!-- header section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container my" >
         <h1 style="text-align: center;" class="services_taital" id="tour">Наши лучшие туры </h1>
         <div class="services_section_2" >
            <div class="row" style="justify-content:center;">
               @foreach($tour as $item)
               <div class="col-md-4 mt-4">
                  <div ><a href="{{route('tour_category_tour', $item->id)}}"><img style="height: 300px; border-top-right-radius:25px; border-top-left-radius:25px" src="{{asset('images/'.$item->image)}}" class="services_img mb-3"></a></div>
                  <div style="background-color: rgba(244, 237, 237, 0.4); border-top-left-radius: 25px; border-top-right-radius: 25px;">
                     <h1 class="text-truncate" style="padding-left: 5%; padding-bottom:20px;">{{$item->name}}</h1>
                  </div>
                  <div class="d-flex pb-3" style="border-bottom-right-radius: 25px; background-color: rgba(244, 237, 237, 0.4); border-bottom-left-radius: 25px; justify-content:space-between">
                     <div class="btn_main pl-2"><a href="{{route('tour_category_tour', $item->id)}}">О туре</a></div>
                     <div style="align-self: center;" class="mt-1 pr-4"><h2>{{$item->price != 'Цена договорная' ? $item->price : 'Цена догов...'}}</h2></div>
                  </div>
               </div>
               @endforeach
               <div class="btn_main" style="text-align: center;"><a class="mt-5" href="{{route('tour_category')}}">Все туры</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <!-- <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <div class="about_taital_main">
                  <h1 class="about_taital">Кто мы?</h1>
                  <p class="about_text">Мы - команда путешественников из разных городов России. Нас объединило одно -
                  любовь к Грузии. К захватывающей дух природе, солнечной погоде и невероятно
                  добрым людям. Мы поняли, что хотим познакомить с настоящей Грузией как можно больше ребят, которые приезжают в эту страну. И в первую очередь знакомить их через эмоции и впечатления.
                  </p>
               </div>
            </div>
            <div class="col-md-6 padding_right_0">
               <div><img src="images/about-img.png" class="about_img"></div>
            </div>
         </div>
      </div> -->
      <div class="container">
         <div class="d-flex" style="/* justify-content: center; */ max-width: ;">
            <div class="" style="width: 80%; text-align: center; margin: 0 auto;">
               <div class="" style="/* text-align: center; */ width: 100%;">
                  <h1 class="about_taital" style="font-size: 50px;">Кто мы?</h1>
                  <p class="about_text" style="font-size: 24px;">Команда, собранная из путешественников, проникнутых любовью к Грузии и ее богатому культурному наследию, готова поделиться своими знаниями и эмоциями с каждым, кто хочет по-настоящему познакомиться с этой удивительной страной. Нас объединяет желание открыть Грузию для всех желающих и рассказать о ее потрясающей природе, солнечной погоде и гостеприимных людях. Мы не просто проводим туры, мы делаем все возможное, чтобы наши гости почувствовали эмоции и впечатления, которые запомнятся надолго и заставят их вернуться в эту страну снова и снова.
                  </p>
               </div>
            </div>
            
         </div>
      </div>
   </div>

   <div class="about_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_right_0">
               <div><img src="images/c.jpg" style="border-radius: 25px;" class="about_img"></div>
            </div>
            <div class="col-md-6">
               <div class="about_taital_main">
                  <h1 class="about_taital">Наши гиды</h1>
                  <p class="about_text">Наши гиды - профессионалы своего дела, которые обладают многолетним опытом работы и являются членами гильдии гидов. Они знают все местные достопримечательности, культурные особенности и исторические тайны, и смогут рассказать о них с увлечением и убедительностью. Наши гиды - настоящие эрудиты, обладающие глубокими знаниями о Грузии и ее народе. Кроме того, они свободно разговаривают на русском, турецком, грузинском и английском языках, что позволяет нашим гостям почувствовать себя уверенно и комфортно в любой ситуации. Наши гиды - надежные друзья и проводник в увлекательном путешествии по Грузии.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- choose section start -->
   <div class="choose_section layout_padding">
      <div class="container " style="justify-content: center;">
         <h1 class="choose_taital"> Варианты туров </h1>
         <div class="d-flex row">
            <div class="col-md-6" >
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-hiking"></i> Индивидуальные </h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-users"></i> Групповые</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-horse"></i> Верховые</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-motorcycle"></i> Пешие</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-heart"></i> Венчание</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-place-of-worship"></i> Паломнические</h1>
               </div>
            </div>
            <div class="col-md-6" >
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-mountain"></i> Джипинг</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-shopping-bag"></i> Шопинг</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-motorcycle"></i> Поездки на мотоциклах</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-chalkboard-teacher"></i> Мастер классы</h1>
               </div>
               <div class="newsletter_box" style="background-color:white">
                  <h1><i class="fas fa-wine-glass-alt"></i> Винные</h1>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container" >
      <div class="row"><h1 class="mb-3 choose_taital" style="color:white"> Что входит в туры </h1></div>
      <div class="row flex-wrap mb-5" style="border-radius: 15px; border:1px solid #6e6e6e; padding:30px; background-color:white">
         <div class="col-sm ">
            <h3>Что входит в наши туры:</h3>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Опытные гиды-историки, владеющие несколькими языками </h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Собственный автопарк, который обеспечивает комфортную и безопасную поездку</h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Входные билеты</h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Завтраки и ужины (традиционные застолья)</h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Винные дегустации</h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Размещение в двухместных номерах</h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Индивидуальные маршруты по вашему выбору в течение 24 часов</h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Вино в дорогу</h5>
         </div>
         <div class="col-sm ">
            <h3>Что не входит в наши туры:</h3>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Международные перелёты</h5>
            <h5 style="border:1px solid #6e6e6e;color:black;" type="text" class="form-control mt-1">Страховка на здоровье</h5>
         </div>
      </div>
   </div>
   <!-- choose section end -->

   
   <!-- client section start -->
   <div class="client_section layout_padding">
      <div class="container">
         <h1 class="client_taital">Отзывы наших клиентов</h1>
         <div class="client_section_2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item  active">
                     <div class="row" >
                        <div class="row col-md-6" style="padding-top:0;">
                           <div class="col-md-3" style="margin-bottom: 50px;">
                              <h4 class="client_name">Константин</h4>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="col-md-6 ml-2 mb-2">
                              <img style="max-width: 160%; border-radius: 20px; height: 300px; width: 160%;" src="images/o2.jpg">
                           </div>
                        </div>
                        <div class="col-md-6 align-items-center">
                           <p class="lorem_text" style="height: 300px;">Классные ребята! Они организовали для нас отличные поездки по горам, экскурсии по историческим местам. Я рекомендую их для тех, кто хочет получить яркие впечатления в Грузии</p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item" >
                     <div class="row" >
                        <div class="row col-md-6" style="padding-top:0;">
                           <div class="col-md-3" style="margin-bottom: 50px;">
                              <h4 class="client_name">Анна</h4>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="col-md-6 ml-2 mb-2">
                              <img style="max-width: 160%; border-radius: 20px; height: 300px; width: 160%;"  src="images/o4.jpg">
                           </div>
                        </div>
                        <div class="col-md-6 align-items-center">
                           <p class="lorem_text" style="height: 300px;">Я осталась довольна туром. Мы посетили невероятно красивые места, попробовали лучшие блюда грузинской кухни и получили неоценимый опыт погружения в местную культуру. Большое спасибо georgiaintour за такие впечатления. </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item" >
                     <div class="row" >
                        <div class="row col-md-6" style="padding-top:0;">
                           <div class="col-md-3" style="margin-bottom: 50px;">
                              <h4 class="client_name">Дмитрий</h4>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="col-md-6 ml-2 mb-2">
                              <img style="max-width: 160%; border-radius: 20px; height: 300px; width: 160%;"  src="images/o5.jpg">
                           </div>
                        </div>
                        <div class="col-md-6 align-items-center">
                           <p class="lorem_text" style="height: 300px;">Лучший способ узнать настоящую Грузию. Всем рекомендую. </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- client section start -->
   @endsection
   <script src="https://kit.fontawesome.com/765d268603.js" crossorigin="anonymous"></script>