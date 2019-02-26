<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Add resume</title>

    <!--select2 css-->
    <link href="{{ asset('front/assets/css/select2.min.css')}}" rel="stylesheet" />  

    <!-- Styles -->
    <link href="{{ asset('front/assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/custom.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="../apple-touch-icon.html"> -->
    <link rel="icon" href="{{ asset('front/assets/img/favicon.ico')}}">

    <style type="text/css">
    span.select2.select2-container.select2-container--default {
      width: 100% !important;
    }
  </style>
  </head>

  <body class="nav-on-header smart-nav bg-alt job-listing-page">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="{{ asset('front/assets/image/Logo.png')}}" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="{{ asset('front/assets/image/Logo.png')}}" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
       @include('menu.freelancer-jobseeker')
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->
     @yield('freelancer-jobseeker-content')

    <!-- Site footer -->
    <footer class="site-footer">

    
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; {{ date('Y')}} All Rights Reserved by <!-- <a href="http://themeforest.net/user/thethemeio">TheThemeio</a> -->.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
   

</script>

    <script src="{{ asset('front/assets/js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
            allSkipBtn = $('.skip-btn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),$item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

       allSkipBtn.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),$item = $(this);
        var sel = $(this).attr('sel');
        
        
        if (!$item.hasClass('disabled')) {
            $('.'+sel).addClass('btn-primary');
            //$('.'+sel).find('a').removeClass('btn-primary');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
    </script>


    <script src="{{ asset('front/assets/js/app.min.js')}}"></script>


     <!--select2 js-->
    <script src="{{ asset('front/assets/js/select2.min.js')}}"></script>
    
  </body>

</html>