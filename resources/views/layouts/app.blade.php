<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uniform.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/matrix-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/matrix-media.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <!--Header-part-->
    <div id="header">
      <h1><a href="dashboard.html">Matrix Admin</a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-menu-->

    @include('partials.header')

    <!--close-top-Header-menu-->

    <!--sidebar-menu-->

        @include('partials.sidebar')

    <!--sidebar-menu-->


    <!--main-container-part-->

    <div id="content">
        <!--breadcrumbs-->
          <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
          </div>
        <!--End-breadcrumbs-->
        @include('flash.messages')

        @yield('content')

    </div>
    
    <!--end-main-container-part-->

    <!--Footer-part-->

    <div class="row-fluid">
      <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
    </div>

    <!--end-Footer-part--> 
    

    <!-- Scripts -->
    <script src="{{ asset('js/excanvas.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.ui.custom.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.flot.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.peity.min.js') }}"></script> 
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.js') }}"></script> 
    <!-- <script src="{{ asset('js/matrix.dashboard.js') }}"></script>  -->
    <script src="{{ asset('js/jquery.gritter.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.interface.js') }}"></script> 
    <script src="{{ asset('js/matrix.chat.js') }}"></script> 
    <script src="{{ asset('js/jquery.validate.js') }}"></script> 
    <script src="{{ asset('js/matrix.form_validation.js') }}"></script> 
    <script src="{{ asset('js/jquery.wizard.js') }}"></script> 
    <script src="{{ asset('js/jquery.uniform.js') }}"></script> 
    <script src="{{ asset('js/select2.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.popover.js') }}"></script> 
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.tables.js') }}"></script> 

    <script type="text/javascript">
      // This function is called from the pop-up menus to transfer to
      // a different page. Ignore if the value returned is a null string:
      function goPage (newURL) {

          // if url is empty, skip the menu dividers and reset the menu selection to default
          if (newURL != "") {
          
              // if url is "-", it is this page -- reset the menu:
              if (newURL == "-" ) {
                  resetMenu();            
              } 
              // else, send page to designated URL            
              else {  
                document.location.href = newURL;
              }
          }
      }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
       document.gomenu.selector.selectedIndex = 2;
    }
    </script>
</body>
</html>
