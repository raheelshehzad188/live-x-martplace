<?php
use App\Models\Admins\Pages;
use App\Models\Admins\Setting;
$Site= Setting::where(['id'=>'1'])->first();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->

   @if(isset($meta) && $meta)

    @if(Session::has('title'))
    <title>{{$meta->title}} | {{$Site->site_title}}</title>
    @else
      <title>{{ Session::get('title')}}</title>
      @endif
    
    

    <meta name="title" content="{{ $meta->title }}" />
    <meta name="description" content="{{ $meta->description }}" />
    <meta name="keywords" content="{{ $meta->keywords }}" />
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    <meta name="bingbot" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    <link rel="canonical" href="" />
    <link rel="alternate" type="application/rss+xml" href="{{ url('/'); }}/sitemap.xml" />
    @if(isset($meta->scheme1))
    <script type="application/ld+json">
    {{$meta->scheme1}}
    </script>
    @endif
    @if(isset($meta->scheme))
    <script type="application/ld+json">
    @json($meta->scheme);
    </script>
    @endif
    

@elseif(isset($tags))

    <title>{{ $tags }}</title>
    <meta name="title" content="{{ $tags }}" />
    <meta name="description" content="{{ $tags }}" />
    <meta name="keywords" content="{{ $tags }}" />
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    <meta name="bingbot" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    <link rel="canonical" href="{{ url('/tags/').$slug; }}" />
    <link rel="alternate" type="application/rss+xml" href="{{ url('/'); }}/sitemap.xml" />


@else
@if(Session::has('title'))
    <title>{{Session::get('title')}} | {{$Site->site_title}}</title>
    @else
      <title>{{$Site->site_title}}</title>
      @endif
@endif

    <?php $Settings = Setting::where(['id'=>'1'])->get(); ?>
    @foreach($Settings as $Setting)
    <!--<link rel="icon" type="image/x-icon" href="{{asset('')}}/images/favicon.png">-->
    <link rel="shortcut icon" href="{{asset('')}}{{$Setting->logo1}}" type="image/x-icon"/ >
    @endforeach
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- BEGIN: Page CSS-->
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('')}}front/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('')}}front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('')}}front/css/style.css" rel="stylesheet">


</head> 

<body>

   
   <!-- BEGIN: Header-->
        <!-- END: Header-->
   @include('includes.front.header3')

        <!-- BEGIN: Content-->
        @yield('content')
        <!-- BEGIN: End content-->

        <!-- Footer Area -->
        {{ view('front.footer1') }}
        <!-- End Footer Area -->

   <!-- Back to Top -->
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset('')}}front/lib/easing/easing.min.js"></script>
   <script src="{{asset('')}}front/lib/slick/slick.min.js"></script>


   <!-- Template Javascript -->
   <script src="{{asset('')}}front/js/main.js"></script>
</body>
</html>

</body>
</html>
