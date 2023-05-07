@extends('tour.layouts.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@section('title', 'Tours')
@section('content')


<div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="{{route('tour_home')}}"><img style="width: 70px; border-radius:50px;" src="images/tour.jpeg"></a></div>
               <div class="d-block">
               <h2 style="color:white; " class="mt-2">Georgia in Tour</h2>
               <a style="padding:5px;" href="https://api.whatsapp.com/send/?phone=%2B79222160721&text=Добрый+день%21+Подскадите+по+поводу+экскурсии+в+Грузии%21&type=phone_number&app_absent=0" class="mr-2 ">
                  <img width="40px" style="border-radius: 70px;" src="images/w3.png">
               </a>
               <a style="padding:5px;" href="https://t.me/georgiaintour" class="mr-2 ">
                  <img width="75px" class="" style="border-radius: 70px;" src="images/tg2.png">
               </a>
               <a class="" style="padding:5px;" href="https://www.instagram.com/georgiain_tour/?igshid=ZDdkNTZiNTM%3D">
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
                <div class="logo"><a href="{{route('tour_home')}}">
                  <img style="width: 70px; border-radius:50px;" src="images/tour.jpeg">
                     <h2 style="color:white;" class="mt-2">Georgia in Tour</h2>
                     <a style="padding:5px;" href="https://api.whatsapp.com/send/?phone=%2B79222160721&text=Добрый+день%21+Подскадите+по+поводу+экскурсии+в+Грузии%21&type=phone_number&app_absent=0" class="mr-2 ">
                       <img width="40px" style="border-radius: 70px;" src="images/w3.png">
                    </a>
                    <a style="padding:5px;" href="https://t.me/georgiaintour" class="mr-2 ">
                       <img width="75px" class="" style="border-radius: 70px;" src="images/tg2.png">
                    </a>
                    <a class="" style="padding:5px;" href="https://www.instagram.com/georgiain_tour/?igshid=ZDdkNTZiNTM%3D">
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
   </div>
   
   <div class="services_section layout_padding">
      <div class="container">
         <!-- <h1 class="services_taital">Наши туры </h1> -->
         <div class="container">
         <form action="{{ route('tour_category') }}" method="GET">
            <div class="row no-gutters">
               <div class="col-md-2 mb-3">
                  <label for="search">Поиск:</label>
                  <input style="border-top-right-radius: 0; border-bottom-right-radius: 0;" type="text" class="form-control" id="search" name="search" value="{{ request('search') }}">
               </div>
               <div class="col-md-2 mb-3">
                  <label for="price_from">Цена от:</label>
                  <input style="border-radius:0;" type="number" name="price_from" id="price_from" class="form-control" value="{{ request('price_from') }}"  />
               </div>
               <div class="col-md-2 mb-3">
                  <label  for="price_to">Цена до:</label>
                  <input style="border-radius:0" type="number" name="price_to" id="price_to" class="form-control" value="{{ request('price_to') }}"  />
               </div>
               <div class="col-md-2 mb-3">
                  <label for="day_id">Дни:</label>
                  <select style="border-radius: 0;" name="day_id" id="day_id" class="form-select">
                     <option value="">Выберите день</option>
                     @foreach($days as $day)
                     <option value="{{$day->id}}">{{$day->name}}</option>
                     @endforeach
                  </select>
               </div>
               <div class="col-md-2 mb-3">
                  <label for="category_id">Категории:</label>
                  <select style="border-radius: 0;"  name="category_id" id="category_id" class="form-select">
                     <option value="">Выберите категорию</option>
                     @foreach($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                  </select>
               </div>
               <div class="col-md-2 mb-3">
                  <button style="border-top-left-radius: 0; border-bottom-left-radius: 0; margin-top:31px; padding-bottom: 8px; background-color:#2b2278" type="submit" class="btn btn-primary btn-block ">Поиск</button>
               </div>
            </div>
         </form>
      </div>
         <div class="services_section_2">
            <div class="row"> 
               @foreach($tours as $tour)
               <div class="col-md-4 mt-4">
                  <div ><img style="height: 300px; border-top-right-radius:25px; border-top-left-radius:25px" src="{{asset('images/'.$tour->image)}}" class="services_img mb-3"></div>
                  <div style="background-color: rgba(244, 237, 237, 0.4); border-top-left-radius: 25px; border-top-right-radius: 25px;">
                     <h1 class="text-truncate" style="padding-left: 5%; padding-bottom:20px;">{{$tour->name}}</h1>
                  </div>
                  <div class="d-flex pb-3" style="border-bottom-right-radius: 25px; background-color: rgba(244, 237, 237, 0.4); border-bottom-left-radius: 25px; justify-content:space-between">
                     <div class="btn_main pl-2"><a href="{{route('tour_category_tour', $tour->id)}}">О туре</a></div>
                     <div style="align-self: center;" class="mt-1 pr-4"><h2>{{$tour->price}}$</h2></div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>

@endsection