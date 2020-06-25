<html>
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="description" content>
        <meta name="author" content>
        <title>
            My profile | CIBLE
        </title>
        <link rel="stylesheet" href="fontawesome-free-5.13.0-web\css\all.min.css">
        <link rel="stylesheet" href="css/sb-admin-2.min.css">
        <link rel="stylesheet" href="{{asset('bootstrap-4.5.0-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css\style.css')}}">
    </head>
    <body id="page-top">
        {{-- Page Wrapper --}}
        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ff6600; color:#ff6600;">
                {{-- sidebar - brand --}}
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-win"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3" style="font-size: 20px;">
                        CIBLE
                    </div>
                </a>
                {{-- Divider --}}
                <hr class="sidebar-divider my-0">
                {{-- nav item - dashboard --}}
                <li class="nav-item">
                    <h4 id="ejs_heure" class="text-gray-300" style="font-weight:bold; text-align: center;">
                        12:30:10
                    </h4>
                </li>
                <hr class="sidebar-divider my-0">
                {{-- nav item - dashboard --}}
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-tachometer-alt">
                            ::before
                        </i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- Divider --}}
                <hr class="sidebar-divider">
                {{-- Heading --}}
                <div class="sidebar-heading">
                    Interface
                </div>
                <li>
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-trophy">
                            ::before
                        </i>
                        <span>Days challenge</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-pencil-alt">
                            ::before
                        </i>
                        <span>Days report</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-file">
                            ::before
                        </i>
                        <span>Send files</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-align-justify">
                            ::before
                        </i>
                        <span>Views all reports</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-question">
                            ::before
                        </i>
                        <span>Unreported reports</span>
                    </a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
                {{-- Sidebar Toggler(Sidebar) --}}
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="" onclick="hide()">
                        ::after
                    </button>
                </div>
                <div id="info" style="position: absolute; bottom:0px; text-align:center;left:25px;color:gray;">
                    <div class="d-none d-md-inline">
                        <span style="font-size: 20px; font-weight: bold;">Need help ?</span>
                        <br>
                        <span>Tel: +228 91 01 59 80</span>
                        <br>
                        <span>Email: dev@kp10is.com</span>
                    </div>
                </div>
            </ul>
            <script type="text/javascript">
                function hide()
                {
                    {
                        var x = document.getElementById("info");
                        if (x.style.display == "none")
                        {
                            x.style.display = "block";
                        }
                        else
                        {
                            x.style.display="none";
                        }
                    }
                }
            </script>
            <script language="javascript">
                    function HeureCheckEJS()
                    {
                        Krucial = new Date;
                        heure = Krucial.getHours()
                        min = Krucial.getMinutes()
                        sec = Krucial.getSecondes()
                        jour = Krucial.getDate()
                        mois = Krucial.getMonth()+1;
                        annee = Krucial.getFullYear();
                        if(sec<10)
                        sec0= "0";
                        else
                        sec0= "";
                        if(min<10)
                        min0= "0";
                        else
                        min0= "";
                        if(heure<10)
                        heure0= "0";
                        else
                        heure0= "";
                        DinaHeure = heure0 + heure + ":"+min0+min+":"+sec0+sec;
                        which = DinaHeure
                        if(document.getElementById)
                        {
                            document.getElementById(ejs_heure).innerHTML=which;
                        }
                        setTimeout("HeureCheckEJS",1000)
                    }
                    window.onload= HeureCheckEJS;
            </script>
            {{-- End of Sidebar --}}
            {{-- Content Wrapper --}}
            <div id="content-wrapper" class="d-flex flex-colum">
                {{-- Main Content --}}
                <div id="content">
                    {{-- Topbar --}}
                    <style type="text/css">
                        .time
                        {
                            text-align: center;
                            po
                            sition: fixed;
                        }
                        .box select
                        {
                            background-color: #003366;
                            color: white;
                            padding: 4px;
                            border: none;
                            font-size: 14px;
                            box-shadow: 0 5px 25px rgba(0,0,0,0.2);
                            -webkit-appearance:button;
                            appearance:button;
                            outline: none;
                            margin-right: 12px;

                        }

                        .box:hover::before
                        {
                            color:rgba(255, 255, 255, 0.6);
                            background-color: rgba(255, 255, 255, 0.2)
                            
                        }
                    </style>
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <i class="fas fa-use fa-2x text-gray-000"></i>
                        <div id="time" class="timer" style="color: red;font-weight: bold; font-size:10px;align-content:center;">
                        Todays challenge submission exceeded.
                        </div>
                        <div class="d-none d-md-block" style="color: #4e73df; font-weight: bold; font-size:24px; margin: auto; text-align:center;">
                            The taste of a well done job!
                        </div>
                        {{-- Topbar navbar --}}
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                {{-- Dropdown Messages --}}
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search" action="">
                                        <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm">
                                                        </i>
                                                    </button>
                                                </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            {{-- Nav Item - User Information --}}
                            <li class="nav-item dropdown no-arrow" style="background-color: #003366">
                                <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-white small">GUMEDZOE Elda</span>
                                    <i class="fa fa-angle-down" aria-hidden="true">::before</i>
                                </a>
                                {{-- Dropdown - User Information --}}
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="">
                                        <i class="fas fa-user fa-fw mr-2 text-gray-400"></i>
                                        "
                                                My profile      "
                                    </a>
                                    <a class="dropdown-item" href="">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        "
                                                Change password      "
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        "
                                                Logout      "
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <script type="text/Javascript">
                    var display = document.getElementById('time');
                    setInterval(function() => {
                        var date = new Date();
                        var currenthours = date.getHours();
                        var hours;
                        var minutes;
                        var secondes;
                        if(currenthours!=9 && currenthours<9)
                        {
                            hours=8 - currenthours;
                            minutes = 60 - date.getMinutes();
                            secondes = 60 - date.getSeconds();
                            display.innerHTML = hours + 'H ' + minutes + 'Min '+secondes + 'Sec';
                        }
                        else display.innerHTML = 'Today\s challenge submission deadline exceeded.';
                    }, 1000);
                    </script>
                    {{-- End of Topbar --}}
                    {{-- Begin Page Content --}}
                    <div class="container-fluid">
                        {{-- Page Heading --}}
                        <h1 class="h3 mb-4 text-gray-800">My profile</h1>
                        <p style="font-size: 18px; color:green; font-weight:bold;" class="align"></p>
                        <form action="" class="user" method="">
                            <div class="row">
                                <div class="col-4 mb-3">First name</div>
                                <div class="col-8 mb-3">
                                    <input type="text" class="form-control-user" id="Firstname" aria-describedby="emailHelp" required="true" value="GUMEDZOE">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Last name</div>
                                <div class="col-8 mb-3">
                                    <input type="text" class="form-control form-control-user" name="Lastname" id="Lastname" aria-describedby="emailHelp" required="true" value="Elda">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Emp. Reg. Number</div>
                                <div class="col-8 mb-3">
                                    <input type="text" class="form-control form-control-user" name="Lastname" id="" aria-describedby="emailHelp" required="true" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Sup. Reg. Number</div>
                                <div class="col-8 mb-3">
                                    <input type="text" class="form-control form-control-user" name="Lastname" id="" aria-describedby="emailHelp" required="true" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Vocation</div>
                                <div class="col-8 mb-3">
                                    <input type="text" class="form-control form-control-user" name="Lastname" id="" aria-describedby="emailHelp" required="true" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Residence</div>
                                <div class="col-8 mb-3">
                                    <input type="text" class="form-control form-control-user" name="Lastname" id="" aria-describedby="emailHelp" required="true" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Contact</div>
                                <div class="col-8 mb-3">
                                    <input type="email" class="form-control form-control-user" name="Lastname" id="" aria-describedby="emailHelp" required="true" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Email</div>
                                <div class="col-8 mb-3">
                                    <input type="text" class="form-control form-control-user" name="Lastname" id="" aria-describedby="emailHelp" required="true" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-3">Date</div>
                                <div class="col-8 mb-3">
                                    <input type="date" class="form-control form-control-user" name="Lastname" id="" aria-describedby="emailHelp" required="true" value="">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 4%">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <input type="submit" name="submit" value="" class="btn btn-primary btn-user btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- container-fluid --}}
                </div>
                {{-- End of Main Content --}}
                {{-- Footer --}}
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>@ 2020-2021 Copyright, KP10 IS</span>
                        </div>
                    </div>
                </footer>
                {{-- End of Footer --}}
            </div>
            {{-- End Content Wrapper --}}
        </div>
        {{-- End Page Wrapper --}}
        {{-- Scroll to Top Button --}}
        <a href="" class="scroll-to-top rounded">
            <i class="fas fa-angle-up"></i>
        </a>
        <script src="{{asset('jquery\jquery.js')}}" integrity=""></script>
        <script src="{{asset('bootstrap-4.5.0-dist\js\bootstrap.min.js')}}" integrity=""></script>
        <script src="vendor\jquery\jquery.min.js"></script>
        <script src="vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
        <script src="vendor\jquery-easing\jquery.easing.min.js"></script>
        <script src="js/sb-admin-2.min.js"></script>
        <script type="text/javascript">
            $(".jDate").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            }).datepicker("update", "24/06/2016");
        </script>
    </body>
</html>