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
                <div class="logo"><a href="{{route('tour_home')}}">
                  <img style="width: 70px; border-radius:50px;" src="images/tour.jpeg">
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
      <video id="video-element" autoplay loop muted>
         <source id="video-source" src="/tour/images/head1.mp4" type="video/mp4">
         Ваш браузер не поддерживает воспроизведение видео.
      </video>
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
                  <div ><a href="{{route('tour_category_tour', $tour->id)}}"><img style="height: 300px; border-top-right-radius:25px; border-top-left-radius:25px" src="{{asset('images/'.$tour->image)}}" class="services_img mb-3"></a></div>
                  <div style="background-color: rgba(244, 237, 237, 0.4); border-top-left-radius: 25px; border-top-right-radius: 25px;">
                     <h1 class="text-truncate" style="padding-left: 5%; padding-bottom:20px;">{{$tour->name}}</h1>
                  </div>
                  <div class="d-flex pb-3" style="border-bottom-right-radius: 25px; background-color: rgba(244, 237, 237, 0.4); border-bottom-left-radius: 25px; justify-content:space-between">
                     <div class="btn_main pl-2"><a href="{{route('tour_category_tour', $tour->id)}}">О туре</a></div>
                     <div style="align-self: center;" class="mt-1 pr-4 text-truncate "><h2>{{$tour->price != 'Цена договорная' ? $tour->price : 'Цена догов...'}}</h2></div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>

   <style>
.div_footer{
    margin-top:270px
}   
.h2_fot{
    margin-top:200px
} 
/* .blog-bg-img{
   position: absolute;
   top: 3300px;
   left: 0; 
   z-index: -100;
} */
   @media (max-width: 820px) {
    .blog-bg-img {
        top: 3600px;
    }
    .h2_fot{
        font-size: 16px;
        margin-top:0px
    }
    .div_footer{
        margin-top:120px;
        font-size:10px;
    }        
    .footer_section {
        height: 600px;
    }
}
@media (max-width: 920px) {
    .blog-bg-img {
        top: 3500px;
    }
}
@media (max-width: 767px) {
    .blog-bg-img {
        top: 6100px;
    }
}
@media (max-width: 600px) {
    .blog-bg-img {
        top: 6050px;
    }
}
@media (max-width: 575px) {
    .blog-bg-img {
        top: 6000px;
    }
}
@media (max-width: 560px) {
    .blog-bg-img {
        top: 6000px;
    }
}
@media (max-width: 485px) {
    .blog-bg-img {
        top: 6000px;
    }
}
@media (max-width: 450px) {
    .blog-bg-img {
        top: 6150px;
    }
}
@media (max-width: 414px) {
    .blog-bg-img {
        top: 6150px;
    }
}
@media (max-width: 400px) {
    .blog-bg-img {
      top: 6300px;
    }
  }
@media (max-width: 380px) {
    .blog-bg-img {
      top: 6300px;
    }
  }
@media (max-width: 361px) {
    .blog-bg-img {
      top: 6450px;
    }
  }
@media (max-width: 350px) {
    .blog-bg-img {
      top: 6500px;
    }
  }
@media (max-width: 338px) {
    .blog-bg-img {
      top: 6550px;
    }
  }
@media (max-width: 326px) {
    .blog-bg-img {
      top: 6600px;
    }
  }
@media (max-width: 315px) {
    .blog-bg-img {
      top: 6650px;
    }
  }
@media (max-width: 310px) {
    .blog-bg-img {
      top: 6750px;
    }
  }
@media (max-width: 300px) {
    .blog-bg-img {
      top: 6800px;
    }
  }
@media (max-width: 297px) {
    .blog-bg-img {
      top: 6900px;
    }
  }
@media (max-width: 292px) {
    .blog-bg-img {
      top: 6950px;
    }
  }
@media (max-width: 287px) {
    .blog-bg-img {
      top: 7050px;
    }
  }
@media (max-width: 284px) {
    .blog-bg-img {
      top: 7150px;
    }
  }

</style>
   @endsection
