<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{$configration->title}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('front-site/assets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('front-site/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-site/assets/css/bootstrap-rtl.min.css')}}">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link href="{{asset('front-site/assets/css/styles.css')}}" rel="stylesheet" />
  </head>
  <body id="page-top">
    @include('front-end.layout.nav')
    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white font-weight-bold">
              {{$configration->title}}
            </h1>
            <hr class="divider my-4" />
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 font-weight-bold mb-5">
              {{$configration->home_description}}
            </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="tel:{{$phone}}">اتصل بنا</a>
          </div>
        </div>
      </div>
    </header>
    <section class="page-section bg-primary" id="about">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0">لدينا ما تحتاجه!</h2>
            <hr class="divider light my-4" />
            <p class="text-white-50 mb-4">
              الانتقال من سكنك القديم الي الجديد فكرة رائعه - لكن هناك مشكله نقل الاثاث فهي ليست سهله اطلاقا فتحتاج الى عمال لديهم الخبره والكفائة ومعدات حديثه لتضمن وصول الاثاث وهو سليم
              <br>
              فعليك الاعتماد علينا في هذه المهمه .. نعدك بتوصيل الاثاث في اسرع واعتمد علينا.
            </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">خدماتنا</a>
          </div>
        </div>
      </div>
    </section>
    <section class="page-section" id="services">
      <div class="container">
        <h2 class="text-center mt-0">خدماتنا</h2>
        <hr class="divider my-4" />
        <div class="row">
          @foreach ($services as $service)
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <h3 class="h4 mb-2">{{$service->name}}</h3>
              <p class="text-muted mb-0">{{$service->description}}</p>
            </div>
          </div>
          @endforeach
         
         
        </div>
      </div>
    </section>
    <div id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          @foreach ($articles as $articleItem)
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url('article/'.$articleItem->id)}}">
              <img class="img-fluid" src="{{asset($articleItem->image)}}" alt="" />
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50"></div>
                <div class="project-name">{{$articleItem->title}}</div>
              </div>
            </a>
          </div>
          @endforeach
          
         
        </div>
      </div>
    </div>

    <section class="page-section bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">تواصل مع شركة الندى ونصلك اينما كنت</h2>
        <a class="btn btn-light btn-xl" href= "tel:{{$phone}}">اتصل بنا</a>
      </div>
    </section>
    
    @include('front-end.layout.footer')
</html>
