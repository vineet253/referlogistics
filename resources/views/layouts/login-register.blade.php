<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   <!-- Styles -->
    <link href="{{ asset('front/assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/custom-style.css')}}" rel="stylesheet">
           <link href="{{ asset('front/assets/css/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../apple-touch-icon.html">
    <link rel="icon" href="{{ asset('front/assets/img/favicon.ico')}}">
</head>
<body class="login-page">

    <main>

        @yield('login-register-content')

    </main>
    

   <script src="{{ asset('front/assets/js/app.min.js')}}"></script>
    <script src="{{ asset('front/assets/js/custom.js')}}"></script>
   <!--  <script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js')}}"></script> -->
   <script src="{{ asset('front/assets/js/sweetalert.min.js')}}"></script> 
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

  <script type="text/javascript">
        
        $( document ).ready(function() { 



        });
      </script>
    <script type="text/javascript">
        
        $( document ).ready(function() { 
              $('.loader').hide();
            $('button#resend-otp').click(function(){
                var email=$('#exist_mail').val();
                       var dataString ={
                            '_token':'{{csrf_token()}}',
                            'email':email,
                        }

                        
                         $.ajax({
                               type:"POST",
                               url:"{{route('resend-otp')}}",
                               data:dataString,
                                beforeSend: function() {
                                    $('.loader').show();
                                
                                }, 
                               success:function(data) {
                                $('.loader').hide();
                                if(data.status==200){
                                
                                    swal({
                                        title: "OTP RESEND",
                                       text: "We have resent the otp on your registered email address.",
                                       icon: "success",
                                       
                                      
                                    });
                                 }   
                                 
                              }  
                        

                         }); 
             });              


        });
    </script>
</body>
</html>
