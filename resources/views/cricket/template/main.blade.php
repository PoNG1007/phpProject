<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{URL::asset('/select/dist/css/bootstrap-select.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('assets/images/mju.png')}}">
    <title>Dorm-mju</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="{{URL::asset('/assets/plugins/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{URL::asset('/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">

    <style>
        .font {
            font-family: 'Sarabun', sans-serif;
            padding: 0px;
            color: #000000;
        }

        .font2 {
            font-family: 'Sarabun', sans-serif;
            padding: 0px;
            color: #000000;
            text-align: center;
            font-size: 30px;
        }

        .font3 {
            font-family: 'Sarabun', sans-serif;
            padding: 0px;
            color: #000000;
            text-align: center;
            font-size: 25px;
        }

        .fontreport {
            font-family: 'Sarabun', sans-serif;
            padding: 0px;
            color: #000000;
            font-size: 15px;
        }

        .fontreport2 {
            font-family: 'Sarabun', sans-serif;
            padding: 0px;
            color: #ffffff;
            font-size: 15px;
        }

        .box {
            display: flex;
            justify-content: center;
        }

        .box2 {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .top {
            margin-top: 20px;
        }
    </style>
</head>

<body class="card-no-border">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">ค้นหา</button>
                    </form>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        @if(Session::has('user'))
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">

                            </li>
                        </ul>
                        @endif
                        <li>
                            <a class="waves-effect waves-dark" href="/dorm/home"><i class="fa fa-home"></i><span class="font hide-menu">หน้าแรก </span></a>
                        </li>
                        @if(Session::get('user')['admin'] == 1)
                        <li>
                            <a class=" waves-effect waves-dark" href="/dorm/user"><i class="fa fa-user"></i><span class="font hide-menu">ผู้ใช้งาน </span></a>
                        </li>
                        @endif
                        <li>
                            <a class=" waves-effect waves-dark" href="/dorm/request"><i class="fa fa-user"></i><span class="font hide-menu">จัดการชนิดแบบประเมิน </span></a>
                        </li>
                        <li>
                            <a class=" waves-effect waves-dark" href="/dorm/store"><i class="fa fa-shopping-cart"></i><span class="font hide-menu">จัดการแบบประเมิน </span></a>
                        </li>
                        <li>
                            <a class=" waves-effect waves-dark" href="/dorm/logout"><i class="fa  ti-power-off"></i><span class="font hide-menu">ออกจากระบบ </span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">

            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0 font">
                            @yield('nav1')
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><span class="font"> @yield('nav1')</span></a></li>
                            <li class="breadcrumb-item active"> @yield('nav2')</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <a class=" waves-effect waves-dark" href="/dorm/report"> <span class="font3 ">{{Session::get('user')['name'] . ' '.Session::get('user')['surname'] }}</span></a>
                        </div>
                    </div>
                </div>
                @yield('body')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">

            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{URL::asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::asset('/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{URL::asset('/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::asset('/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{URL::asset('/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{URL::asset('/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{URL::asset('/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{URL::asset('/js/custom.min.js')}}"></script>
    <!-- Calendar JavaScript -->
    <script src="{{URL::asset('/assets/plugins/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('/assets/plugins/moment/moment.js')}}"></script>
    <script src="{{URL::asset('/assets/plugins/calendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{URL::asset('/assets/plugins/calendar/dist/cal-init.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{URL::asset('/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

    <script src="{{URL::asset('/select/dist/js/bootstrap-select.js')}}"></script>

    <script src="{{URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <script>
        // $(document).ready(function() {
        //     @yield('dataTable')
        // });

        $(document).ready(function() {
            $.ajax({
                url: '/dorm/itemListElse',
                type: 'get',
                async: false,
                success: function(output) {
                    // console.log(output);
                    for (var i = 0; i < output.length; i++) {
                        let nonti = '';
                        nonti += '<a href="#">';
                        nonti += '  <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>';
                        nonti += '  <div class="mail-contnet"><h5>';
                        nonti += output[i]['name'];
                        $('#notifications').append(nonti);
                    }

                    //   Luanch Admin

                }
            });
        });
    </script>

</body>

</html>