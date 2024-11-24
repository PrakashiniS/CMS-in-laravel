

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>CMS</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="dist/css/style.min.css" rel="stylesheet">

    <!-- CSS Alertify-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
    <!-- Bootstrap theme alertify-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        .table-container {
            -ms-overflow-style: none;
        }

        .table-container {
            overflow: auto;
            width: 100%;
            height: 100%;

        }

        .fixed-size-table {
            width: 100%;
            table-layout: fixed;
        }

        .fixed-size-table th,
        .fixed-size-table td {
            width: 120px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .nav-tabs .nav-link {
            color: #0033cc;
        }

        .nav-tabs .nav-link.active {
            background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);
            color: white;
        }

        .modal-content {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            border-radius: 15px 15px 0px 0px;
        }

        .modal-header .close {
            font-size: 1.5rem;
            color: white;
            opacity: 1;
            transition: transform 0.3s ease;
        }

        .modal-header .close:hover {
            transform: rotate(90deg);
            color: #ff8080;
        }
    </style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
   
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="https://www.mkce.ac.in">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10" style="padding-left:0px; border-left:0px;">
                            <img src="assets/images/logo-icon.png" width="50px" alt="homepage" class="light-logo" />

                        </b>

                        <span class="logo-text">

                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="facinfra.php" aria-expanded="false"><i class="mdi mdi-comment-text"></i><span class="hide-menu">Faculty Coordinator</span></a>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Feedback Approval</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Feedback Corner</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="zmdi-format-valign-top">
                                <div class="card-body">
                                    <h4 class="card-title">Complaint Details</h4>
                                    <div class="card">
                                        <ul class="nav nav-tabs mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab" href="#dashboard"
                                                    role="tab" aria-selected="true"><span class="hidden-sm-up"></span>
                                                    <span class="hidden-xs-down"><i
                                                            class="mdi mdi-view-grid"></i><b>&nbsp; Dashboard</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#pending"
                                                    role="tab" aria-selected="false"><span class="hidden-sm-up"></span>
                                                    <div id="navref1">
                                                    <span class="hidden-xs-down"><i
                                                            class="fas fa-clock"></i><b>&nbsp; Pending({{$pending}})</b></span></div></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#approved" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span>
                                                    <div id="navref2"> <span
                                                        class="hidden-xs-down"><i
                                                            class="fas fa-check"></i><b>&nbsp; Approved({{$workinprog}})  </b></span></div></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#completed" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span><div id="navref3"> <span
                                                        class="hidden-xs-down"><i
                                                            class="mdi mdi-check-all"></i><b>&nbsp; Completed({{$completed}})</b></span></div></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#rejected" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span><div id="navref4"> <span
                                                        class="hidden-xs-down"><i
                                                            class="mdi mdi-close-circle"></i><b>&nbsp Rejected({{$rejected}})</b></span></div></a>
                                            </li>
                                        </ul>
                                        <!-------------------------dashboard------------------------------>
                                        <div class="tab-content tabcontent-border">
                                            <div class="tab-pane p-20 active show" id="dashboard" role="tabpanel">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <!-- <div class="card-header"> -->
                                                        <h4 class="card-title m-b-0"><b></b></h4><br>

                                                        <br>
                                                        <div class="row">
                                                            <!-- Pending -->
                                                            <div class="col-12 col-md-3" style="margin-bottom: 40px">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color:orange;">
                                                                                <i class="fas fa-clock"></i>
                                                                                <h1 class="font-light text-white">
                                                                                {{$pending}}
                                                                                </h1>
                                                                                </h1>
                                                                                <small class="font-light">Pending</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Faculty infra Pending -->
                                                            <div class="col-12 col-md-3">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color:red;">
                                                                                <i class="fas fa-exclamation"></i>
                                                                                <h1 class="font-light text-white">
                                                                                    {{$facinfra}}
    </h1>
                                                                                <small class="font-light">Faculty Incharge Pending</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Approved -->
                                                            <div class="col-12 col-md-3">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color:rgb(14, 86, 239);">
                                                                                <i class="fas fa-check"></i>
                                                                                <h1 class="font-light text-white">
                                                                                   {{$workinprog}}
                                                                                </h1>
                                                                                <small class="font-light">Approved</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Completed -->
                                                            <div class="col-12 col-md-3">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color:rgb(70, 160, 70);">
                                                                                <i class="mdi mdi-check-all"></i>
                                                                                <h1 class="font-light text-white">
                                                                                   {{$completed}}
                                                                                </h1>
                                                                                <small class="font-light">Completed</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-------------------------pending tab---------------------------->
                                            <div class="tab-pane p-20" id="pending" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="table-container">
                                                                    <table id="myTable1" class="table table-bordered table-striped fixed-size-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="pending status text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                    <b>S.No</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                    <b>Date Registered</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                    <b>Faculty Name</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Problem Description</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Image</b>
                                                                                </th>

                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Action</b>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @php $serial=1; @endphp
                                                                           @foreach($pend as $p)
                                                                                <tr>
                                                                                    <td class="text-center">
                                                                                      {{$serial++}}
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                        {{$p->date_of_reg}} 
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                class="btn btn-link faculty btndisplay" id="facultyinfo"
                                                                                                data-toggle="modal" value="{{$p->id}}"
                                                                                                data-target="" style="text-decoration:none;">
                                                                                                {{$p->faculty_name}}
                                                                                            </button>
                                                                                           
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                data-problemid
                                                                                                class="btn btndesc btndes" id="seeproblem"
                                                                                                data-toggle="modal"
                                                                                                data-target="#probdesc" value="{{$p->id}}">
                                                                                                <i class="fas fa-solid fa-eye" style="font-size: 20px;"></i>
                                                                                             
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                class="btn showImage"
                                                                                               data-task-id='{{$p->id}}'
                                                                                                data-toggle="modal"
                                                                                                data-target="#imageModal1" value="{{$p->id}}"
                                                                                                >
                                                                                                <i class="fas fa-image" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>

                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                               
                                                                                                id="detail_id" value="{{$p->id}}"
                                                                                                class="btn btn-success btnapprovefac ">
                                                                                                <i class="fas fa-check"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                              
                                                                                                class="btn btn-danger btnrejectfac"
                                                                                                data-toggle="modal" data-id="{{$p->id}}"
                                                                                                data-target="#rejectmodal">
                                                                                                <i class="fas fa-times"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                               
                                                                                </tr>
                                                                                @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--------------approved tab-------------------->
                                            <div class="tab-pane p-20" id="approved" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="table-container">
                                                                    <table id="myTable2" class="table table-bordered table-striped fixed-size-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="pending status text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                    <b>S.No</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                    <b>Date Registered</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                    <b>Faculty Name</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Problem Description</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Image</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Status</b>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        </thead>
                                                                        <tbody>
                                                                            @php $ap=1; @endphp
                                                                           @foreach($app as $a)
                                                                                <tr>
                                                                                    <td class="text-center">
                                                                                       {{$ap++}}
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                          {{$a->date_of_reg}}
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                class="btn btn-link faculty btndisplay" id="facultyinfo"
                                                                                                data-toggle="modal" value="{{$a->id}}"
                                                                                                data-target="#facultymodal" style="text-decoration:none;"> {{$a->faculty_name}}</button>
                                                                                               
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                              
                                                                                                class="btn btndesc btndes" value="{{$a->id}}"
                                                                                                data-toggle="modal" id="seeproblem"
                                                                                                data-target="#probdesc">
                                                                                                <i class="fas fa-solid fa-eye" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                class="btn showImage"
                                                                                              data-task-id='{{$a->id}}'
                                                                                                data-toggle="modal"
                                                                                                data-target="#imageModal1" value="{{$a->id}}"
                                                                                              >
                                                                                                <i class="fas fa-image" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>

                                                                                    <td>
                                                                                        <center>
                                                                                          
                                                                                            <button type="button" class="btn btn-secondary" >
                                                                                            @if ($a->status == 1)
                                                                                            Pending
                                                                                            @elseif ($a->status == 2)
                                                                                            Approved by infra
                                                                                            @elseif ($a->status == 3)
                                                                                            Rejected by infra
                                                                                            @elseif ($a->status == 4)
                                                                                            Forwarded to Manager
                                                                                            @elseif ($a->status == 6)
                                                                                            Sent to principal for approval
                                                                                            @elseif ($a->status == 7)
                                                                                            Assigned to worker
                                                                                            @elseif ($a->status == 10)
                                                                                            Work in progress
                                                                                            @elseif ($a->status == 11)
                                                                                            Waiting for approval
                                                                                            @elseif ($a->status == 13)
                                                                                            Sent to infra for completion
                                                                                            @elseif ($a->status == 14)
                                                                                            Waiting to be Reassigned
                                                                                            @elseif ($a->status == 15)
                                                                                            Work is Reassigned
                                                                                            @elseif ($a->status == 17)
                                                                                            Work in Progress
                                                                                            @elseif ($a->status == 18)
                                                                                            Waiting for Approval
                                                                                            @else
                                                                                            Unknown status
                                                                                            @endif
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                           
                                                                            @endforeach
                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-----------completed tab----------->
                                            <div class="tab-pane p-20" id="completed" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="table-container">
                                                                    <table id="myTable3" class="table table-bordered table-striped fixed-size-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="pending status text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                    <b>S.No</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                    <b>Date Registered</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                    <b>Faculty Name</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Problem Description</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Before Image</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>After Image</b>
                                                                                </th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                           @php $comp=1; @endphp
                                                                           @foreach($com as $c)
                                                                                <tr>
                                                                                    <td class="text-center">
                                                                                       {{$comp++}}
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                          {{$c->date_of_reg}}
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                class="btn btn-link faculty btndisplay" id="facultyinfo"
                                                                                                data-toggle="modal" value="{{$c->id}}"
                                                                                                data-target="#facultymodal" style="text-decoration:none;">{{$c->faculty_name}}</button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                
                                                                                                class="btn btndesc btndes"
                                                                                                data-toggle="modal" id="seeproblem"  value="{{$c->id}}"
                                                                                                data-target="#probdesc">
                                                                                                <i class="fas fa-solid fa-eye" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                class="btn showImage"
                                                                                               data-task-id='{{$c->id}}'
                                                                                                data-toggle="modal"
                                                                                                data-target="#imageModal1" value="{{$c->id}}"
                                                                                             >
                                                                                                <i class="fas fa-image" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                               data-imgs-id='{{$c->id}}'
                                                                                                class="btn viewafterimgcomp"
                                                                                                data-toggle="modal"
                                                                                                data-target="#aftercomp" value="{{$c->id}}"
                                                                                              >
                                                                                                <i class="fas fa-image" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>

                                                                                </tr>
                                                                           @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!----------rejected tab------->
                                            <div class="tab-pane p-20" id="rejected" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="table-container">
                                                                    <table id="myTable4" class="table table-bordered table-striped fixed-size-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="pending status text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                    <b>S.No</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                    <b>Date Registered</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                    <b>Faculty Name</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Problem Description</b>
                                                                                </th>
                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Image</b>
                                                                                </th>

                                                                                <th class="text-center"
                                                                                    style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                    <b>Status</b>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                           @php $reje=1; @endphp
                                                                           @foreach($rej as $r)
                                                                                <tr>
                                                                                    <td class="text-center">
                                                                                          {{$reje++}}       
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                          {{$r->date_of_reg}}
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                class="btn btn-link faculty btndisplay" id="facultyinfo"
                                                                                                data-toggle="modal" value="{{$r->id}}"
                                                                                                data-target="#facultymodal" style="text-decoration:none;">{{$r->faculty_name}}</button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                               
                                                                                                class="btn btndesc btndes"
                                                                                                data-toggle="modal" id="seeproblem"  value="{{$r->id}}"
                                                                                                data-target="#probdesc">
                                                                                                <i class="fas fa-solid fa-eye" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button"
                                                                                                 data-task-id='{{$r->id}}'
                                                                                                class="btn showImage"
                                                                                                data-toggle="modal"
                                                                                                data-target="#imageModal1" value="{{$r->id}}"
                                                                                                >
                                                                                                <i class="fas fa-image" style="font-size: 20px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <button type="button" class="btn btn-danger btnrejfeed " data-toggle="modal"
                                                                                                data-target="#problemrejected" id="rejectedfeedback" value="{{$r->id}}">
                                                                                                <i class="fas fa-solid fa-comment" style="font-size: 20px; width:40px;"></i>
                                                                                            </button>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                           @endforeach
                                                                        </tbody>
                                                                    </table>
    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center">
            <b>
                2024 © M.Kumarasamy College of Engineering All Rights Reserved.<br>
                Developed and Maintained by Technology Innovation Hub.
            </b>
        </footer>
    </div>

    <!------------Rejected Feedback modal----->
    <div class="modal fade" id="rejectmodal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"
                    style="background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Reason for rejection</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="rejectdetails">
                    <div class="modal-body" style="font-size:larger;">
                        <textarea class="form-control"
                            placeholder="Enter Reason"
                            name="rejfeedfac"
                            style="width:460px;height: 180px; resize:none" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--faculty info modal-->
    <div class="modal fade" id="facultymodal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"
                    style="background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                    <h5 class="modal-title" id="exampleModalLabel">Faculty Information</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 15px; font-size: 1.1em; color: #333; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    <ol class="list-group list-group-numbered" style="margin-bottom: 0;">
                      
                        <li class="list-group-item d-flex justify-content-between align-items-start" style="padding: 10px; background-color: #fff;">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="font-size: 1.2em; font-weight: 600; color: #007bff;">Faculty Name</div>
                                <b><span id="faculty_name" style="color: #555;"></span></b>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start" style="padding: 10px; background-color: #fff;">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="font-size: 1.2em; font-weight: 600; color: #007bff;">Mobile Number</div>
                                <b><span id="faculty_contact" style="color: #555;"></span></b>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start" style="padding: 10px; background-color: #fff;">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="font-size: 1.2em; font-weight: 600; color: #007bff;">E-mail</div>
                                <b><span id="faculty_mail" style="color: #555;"></span></b>
                            </div>
                        </li>
                       
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!---view problem description modal-->
    <div class="modal fade" id="probdesc" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Problem Description</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addnewdetails">
                    <div class="modal-body" style="padding: 15px; font-size: 1.1em; color: #333; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        <ol class="list-group list-group-numbered" style="margin-bottom: 0;">
                            <li class="list-group-item d-flex justify-content-between align-items-start" style="padding: 10px; background-color: #fff;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold" style="font-size: 1.2em; font-weight: 600; color: #007bff;">Type of Problem</div>
                                    <b><span id="type_of_problem" style="color: #555;"></span></b>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start" style="padding: 10px; background-color: #fff;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold" style="font-size: 1.2em; font-weight: 600; color: #007bff;">Block</div>
                                    <b><span id="block_venue" style="color: #555;"></span></b>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start" style="padding: 10px; background-color: #fff;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold" style="font-size: 1.2em; font-weight: 600; color: #007bff;">Venue Name</div>
                                    <b><span id="venue_name" style="color: #555;"></span></b>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start" style="padding: 10px; background-color: #fff;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold" style="font-size: 1.2em; font-weight: 600; color: #007bff;">Problem Description</div>
                                    <b><span id="problem_description" style="color: #555;padding-top:5px;"></span></b>
                                </div>
                            </li>
                        </ol>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal-->
    <div id="imageModal1" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                    <h5 class="modal-title">View Image</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Image Preview" style="max-width: 100%; display: none;" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-----------After Image Modal------------>
    <div id="aftercomp" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                    <h5 class="modal-title">View Image</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="afterimgcomp" src="" alt="Image Preview" style="max-width: 100%; display: none;" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!------------Rejected Reason modal-------------->
    <div class="modal fade" id="problemrejected" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                    <h5 class="modal-title" id="exampleModalLabel">Reason for Rejection</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addnewdetails">
                    <div class="modal-body" style="font-size:larger;">
                        <textarea type="text" id="pdrej2" value="" style="width:460px;height: 180px; resize: none;" disabled>
                        </textarea>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <!-- All Jquery -->
        <!-- ============================================================== -->
        <!-- jQuery -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>

        <!-- Datatables -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>

        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Other Scripts -->
        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
        <script src="dist/js/waves.js"></script>
        <script src="dist/js/sidebarmenu.js"></script>
        <script src="dist/js/custom.min.js"></script>

        <!-- Popper.js for Bootstrap 4 -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>

        <!-- JavaScript Sweetalert-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- JavaScript Alertify-->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

        <!--Download as XL-Sheet-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>


    <script>

