<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-commerce</title>

{{--    <!-- Bootstrap -->
    <link href="{{asset('theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('theme/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('theme/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <script src="{{asset('theme/vendors/select2-to-tree/src/select2totree.js')}}"></script>
    <script src="{{asset('theme/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('theme/theme/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('theme/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>--}}


    <link href="{{asset('theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css" rel="stylesheet')}}">
    <link href="{{asset('theme/vendors/css/jquery.multiselect.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}"
          rel="stylesheet">
    <link href="{{asset('theme/vendors/select2-to-tree/src/select2totree.css')}}" rel="stylesheet">
    <script src="{{asset('theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('theme/vendors/js/jquery.multiselect.js')}}"></script>
    <script src="{{asset('theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/vendors/select2-to-tree/src/select2totree.js')}}"></script>
    <script src="{{asset('theme/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('theme/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('theme/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- Datatables -->
    <link href="{{asset('theme/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}"
          rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}"
          rel="stylesheet">
    <link href="{{asset('theme/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{asset('theme/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('distributor.design.header')

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Test
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="{{URL('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          

            <div class="clearfix"></div>

            <div class="row">


              

              @yield('content')

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('distributor.design.footer')
        <!-- /footer content -->
      </div>
    </div>

    {{--<!-- jQuery -->
    <script src="{{asset('theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('theme/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('theme/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('theme/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{asset('theme/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('theme/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('theme/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('theme/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('theme/build/js/custom.min.js')}}"></script>--}}


    <script src="{{asset('theme/vendors/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('theme/vendors/nprogress/nprogress.js')}}"></script>
    <script src="{{asset('theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('theme/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('theme/build/js/custom.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('theme/vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
    <script src="{{asset('theme/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('theme/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('theme/vendors/pdfmake/build/vfs_fonts.js')}}"></script>


  </body>
</html>