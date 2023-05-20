@extends('tour.layouts.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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



<div class="about_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div style="text-align: center;">
               <h1 class="about_taital">{{$tour->name}}</h1>
            </div>
            <div class="mt-2 col-md-6 padding_right_0">
               <div><img style="max-height: 375px; border-radius:5px" src="{{asset('images/'.$tour->image)}}" class="about_img"></div>
            </div>
            <div class="mt-2 col-md-6" style="">
               <div class="overflow-auto max-height" style="max-height:375px; height:375px; border:1px solid rgb(231, 227, 227); border-radius:15px; background-color: rgb(254, 251, 251);">   
                  <div  style="padding-left:5px">
                     <h3 class="about_text" style="padding-top: 0; ">Описание:</h3>
                     <p class="" style="color:black">{!! $tour->description !!}</p>
                  </div>
               </div>
            </div>
         </div>
         <div style="justify-content: space-between; width: 80%; margin: 0 auto; display: flex; margin-top: 10px;">
            <div>
               <h4>Количество дней:</h4>
               <p style="margin: 0;">{{$tour->day->name}}</p>
               <h4 class="mt-2">Вид тура</h4>
               <p style="margin: 0;">{{$tour->category->name}}</p>
               <h4 class="mt-2">Стоимость тура</h4>
               <p class="text-truncate" style="margin: 0;">{{$tour->price}}</p>
            </div>
            <div>
               <h4>Что входит в стоимость тура:</h4>
               <p style="margin: 0;">{!! $tour->descone !!}</p>
            </div>
         </div>
               <!-- <div class="container d-flex" style="justify-content: end; margin-right:200px"><h1>Связаться по турам</h1></div> -->
         
         <div style="justify-content:space-around;display:flex" >
            <div class="readmore_bt ml-3 " style="align-self: center;">
               <a class="text-truncate" href="{{route('tour_category')}}">&#60 Вернуться</a>
            </div>
            <div class="d-block" style="text-align: center;">
               <h1 class="text-truncate">Связаться по турам</h1>
               <div class=" ml-3 d-flex" >
                  <a style="padding:5px; margin-top: 5px;" href="{{route('render_social', ['id'=>'whatsapp'])}}" class="mr-2 ">
                     <img width="45px" src="images/ww1.png">
                  </a>
                  <a style="padding:5px; margin-top: 4px;"" href="{{route('render_social', ['id'=>'telegram'])}}" class="mr-2 ">
                     <img width="50px" class="" src="images/tt1.png">
                  </a>
                  <a class="" style="padding:5px;" href="{{route('render_social', ['id'=>'instagram'])}}">
                     <img width="55px" src="images/ii1.png">
                  </a>
               </div>
         </div>
      </div>
      </div>
      <div class="container" style=" text-align: center; margin-top: 100px;margin-bottom:30px">
         
      <h1>Интересные факты о туре:</h1>
            <div class="mt-2" style="text-align: start;">
               <div class="overflow-auto max-height" style="max-height:375px; height:375px; border:1px solid rgb(231, 227, 227); border-radius:15px; background-color: rgb(254, 251, 251);">   
                  <div  style="padding-left:5px">
                     <h3 class="about_text" style="padding-top: 0; ">Достопримечательности тура:</h3>
                     <p class="" style="color:black">{!! $tour->desctwo !!}</p>
                  </div>
               </div>
            </div>


         @if($tour->photos->count() > 0)
            <h1 class="mt-5">Фото с туров</h1>
         @endif
         <div class="row ">
         @foreach($tour->photos as $photo)
               <div class="col-md-3  mt-3">
                  <img  src="{{asset('images/'.$photo->photo)}}" style="height: 200px; width:300px; border-radius:10px" alt="">
                  <h3>{{$photo->name}}</h3>
         </div>
            @endforeach
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