<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>الندي لنقل الاثاث</title>
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
    <section class="page-section bg-dark" style="padding: 37px 0px !important;">
    </section>
    <section id="article" class="articles">
      <div class="articles-hdr">
        <h1 class="mt-0">
          {{$type}}
        </h1>
        <hr class="divider my-4" />
      </div>
      <div class="container-fluid">
        <div class="row articles-row card-deck">
          @foreach ($articles as $article)
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 item-col">
            <div class="card click-div">
              <a href="{{url('article/'.$article->id)}}">
                <img src="{{asset($article->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-right"><b>{{$article->title}}</b></h5>
                  <p class="card-text">
                    {{$article->description}}
                  </p>
                </div>
              </a>
            </div>
          </div>
          @endforeach
         
         
        </div>
      </div>
    </section>
    <section class="page-section" id="contact">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0">تواصل معنا</h2>
            <hr class="divider my-4" />
            <p class="text-muted mb-5">
              نحن جاهزون لتلبيه رغبه عملائنا في اسرع وقت.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0 contact-link">
            <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
            <div><a href="tel:0">+2 01012345678</a></div>
          </div>
          <div class="col-lg-4 mr-auto text-center contact-link">
            <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
            <a class="d-block" href="mailto:a@a.com">a@a.com</a>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-light py-3">
      <div class="container">
        <div class="small text-center text-muted">Copyright © 2021</div>
      </div>
    </footer>
    <button type="button" id="callPhone" class="btn floatingBtn call">
      <i class="fas fa-phone-alt"></i>
    </button>
    <a href="https://api.whatsapp.com/send?phone=+201000347725" target="_blank">
      <button type="button" class="btn floatingBtn whatspp">
        <i class="fab fa-whatsapp"></i>
      </button>
    </a>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front-site/assets/js/scripts.js')}}"></script>
  </body>
  <script>
    $("#callPhone").click(function () {
      window.location.href = "tel:+0";
    });
  </script>
</html>