$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Tool Tip
        $(function() {
            // Initialize the tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // You can also set options manually if needed
            $('.btnrejectfac').tooltip({
                placement: 'top',
                title: 'Reject'
            });
        });

        $(function() {
            // Initialize the tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // You can also set options manually if needed
            $('.btnrejfeed').tooltip({
                placement: 'top',
                title: 'Rejected Reason'
            });
        });

        $(function() {
            // Initialize the tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // You can also set options manually if needed
            $('.btndesc').tooltip({
                placement: 'top',
                title: 'Problem Description'
            });
        });

        $(function() {
            // Initialize the tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // You can also set options manually if needed
            $('.viewafterimgcomp').tooltip({
                placement: 'top',
                title: 'After Image'
            });
        });

        $(function() {
            // Initialize the tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // You can also set options manually if needed
            $('.btnapprovefac').tooltip({
                placement: 'top',
                title: 'Accept'
            });
        });

        $(function() {
            // Initialize the tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // You can also set options manually if needed
            $('.showImage').tooltip({
                placement: 'top',
                title: 'Before Image'
            });
        });

        alertify.set('notifier', 'position', 'top-right');
        $(document).ready(function() {
            $('#myTable1').DataTable();
            $('#myTable2').DataTable();
            $('#myTable3').DataTable();
            $('#myTable4').DataTable();
        });

        //Reject Button with Feedback
      
        $('#rejectdetails').on('submit', function (e) {
        e.preventDefault();

        if (confirm('Are you sure you want to reject this complaint?')) {
            var formdata1 = new FormData(this);
            var reject_idfac = $('.btnrejectfac').data('id');
            console.log(reject_idfac);


        $.ajax({
            type: "POST",
            url: `reje/rejs/${reject_idfac}`,
            data: formdata1,
            processData: false,
            contentType: false,
            success:function (response) {
                if (response.status === 200) {
                    $('#rejectmodal').modal('hide');
                    $('#rejectdetails')[0].reset();
                    // Reload tables and DataTable
                    $('#myTable1').load(location.href + " #myTable1", function () {
                        $('#myTable1').DataTable();
                    });
                    $('#myTable4').load(location.href + " #myTable4", function () {
                        $('#myTable4').DataTable();
                    });
                    $('#navref1').load(location.href + " #navref1");
                    $('#navref4').load(location.href + " #navref4");
                } else if (response.status === 500) {
                    alertify.error('Complaint Rejected!');
                    $('#rejectmodal').modal('hide');
                    $('#rejectdetails')[0].reset();
                    alert("Something went wrong. Try again.");
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX error:", error);
                alert("An error occurred: " + error);
            }
        });
    }
});

        //approve button
        $(document).on('click', '.btnapprovefac', function(e) {
            e.preventDefault();

            var approveidfac = $(this).val();

            alertify.confirm('Confirmation', 'Are you sure you want to approve this complaint?',
                function() {
                    $.ajax({
                        type: "POST",
                        url: `appr/apps/${approveidfac}`,
                      
                        success: function(response) {
                          
                            if (response.status == 500) {
                                alertify.error(response.message);
                            } else {
                                alertify.success('Complaint Approved successfully!');
                                $('#myTable1').DataTable().destroy();
                                $('#myTable2').DataTable().destroy();
                                $('#myTable3').DataTable().destroy();
                                $("#myTable1").load(location.href + " #myTable1 > *", function() {
                                $('#myTable1').DataTable();});
                                $("#myTable2").load(location.href + " #myTable2 > *", function() {
                                $('#myTable2').DataTable();});
                                $("#myTable3").load(location.href + " #myTable3 > *", function() {
                                $('#myTable3').DataTable();});
                           
                            }
                        }
                    });
                },
                function() {
                    alertify.error('Approval canceled');
                });
        });

        // problem description
        $(document).on('click', '.btndes', function(e) {
            e.preventDefault();
            var user_id = $(this).val();
        
            $.ajax({
                type: "GET",
                url: `prob/des/${user_id}`,
               
                success: function(response) {
                 
                    if (response.status == 500) {
                        alert(response.message);
                    } else {
                        $("#id").val(response.data.id);
                        $("#type_of_problem").text(response.data.type_of_problem);
                        $("#block_venue").text(response.data.block_venue);
                        $("#venue_name").text(response.data.venue_name);
                        $('#problem_description').text(response.data.problem_description);
                        $('#probdesc').modal('show');
                    }
                }
            });
        });

        // faculty info
        $(document).on('click', '.btndisplay', function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: `/pend/pends/${user_id}`,
                success: function(response) {
                  
                                      if (response.status == 500) {
                        alert(response.message);
                    } else {
                        $("#id").val(response.data.id);
                        $("#faculty_name").text(response.data.faculty_name);
                        $("#faculty_mail").text(response.data.faculty_mail);
                        $("#faculty_contact").text(response.data.faculty_contact);
                        $('#facultymodal').modal('show');
                    }
                }
            });
        });

        //Image Modal Ajax
        $(document).on('click', '.showImage', function() {
            var task_id = $(this).data('task-id');
            $('#task_id').val(task_id);

            $.ajax({
                type: "GET",
                url: `imgs/image/${task_id}`,
              
                success: function(response) {
                    if (response.status == 200) {
                        $('#modalImage').attr('src',"uploads/"+ response.data.images).show();
                    } else {
                        $('#modalImage').hide();
                        alert(response.message);
                    }
                    $('#imageModal1').modal('show');
                },
                error: function(xhr, status, error) {
                    //alert('An error occurred while retrieving the image.');
                }
            });
        });

        //After Image Modal
        $(document).on('click', '.viewafterimgcomp', function() {
            var task_id = $(this).data('imgs-id');
            

            // Fetch the image from the server
            $.ajax({
                type: "GET",
                url: `aff/after/${task_id}`,
                
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        $("#id").val(response.data.task_id);
                        $('#afterimgcomp').attr('src',"imgafter/"+ response.data.after_photo).show();
                    } else {
                        $('afterimgcomp').hide();
                        alert(response.message);
                    }
                    $('#viewimgaftercomp').modal('show');
                },
                error: function(xhr, status, error) {
                   // alert('An error occurred while retrieving the image.');
                }
            });
        });

        //Rejected Tab Feedback
        $(document).on('click', '.btnrejfeed', function(e) {
            e.preventDefault();
            var user_idrej = $(this).val();
            console.log(user_idrej)
            $.ajax({
                type: "GET",
                url: `fed/feed/${user_idrej}`,
                success: function(response) {
                    console.log(response);  
                    if (response.status == 500) {
                        alert(response.message);
                    } else {
                        $("#id").val(response.data.id);
                        $('#pdrej2').val(response.data.reason);

                        $('#problemrejected').modal('show');
                    }
                }
            });
        });
    </script>
</body>

</html>