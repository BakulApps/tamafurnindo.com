<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{$company->company_name}} - {{$page}}</title>

    @foreach($meta as $value)
        <meta name="{{$value->name}}" content="{{$value->content}}" />
    @endforeach
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/images/'. $setting->value('setting_icon'))}}" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font.awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>
