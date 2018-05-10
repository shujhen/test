<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>大創業務</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="0KTWwZMufpzMT96wb1hdpqyRTmXmQckWhIAwTvcJ">

    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/packages/admin/font-awesome/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/dist/css/skins/skin-red.min.css">

    <link rel="stylesheet" href="http://localhost/packages/admin/nestable/nestable.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/toastr/build/toastr.min.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/google-fonts/fonts.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/plugins/iCheck/all.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/bootstrap-fileinput/css/fileinput.min.css?v=4.3.7">
    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/plugins/ionslider/ion.rangeSlider.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/AdminLTE/plugins/ionslider/ion.rangeSlider.skinNice.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="http://localhost/packages/admin/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css">
    <link rel="stylesheet" href="http://localhost/css/ajaxlivesearch.css">
    <link rel="stylesheet" href="http://localhost/css/customize.css?v=20180424">


    <!-- REQUIRED JS SCRIPTS -->
    <script src="http://localhost/packages/admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="http://localhost/packages/admin/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/packages/admin/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="http://localhost/packages/admin/AdminLTE/dist/js/app.min.js"></script>
    <script src="http://localhost/packages/admin/jquery-pjax/jquery.pjax.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="/admin" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>大創</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>大創業務管理系統</b></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">



                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="/upload/image/dfd93767e8bd4a082e1e652fcacb08db.jpeg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">超級管理員</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="/upload/image/dfd93767e8bd4a082e1e652fcacb08db.jpeg" class="img-circle" alt="User Image">

                                    <p>
                                        超級管理員
                                        <small>帳號建立時間 2017-12-06 14:08:09</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/admin/auth/setting" class="btn btn-default btn-flat">設置</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/admin/auth/logout" class="btn btn-default btn-flat">登出</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->



                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/upload/image/dfd93767e8bd4a082e1e652fcacb08db.jpeg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>超級管理員</p>
                        <p>admin</p>
                        <!-- Status -->
                        <!-- <a href="#"><i class="fa fa-circle text-success"></i> 在線</a> -->
                    </div>
                </div>
                <!-- search form (Optional) -->
                <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">Menu</li>

                    <li>
                        <a href="/admin/"><i style="font-size:medium;" class="fa fa-home"></i>
                <span  style="font-size:medium;">首頁</span>
            </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-tasks"></i>
                            <span style="font-size:medium;">Admin帳號管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/auth/users"><i style="font-size:medium;" class="fa fa-users"></i>
                <span  style="font-size:medium;">管理員帳號</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/auth/roles"><i style="font-size:medium;" class="fa fa-user"></i>
                <span  style="font-size:medium;">角色</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/auth/permissions"><i style="font-size:medium;" class="fa fa-ban"></i>
                <span  style="font-size:medium;">權限</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/auth/menu"><i style="font-size:medium;" class="fa fa-bars"></i>
                <span  style="font-size:medium;">Menu</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/auth/logs"><i style="font-size:medium;" class="fa fa-history"></i>
                <span  style="font-size:medium;">Operation log</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-users"></i>
                            <span style="font-size:medium;">業務管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/sales"><i style="font-size:medium;" class="fa fa-users"></i>
                <span  style="font-size:medium;">業務列表</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/sales/notes"><i style="font-size:medium;" class="fa fa-file"></i>
                <span  style="font-size:medium;">業務公告</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-users"></i>
                            <span style="font-size:medium;">業務領退貨</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/sales/assign"><i style="font-size:medium;" class="fa fa-cube"></i>
                <span  style="font-size:medium;">每日配貨</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/sales/collect"><i style="font-size:medium;" class="fa fa-cubes"></i>
                <span  style="font-size:medium;">領貨單</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/sales/refund"><i style="font-size:medium;" class="fa fa-cube"></i>
                <span  style="font-size:medium;">退貨單</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-users"></i>
                            <span style="font-size:medium;">廠商</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/supplier"><i style="font-size:medium;" class="fa fa-list-alt"></i>
                <span  style="font-size:medium;">廠商列表</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/product/receipt"><i style="font-size:medium;" class="fa fa-list"></i>
                <span  style="font-size:medium;">廠商進貨單</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-archive"></i>
                            <span style="font-size:medium;">商品管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/product"><i style="font-size:medium;" class="fa fa-list-ol"></i>
                <span  style="font-size:medium;">商品列表</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/product/category"><i style="font-size:medium;" class="fa fa-tags"></i>
                <span  style="font-size:medium;">商品分類</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/product/series"><i style="font-size:medium;" class="fa fa-asterisk"></i>
                <span  style="font-size:medium;">主題系列</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/stock/category"><i style="font-size:medium;" class="fa fa-bars"></i>
                <span  style="font-size:medium;">庫存分類</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-university"></i>
                            <span style="font-size:medium;">倉庫管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/warehouse"><i style="font-size:medium;" class="fa fa-bars"></i>
                <span  style="font-size:medium;">倉庫列表</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/transfer"><i style="font-size:medium;" class="fa fa-bars"></i>
                <span  style="font-size:medium;">調撥單</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/inventory"><i style="font-size:medium;" class="fa fa-clipboard"></i>
                <span  style="font-size:medium;">盤點作業</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-ambulance"></i>
                            <span style="font-size:medium;">其他銷貨</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/product/customers"><i style="font-size:medium;" class="fa fa-child"></i>
                <span  style="font-size:medium;">銷貨客戶</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/product/sales"><i style="font-size:medium;" class="fa fa-bars"></i>
                <span  style="font-size:medium;">銷貨單</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/reports"><i style="font-size:medium;" class="fa fa-bars"></i>
                <span  style="font-size:medium;">報表查詢</span>
            </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-child"></i>
                            <span style="font-size:medium;">會員管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/customer"><i style="font-size:medium;" class="fa fa-users"></i>
                <span  style="font-size:medium;">會員資訊</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/records"><i style="font-size:medium;" class="fa fa-shopping-cart"></i>
                <span  style="font-size:medium;">交易紀錄</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-map-o"></i>
                            <span style="font-size:medium;">店鋪管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/web/area"><i style="font-size:medium;" class="fa fa-map-signs"></i>
                <span  style="font-size:medium;">地區</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/web/location"><i style="font-size:medium;" class="fa fa-map-marker"></i>
                <span  style="font-size:medium;">店鋪據點</span>
            </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/"><i style="font-size:medium;" class="fa fa-bar-chart"></i>
                <span  style="font-size:medium;">分析報表</span>
            </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i style="font-size:medium;" class="fa fa-gears"></i>
                            <span style="font-size:medium;">Helpers</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/admin/helpers/scaffold"><i style="font-size:medium;" class="fa fa-keyboard-o"></i>
                <span  style="font-size:medium;">Scaffold</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/helpers/terminal/database"><i style="font-size:medium;" class="fa fa-database"></i>
                <span  style="font-size:medium;">Database terminal</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/helpers/terminal/artisan"><i style="font-size:medium;" class="fa fa-terminal"></i>
                <span  style="font-size:medium;">Laravel artisan</span>
            </a>
                            </li>
                            <li>
                                <a href="/admin/helpers/routes"><i style="font-size:medium;" class="fa fa-list-alt"></i>
                <span  style="font-size:medium;">Routes</span>
            </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper" id="pjax-container">
            <section class="content-header">
                <h1>
                    盤點作業
                    <small>盤點</small>
                </h1>

                <!-- breadcrumb start -->
                <ol class="breadcrumb" style="margin-right: 30px;">
                    <li><a href="http://localhost/admin/"><i class="fa fa-home"></i> 首頁</a></li>
                    <li>
                        <a href="http://localhost/admin/inventory">
                                                盤點作業
                    </a>
                    </li>
                    <li class="active">
                        盤點
                    </li>
                </ol>
                <!-- breadcrumb end -->

            </section>

            <section class="content">


                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">搜尋</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="display: block;">
                                <form method="GET" id="searchform">
                                    <div class="select2-search">
                                        <div class="flex-row">
                                            <div class="flex-col-xs no-padding padding-right-10">
                                                <div class="input-group">
                                                    <input type="hidden" name="type" id="hiddentype" value="search">
                                                    <input class="form-control no-border-right" placeholder="請輸入搜尋的商品名 或 商品編號" type="text" name="search">
                                                    <span class="input-group-btn">
                                <button class="btn btn-transparent-grey2" onclick="$('#hiddentype').val('search');$('#searchform').submit();"> <i class="fa fa-search"></i> </button>
                                </span>
                                                </div>
                                            </div>
                                            <input type="hidden" name="_token" value="0KTWwZMufpzMT96wb1hdpqyRTmXmQckWhIAwTvcJ">
                                            <a href="http://localhost/admin/inventory/3/details" class="btn btn-sm btn-default"> 返回 </a>
                                            <button class="btn btn-sm btn-primary" onclick="$('#hiddentype').val('myinventory');$('#searchform').submit();"> 已盤點 </button>
                                            <button class="btn btn-sm btn-success" onclick="$('#hiddentype').val('notyet');$('#searchform').submit();"> 未盤點 </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">搜尋</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="display: block;">
                                <style>
                                    #qrcodeReader {
                                        clip-path: inset(0px 0px 40% 0px);
                                    }
                                </style>
                                <div id="qrcodeReader">
                                    <scanner></scanner>
                                </div>
                                <script src="http://localhost/js/app.js"></script>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">列表</h3>
                                <div class="box-tools pull-right">
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="display: block;">
                                <ul class="list-group">
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1432">淑貞測試商品
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1433">800冰雪茶碗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1434">西木野真姬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1435">7&quot;胡迪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1436">32000寶石裝飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1437">矢澤妮可
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1438">卡娜木面紙盒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1439">10&quot;迪士尼蛋枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1440">5&quot;卡娜錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1441">1480三麗鷗證件零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1442">K6000行車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1443">A1藍芽耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1444">1380角落珠扣包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1445">7&quot;三麗鷗長枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1446">手機動物靠枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1447">海賊酒桶錢桶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1448">高坂初實
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1449">1980貓咪抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1450">Q版泳裝公仔9款
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1451">甲鐵城無名
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1452">G30行車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1453">護士蕾姆
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1454">鋼鐵太陽能
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1455">玉藻前
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1456">巨大蜘蛛人
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1457">畫筆和泉紗霧
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1458">Q106音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1459">音效動物模型
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1460">6&quot;豬妹
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1461">12&quot;甜圈卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1462">12&quot;小浣熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1463">12&quot;趴卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1464">12&quot;拉熊頭枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1465">7&quot;鸚鵡弟
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1466">KT束口錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1467">12&quot;布丁狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1468">620紅白機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1469">啤酒杯蠟燭
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1470">7&quot;小豬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1471">7&quot;美人魚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1472">7&quot;長髮公主
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1473">7&quot;跳虎
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1474">6&quot;馬來貘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1475">900MD馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1476">金色大便坐墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1477">2480儲金箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1478">32000金術師提袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1479">33009直升機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1480">18&quot;兔耳丁丁
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1481">天元突破尼亞
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1482">夏洛特
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1483">葵喜美
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1484">11&quot;鸚鵡弟
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1485">積木迴力車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1486">LINE置物櫃
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1487">迷你投籃機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1488">PE009咖啡充電器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1489">9985遙控鱷魚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1490">W4耳機+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1491">6&quot;由基拉
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1492">皮紋電源12000
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1493">7&quot;火腿豬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1494">8&quot;抱抱龍
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1495">8&quot;巴斯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1496">Q1耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1497">T600不見不散
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1498">150泡麵擦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1499">200吐司擦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1500">2680挖土機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1501">2480工程車玩具
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1502">380列車食玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1503">680迪士尼鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1504">880迪士尼鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1505">UNO撲克牌
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1506">900SN手提袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1507">32000卡恰皮玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1508">金術師鎖圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1509">金術師圓鏡
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1510">1000帆布筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1511">32000貓咪抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1512">1780小兵造型毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1513">32000龍族玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1514">2300熊貓儲金箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1515">380阿松捏捏
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1516">480摔角公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1517">640懶熊錢包盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1518">150香蕉擦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1519">150果汁擦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1520">200醬料擦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1521">150吐司擦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1522">1500米飛兔吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1523">2700香蕉抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1524">2000香蕉抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1525">2600米飛兔玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1526">6500蒙奇招財玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1527">6800蒙奇婚禮玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1528">7&quot;鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1529">15&quot;圍巾熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1530">12&quot;抱罐維尼
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1531">迪士尼面紙套
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1532">8&quot;圍巾熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1533">8&quot;海軍熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1534">8&quot;變臉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1535">11&quot;戽斗熊貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1536">7&quot;戽斗熊貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1537">11&quot;鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1538">6&quot;浣熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1539">6&quot;趴浣熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1540">10&quot;熊抱哥
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1541">三麗鷗圓錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1542">MDE268耳罩耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1543">KT托特包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1544">22&quot;抱骨頭狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1545">LN-10音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1546">BT-5099耳罩耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1547">蒼崎青子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1548">女娃零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1549">CURREN防水錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1550">多功能防水錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1551">G10音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1552">1200煙花馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1553">小野寺
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1554">志熊理科
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1555">小圓美樹
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1556">中澤農
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1557">木下林擒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1558">結城美柑
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1559">忍野忍
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1560">S8機器人
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1561">TL-08數據線
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1562">USB風扇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1563">999-29釣大便
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1564">999-16科學家
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1565">1980懶熊抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1566">海賊圓錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1567">熊遇見你毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1568">智能雙用包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1569">11&quot;坐喵
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1570">7&quot;坐喵
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1571">涼感巾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1572">800卡通碗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1573">2200指甲轉印機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1574">12&quot;史迪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1575">蛋哥公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1576">狗日記公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1577">12&quot;皮卡丘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1578">12&quot;卡比
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1579">5200電源+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1580">Z16線+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1581">Z88耳機+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1582">4200電源+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1583">高坂桐乃
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1584">泳裝亞絲娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1585">腳丫包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1586">淺間智
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1587">拉熊便當袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1588">6&quot;草莓米妮
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1589">6&quot;坐姿維尼
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1590">6&quot;驢子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1591">菲特
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1592">卡通方包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1593">KT毛巾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1594">小兵梳子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1595">海賊背包錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1596">三麗鷗絨毛斜包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1597">JAGA防水電子錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1598">三麗鷗立體筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1599">KT網狀筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1600">KT大拉鍊筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1601">KT剪刀+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1602">6&quot;熊遇見你
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1603">6&quot;趴腮紅兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1604">旅蛙易拉扣
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1605">泳裝塞巴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1606">奈亞子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1607">亞絲娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1608">和泉紗霧
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1609">水槍塞巴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1610">F9金冠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1611">DS-1198音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1612">KT按摩器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1613">聖誕鈴谷
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1614">造型寫真薇薇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1615">15周年娜美
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1616">E賞騙人布
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1617">聖誕娜美
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1618">造型寫真鷹眼
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1619">15周年黑衣羅
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1620">B賞索隆
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1621">ROS貝吉塔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1622">ROS4孫悟飯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1623">變色羅賓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1624">牛仔褲艾斯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1625">ONE站姿路奇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1626">6&quot;粉兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1627">7-11車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1628">丘詩羽站姿
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1629">BL-09藍芽耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1630">表情後背包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1631">拉熊長零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1632">旅蛙太陽能
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1633">旅蛙大圓包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1634">戽斗方包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1635">旅蛙方包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1636">兩奈軟公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1637">戰損貝吉塔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1638">8&quot;小丸子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1639">蛋哥杯緣子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1640">阿松杯緣子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1641">護士杯緣子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1642">SN杯緣子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1643">旅蛙冰霸杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1644">旅蛙匙扣
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1645">變形熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1646">12&quot;毛怪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1647">10&quot;米奇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1648">迷你貓咪麵包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1649">400學園胸針
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1650">YM-114電源
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1651">33013直升機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1652">TSUM化妝筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1653">10&quot;史迪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1654">6&quot;彩色史迪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1655">自動咖啡杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1656">迪士尼絨毛抽屜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1657">6&quot;便便
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1658">12&quot;站姿柯基
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1659">12&quot;鈴鐺狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1660">拉熊圓垃圾桶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1661">6&quot;三麗鷗留言板
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1662">880KT太陽能
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1663">9818恐龍拔牙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1664">T807廚具組
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1665">旅蛙圓錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1666">迷你電筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1667">旅蛙絨毛錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1668">TSUM鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1669">LINE充電器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1670">海賊果汁筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1671">三麗鷗仿皮斜包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1672">11&quot;沙小皮
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1673">12&quot;爆米花拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1674">W8028變形車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1675">M-5473風扇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1676">7&quot;小飛象
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1677">12&quot;迪士尼麻糬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1678">9617合金車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1679">小熊香皂花
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1680">KT可樂罐錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1681">TSUM手提筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1682">拉熊可樂錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1683">海賊可樂錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1684">6&quot;翻糖星球
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1685">13&quot;旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1686">8&quot;旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1687">7.5&quot;紅衣米奇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1688">12&quot;奧樂雞
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1689">旅蛙背包錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1690">迪士尼絨毛觸控包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1691">9980指尖陀螺
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1692">K歌之王耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1693">鐵片積木
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1694">JM-F599KT鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1695">你的名字手提袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1696">你的名字筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1697">1200煙花手提袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1698">2800壽司抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1699">6&quot;卡比
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1700">10.5&quot;旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1701">6&quot;崔弟
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1702">6&quot;站姿拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1703">12&quot;條紋豬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1704">6&quot;碎花兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1705">浮雕點菸器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1706">丘詩羽
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1707">遊戲手柄
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1708">18&quot;趴卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1709">17&quot;旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1710">tsum卡通錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1711">行李箱電源
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1712">手機錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1713">旅蛙音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1714">B17音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1715">LH-1211直升機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1716">10&quot;蝦猴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1717">4&quot;米飛兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1718">7&quot;米飛兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1719">蛋哥皮革化妝包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1720">卡娜盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1721">1280馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1722">13&quot;白眼阿伯狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1723">7&quot;白眼阿伯狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1724">7&quot;丑娃
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1725">600公主玻璃杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1726">1480狗玩具
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1727">480迪士尼玻璃杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1728">2026運動包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1729">IN-550耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1730">1852妖精女王公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1731">LOTUS雙顯表
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1732">KT書包錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1733">F28音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1734">380珠扣包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1735">5990星際玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1736">馬卡龍電源
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1737">KT手機包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1738">胖胖馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1739">10&quot;角落
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1740">迪士尼樂高
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1741">KT半圓錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1742">憤怒鳥垃圾桶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1743">KT皮革包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1744">4&quot;貓槌子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1745">12&quot;背包熊貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1746">12&quot;LINE長枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1747">15&quot;拉熊2D枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1748">電動青蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1749">10&quot;叮鈴變身頸枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1750">KT記憶枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1751">旅蛙耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1752">旅蛙化妝包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1753">拉熊觸控斜包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1754">7&quot;運動熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1755">7&quot;鈴鐺狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1756">7&quot;圓汪汪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1757">7&quot;笑嘻嘻
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1758">海賊斜背包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1759">12&quot;站姿拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1760">10&quot;坐姿拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1761">12&quot;卡娜撞色頸枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1762">卡娜造型地墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1763">卡娜毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1764">JY303音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1765">JM-E699KT鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1766">KT立鏡
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1767">海賊皮革萬用包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1768">海底發光棒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1769">線+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1770">18&quot;美人魚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1771">12&quot;維尼
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1772">17&quot;玫瑰熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1773">KT餐具+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1774">12&quot;熊大腰枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1775">480熊貓玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1776">KT電暖爐
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1777">KT電火鍋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1778">12&quot;小白暖枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1779">旅蛙零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1780">600TSUM吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1781">PA300耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1782">580法國兔玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1783">980法國兔搖鈴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1784">32000小兵造型杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1785">38400點心公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1786">900湯姆吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1787">800熊玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1788">13&quot;鱷魚暖手
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1789">POP109悟空
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1790">合金YOYO球
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1791">宇宙燈電源
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1792">旅蛙手錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1793">6&quot;旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1794">SW-BT994音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1795">MK2113遙控車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1796">S01音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1797">旅蛙斜包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1798">旅蛙擺飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1799">X800強光電筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1800">旅蛙筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1801">20CM旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1802">8&quot;龍貓筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1803">9&quot;殺人鯨筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1804">7&quot;泰迪狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1805">10&quot;暴龍
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1806">法國兔抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1807">7&quot;蘿蔔熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1808">2000暴力熊筆盒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1809">900KT馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1810">600存錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1811">2500KT置物櫃
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1812">1000KT部屋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1813">1280迪士尼玩具
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1814">600機器人
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1815">寶可夢錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1816">海賊絨毛萬用包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1817">18&quot;德國兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1818">12&quot;卡娜頸枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1819">KT卡式爐
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1820">KT鏡抽屜組
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1821">KT濕紙巾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1822">拉熊側包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1823">卡通隨身杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1824">迪士尼造型水壺
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1825">迪士尼筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1826">380香氛噴霧
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1827">N73耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1828">防水DV
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1829">POP100艾斯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1830">4&quot;奢華熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1831">12&quot;花遊記
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1832">迪士尼地墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1833">120懶熊積木擦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1834">1000KT玩具
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1835">11&quot;德國兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1836">12&quot;貓屁暖手
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1837">迪士尼彩繪包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1838">45CM黃金枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1839">新台幣枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1840">45CM錢枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1841">45CM永保安康枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1842">10&quot;博美狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1843">12&quot;秋田
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1844">12&quot;聖伯納
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1845">12&quot;哈士奇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1846">卡娜零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1847">泡泡化妝包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1848">卡娜化妝包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1849">8&quot;炸蝦貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1850">10&quot;骨頭枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1851">12&quot;卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1852">12&quot;卡娜變身頸枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1853">韓國帽子錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1854">7&quot;柴犬票卡包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1855">貓狗斜背包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1856">11&quot;板手
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1857">9&quot;貝蕾菲兒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1858">9&quot;倉鼠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1859">7&quot;條紋T兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1860">7&quot;變裝熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1861">8&quot;趴姿動物
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1862">7&quot;貴賓狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1863">8&quot;驢子手套
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1864">8&quot;犀牛手套
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1865">12&quot;拉熊暖手
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1866">1:24合金車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1867">12&quot;坐姿拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1868">12&quot;卡娜圍巾帽
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1869">1800長方巾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1870">12&quot;旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1871">陸豪齒輪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1872">飛絡力齒輪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1873">銅齒輪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1874">冠興齒輪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1875">680收納罐
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1876">500三麗鷗集線
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1877">880化妝盒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1878">500馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1879">方巾馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1880">1280收納
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1881">背包零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1882">800手機收納袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1883">1000人型環保袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1884">1500卡查馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1885">12&quot;滅火器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1886">12&quot;動物暖枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1887">13&quot;暴龍
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1888">10&quot;企鵝
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1889">11&quot;歐喵
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1890">12&quot;抱心熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1891">13&quot;毛衣熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1892">12&quot;穿衣情侶熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1893">6&quot;苗族菲兒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1894">10&quot;毛衣熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1895">10&quot;T恤熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1896">9&quot;圍巾熊兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1897">8&quot;圓點松鼠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1898">動物毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1899">6&quot;麻雀
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1900">7&quot;歐喵
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1901">7&quot;蹲姿貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1902">10&quot;火烈鳥
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1903">7&quot;毛寶狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1904">7&quot;點點兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1905">7.5&quot;長頸鹿
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1906">12&quot;KT.小丸子腰枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1907">13&quot;卡娜拖鞋抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1908">12&quot;熊遇見你暖枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1909">6&quot;旅蛙方枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1910">33044空拍機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1911">W609-5六軸
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1912">412四軸
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1913">18&quot;旅蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1914">C5音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1915">7&quot;旅行青蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1916">花樣塔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1917">32000狂熱吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1918">32000休閒墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1919">32000玩偶吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1920">350KT食玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1921">400懶熊食玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1922">陀螺盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1923">1700SN馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1924">1300太空玻璃杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1925">680貓咪杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1926">H260
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1927">H60
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1928">H100
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1929">H320
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1930">H80
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1931">H120
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1932">H90
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1933">H230
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1934">H70
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1935">H110
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1936">H30
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1937">H40
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1938">H130
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1939">H50
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1940">380甜點食玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1941">情人對錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1942">1000金鈔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1943">中束帶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1944">大束帶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1945">表架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1946">3&quot;迪士尼吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1947">Q版3款魯夫
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1948">小兵匙扣
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1949">Q版海賊8款
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1950">Q版海賊6款
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1951">KT.LINE公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1952">5.5&quot;忍者龜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1953">12&quot;忍者龜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1954">18&quot;魔獸
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1955">魔法鑰匙圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1956">TSUM鑰匙圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1957">660玩偶吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1958">350海賊鎖圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1959">2100審理者
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1960">571極惡公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1961">32000兔女郎
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1962">600美食獵人
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1963">780吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1964">800吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1965">780走路吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1966">680吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1967">380TSUM吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1968">600SN樂高吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1969">800耳機孔吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1970">蛋糕吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1971">680當家吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1972">680學園盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1973">1680英國狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1974">650鎖圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1975">500KT吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1976">600喬巴吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1977">新台幣鑰匙圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1978">披風香吉士
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1979">POP9悟空
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1980">造型雷利/魯夫
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1981">POP英雄聯盟
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1982">POP艾斯沙發
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1983">I賞布魯克
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1984">冰上尤里
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1985">POP107特南克斯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1986">POP110克林
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1987">POP223長髮公主
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1988">POP111普烏
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1989">Q版動物海賊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1990">站姿貝吉塔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1991">500櫻花初音
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1992">POP260悟空
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1993">POP97小丑女
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1994">POP156貝吉塔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1995">死神路克
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1996">海盜娜美
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1997">POP99喬巴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1998">POP101羅
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="1999">POP98魯夫
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2000">椅子蕾玖
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2001">DX站姿基德
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2002">POP08白雪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2003">POP81安娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2004">POP138灰姑娘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2005">POP87彭彭
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2006">POP41灰姑娘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2007">POP132黑寡婦
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2008">POP08彩虹小馬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2009">POP06彩虹小馬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2010">POP172傑克
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2011">POP52茉莉
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2012">POP137美國隊長
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2013">POP104傑西卡
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2014">POP27美人魚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2015">POP39初音
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2016">POP96小丑
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2017">POP82愛莎
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2018">長髮特南克斯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2019">藍髮特南克斯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2020">POP10小仙子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2021">POP13沙魯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2022">Q版火影6款
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2023">POP14悟空
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2024">20周年海賊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2025">POP49格魯特
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2026">POP11比克
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2027">POP25美國隊長
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2028">POP121藍髮悟空
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2029">Q版海賊公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2030">翅膀蕾玖
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2031">禮服娜美
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2032">造型寫真羅賓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2033">Q版櫻花初音
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2034">5款喬巴COS
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2035">斧頭魯夫
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2036">不死鳥頂上決戰
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2037">POP喬巴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2038">頂上魯夫
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2039">可愛筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2040">可愛吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2041">TSUM充氣吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2042">1839迴力車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2043">忍者龜聲光面具
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2044">忍者龜裝備/公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2045">4.25&quot;忍者龜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2046">忍者龜電影2
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2047">11&quot;忍者龜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2048">忍者龜Z字
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2049">忍者龜面具
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2050">迪士尼捏樂
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2051">星際系列
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2052">寵物狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2053">冰原歷險記公仔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2054">1980音樂麻雀
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2055">1980鴨子玩具
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2056">600充氣槌
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2057">2000發光眼鏡
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2058">2200音樂舞曲
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2059">200皮卡丘食玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2060">300偶像盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2061">800拼圖
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2062">680貓咪太陽能
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2063">初音盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2064">1800小兵氣球
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2065">280紙膠帶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2066">1200拼圖
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2067">680熨燙貼
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2068">600聖鬥士吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2069">380動物捏樂盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2070">400魔法少女盒玩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2071">日系貼紙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2072">合體機器人
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2073">721特警積木
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2074">戰士積木
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2075">聲光合金車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2076">小新太陽能
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2077">ZR01184夜燈水母
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2078">ZR01157魔法海馬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2079">ZR01287多莉壺
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2080">ZR01286貝利
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2081">互動犬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2082">平衡瑪莉歐
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2083">15100積木
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2084">2612積木
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2085">三麗鷗棒球組
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2086">YOYO球
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2087">熊出沒遊戲錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2088">六合彩機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2089">迪士尼搖擺
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2090">SN積木
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2091">400角落吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2092">合金警車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2093">手榴彈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2094">大嘴猴印章
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2095">綜合積木
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2096">兩用座鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2097">圓球陶瓷錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2098">3126SA金錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2099">6012GA勁黑錶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2100">旅蛙鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2101">電子錶+架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2102">喜羊時鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2103">迷你保溫杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2104">圓點保溫瓶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2105">卡娜帆布包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2106">800人偶束口袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2107">1200貓咪馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2108">1500多爾票夾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2109">1500USB風扇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2110">迪士尼籃子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2111">1800大耳儲金箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2112">鬼太郎環保袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2113">2980懶熊毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2114">羔羊毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2115">3800時尚肩包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2116">880法國兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2117">900三麗鷗票夾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2118">780牛奶杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2119">臉部訓練器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2120">1280KT鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2121">2980壽司毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2122">720相框鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2123">680SN馬克杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2124">680收納袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2125">1880拉熊鹽枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2126">380收納襪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2127">1980迪士尼披肩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2128">1000巨人書本
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2129">1200動物手機座
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2130">1200大耳水杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2131">1900大耳手提袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2132">1500角落便籤
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2133">680鬧鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2134">680牙刷座
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2135">980迪士尼鬧鐘相框
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2136">380夾子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2137">2000時鐘
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2138">370珠扣包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2139">1800真空杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2140">800TSUM收納包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2141">400夏目友人方巾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2142">350美少女髮束
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2143">KT速乾巾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2144">1580化妝包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2145">1700面紙套
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2146">2300SN手提袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2147">1280三麗鷗抽屜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2148">500存錢筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2149">380耳機塞
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2150">1400懶熊置物盒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2151">1500熊本熊手機座
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2152">1500熊本熊面紙套
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2153">500乾洗手
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2154">毛巾襪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2155">1680收納盒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2156">980收納包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2157">550貓夾子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2158">900蛋哥梳子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2159">800KT棉花棒盒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2160">800學園護腕墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2161">1800TSUM保溫杯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2162">2700KT包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2163">460縮口袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2164">1200如廁消音器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2165">500懶熊杯墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2166">380剪刀吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2167">400防蚊手圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2168">日本乾洗手
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2169">1480懶熊抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2170">韓國帽錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2171">貓咪零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2172">貓屁斜背包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2173">吐司零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2174">手機指環扣
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2175">罐裝眼罩
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2176">球型雨衣
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2177">猛獸零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2178">牙膏筆袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2179">海賊LED燈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2180">拉熊斜背包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2181">卡娜披肩毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2182">卡娜斜背包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2183">迪士尼雙用毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2184">TSUM帆布化妝包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2185">三麗鷗面紙套
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2186">可愛零錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2187">迪士尼膝上毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2188">KT觸控包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2189">娃娃筆筒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2190">紅包袋(6入)
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2191">tsum皮革化妝包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2192">KT方錢包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2193">KT補習袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2194">KT束口背包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2195">12&quot;角落毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2196">卡娜觸控包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2197">迪士尼保溫瓶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2198">10803變形鞋子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2199">三麗鷗玻璃瓶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2200">三麗鷗購物袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2201">480三麗鷗抽屜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2202">三麗鷗觸控包
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2203">6980機器隨身碟
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2204">1800米飛兔手機架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2205">1800懶熊手機架
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2206">日系手機貼
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2207">C5滑鼠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2208">Q5滑鼠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2209">拉鍊數據線
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2210">N5耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2211">SM-HD206耳機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2212">67323迴力車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2213">F454合金車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2214">英雄合金車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2215">MK552A遙控車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2216">8107A遙控車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2217">8014遙控車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2218">MK2110遙控車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2219">M9067遙控車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2220">TH638卡車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2221">M9070遙控車
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2222">680冰棒手拿風扇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2223">780懶熊風扇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2224">Z5四軸
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2225">33036A四軸
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2226">33052四軸
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2227">33008直升機
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2228">M30電源10800
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2229">海賊索尼子音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2230">KBQ03音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2231">索尼子音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2232">FT-BT01音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2233">RC-1031音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2234">C-323音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2235">J1音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2236">C-347音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2237">STN031音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2238">C-93B音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2239">STN027音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2240">P10蛋音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2241">SLC-053音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2242">K66金冠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2243">C-337音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2244">A13音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2245">JIDA-A4BT音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2246">K55金冠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2247">DS-1560音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2248">SLC-002音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2249">DS-1158北斗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2250">BTS-06吸盤音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2251">SY-317A感應音箱
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2252">F8金冠
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2253">DS-1688棒
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2254">K88小海螺
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2255">2.75&quot;少年悍將
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2256">2&quot;少年悍將
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2257">魔法精靈靠墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2258">1480河童玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2259">1200卡查玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2260">3490星際玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2261">6490星際玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2262">1980查理布朗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2263">1500SN玩偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2264">1600粉抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2265">6&quot;變色龍
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2266">6&quot;趴貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2267">7&quot;滅火器
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2268">12&quot;小丑魚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2269">7&quot;趴姿鴨
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2270">8&quot;八吉度狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2271">7&quot;動物
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2272">7&quot;趴姿青蛙
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2273">7&quot;河豚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2274">12&quot;油條
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2275">12&quot;迪士尼長抱枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2276">11&quot;牛奶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2277">25&quot;企鵝
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2278">7&quot;龍貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2279">7&quot;奢華熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2280">9&quot;趴豬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2281">12&quot;拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2282">19&quot;立姿熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2283">迪士尼骨頭枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2284">7&quot;星座KT
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2285">12&quot;鱷魚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2286">15cm短腿貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2287">6&quot;雪寶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2288">2&quot;旅蛙吊飾
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2289">12&quot;旅蛙扁枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2290">10&quot;烈子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2291">10&quot;迪士尼眼鏡
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2292">10&quot;穿衣情侶熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2293">10&quot;旅蛙扁枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2294">12&quot;蘋果拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2295">6&quot;迪士尼眼鏡
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2296">10&quot;趴姿浣熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2297">6&quot;繽紛兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2298">7&quot;暖手犬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2299">蕃茄貓頭枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2300">7&quot;米奇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2301">12&quot;瓦斯桶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2302">6&quot;盒子狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2303">6&quot;美人魚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2304">7.5&quot;史迪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2305">7&quot;卡娜長枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2306">12&quot;三麗鷗午安枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2307">6&quot;大頭迪士尼
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2308">6&quot;溫泉水豚
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2309">6&quot;MD
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2310">7&quot;新世界海賊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2311">6&quot;大聖猴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2312">14&quot;神爪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2313">5&quot;祈福柴犬
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2314">6&quot;甜圈熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2315">7&quot;驢子
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2316">9&quot;卡娜骨頭
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2317">8&quot;格子兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2318">10&quot;拉熊2D枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2319">10&quot;拉熊扁枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2320">10&quot;貴賓狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2321">20&quot;卡娜懶骨頭
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2322">11&quot;立姿拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2323">7&quot;標準熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2324">11&quot;抱心繡腳熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2325">12&quot;迪士尼圓枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2326">10&quot;迪士尼長方枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2327">7&quot;培波
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2328">6.5&quot;貓屁
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2329">9&quot;卡娜提袋
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2330">12&quot;卡娜造型枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2331">6&quot;抱蔥蛋哥
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2332">12&quot;卡娜毛毯
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2333">6&quot;杯貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2334">3&quot;三麗鷗指偶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2335">6&quot;三麗鷗抱心
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2336">12&quot;當家圓枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2337">10&quot;當家造型枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2338">10&quot;豆豆方枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2339">11&quot;熊頭枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2340">18&quot;玫瑰熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2341">6&quot;布丁狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2342">14&quot;蝦猴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2343">3&quot;趴卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2344">6&quot;肥貓食堂
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2345">12&quot;米奇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2346">6&quot;卡娜甜圈
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2347">10&quot;趴角落
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2348">12&quot;迪士尼暖枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2349">18&quot;史迪月亮枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2350">18&quot;拉熊月亮枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2351">11&quot;百元熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2352">6&quot;趴角落
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2353">7.5&quot;米奇
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2354">3&quot;卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2355">10&quot;站姿拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2356">12&quot;輕鬆貓
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2357">10&quot;趴卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2358">10&quot;胖嘟嘟
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2359">6&quot;拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2360">10&quot;三麗鷗馬卡龍
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2361">18&quot;卡娜中枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2362">14&quot;迪士尼蝴蝶枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2363">18&quot;拉熊扁枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2364">10&quot;拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2365">18&quot;胖熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2366">6&quot;史迪
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2367">20&quot;安撫貓枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2368">18&quot;卡娜坐墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2369">10&quot;布丁狗
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2370">18&quot;史迪坐墊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2371">12&quot;卡娜抱雞
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2372">12&quot;卡娜腰枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2373">25&quot;卡娜圓枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2374">1號抱哥長枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2375">22&quot;卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2376">18&quot;卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2377">12&quot;米飛兔
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2378">7&quot;2代喬巴
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2379">15&quot;屁桃
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2380">7.5&quot;跳虎
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2381">6&quot;卡娜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2382">6&quot;脫殼龜
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2383">12&quot;卡娜扁枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2384">6&quot;貓掌
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2385">6&quot;蛋哥置物桶
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2386">6&quot;坐姿拉熊
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2387">迪士尼圓枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2388">12&quot;企鵝
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                    <li class="list-group-item countinglist" data-toggle="modal" data-target="#countingmodal" data-indid="2389">12&quot;KT方枕
                                        <span class="pull-right glyphicon glyphicon-exclamation-sign" style="color:#00A662;font-size:20px;"></span>
                                    </li>
                                </ul>


                                <div class="modal fade" id="countingmodal">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="text-align:center;">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                                                <div class="pull-left product-img" style="width:50%;min-height:200px;">

                                                </div>
                                                <form action="" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>
                                                    <div class="pull-left" style="width:50%;min-height:200px;">
                                                        <input type="hidden" name="in_number" value="10704022">
                                                        <input type="hidden" name="indid" value="">
                                                        <h3 style="text-align:center;"></h3>
                                                        <p style="text-align:left;margin-left:10%;margin-top:20px;">編號：<span id="p_number"></span></p>
                                                        <p style="text-align:left;margin-left:10%;margin-top:20px;">目前庫存：<span id="ind_stock"></span></p>
                                                        <p style="text-align:left;margin-left:10%;margin-top:20px;">盤點數量：<input type="number" name="ind_quantity" style="max-width:40%;"></p>
                                                        <p style="text-align:left;margin-left:10%;margin-top:20px;">備註：<input type="text" name="ind_notes" style="max-width:60%;"></p>
                                                        <input type="hidden" name="_method" value="PUT">
                                                        <input type="hidden" name="_token" value="0KTWwZMufpzMT96wb1hdpqyRTmXmQckWhIAwTvcJ">
                                                        <input type="submit" id="okButton" class="btn" style="margin-top:10px;display:none;" value="確定">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="loading-fullpage loading-container" style="display: none;">
                                            <div class="loading-error" style="display: none;">
                                                <h3 style="line-height:80px;font-weight:600;"><span class="glyphicon glyphicon-remove" style="color:#dd4b39"></span> 網頁發生錯誤</h3>
                                                <button class='btn btn-default' data-dismiss="modal" aria-hidden="true">關閉</button>
                                            </div>
                                            <div class="loading-circle">
                                                <div class="loading-circle1 loading-child"></div>
                                                <div class="loading-circle2 loading-child"></div>
                                                <div class="loading-circle3 loading-child"></div>
                                                <div class="loading-circle4 loading-child"></div>
                                                <div class="loading-circle5 loading-child"></div>
                                                <div class="loading-circle6 loading-child"></div>
                                                <div class="loading-circle7 loading-child"></div>
                                                <div class="loading-circle8 loading-child"></div>
                                                <div class="loading-circle9 loading-child"></div>
                                                <div class="loading-circle10 loading-child"></div>
                                                <div class="loading-circle11 loading-child"></div>
                                                <div class="loading-circle12 loading-child"></div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <script>
                                    $('#okButton').on('click', function() {
                                        $('.loading-container').show();
                                        $('.modal-backdrop').remove();
                                        $('body').removeClass('modal-open').css('padding-right', '0');
                                    });

                                    $('#countingmodal').on('show.bs.modal', function(event) {
                                        var button = $(event.relatedTarget);
                                        var recipient = button.data('indid');
                                        var modal = $(this);

                                        $.get('/admin/inventorydetails/getdata/' + recipient, function(data) {
                                            /**
                                             * data：
                                             * [0]indid|[1]商品名|[2]src|[3]款式|[4]目前庫存|[5]盤點數|[6]備註|[7]已盤點|[8]是盤點人
                                             */
                                            data = data.split("|");
                                            modal.find('input[name="indid"]').val(data[0]);
                                            modal.find('form').attr('action', "/admin/inventorydetails/" + data[0]);
                                            modal.find('h3').text(data[1]);
                                            if (data[2]) {
                                                modal.find('.product-img').html('<img src="/upload/' + data[2] + '" alt="' + data[1] + '" style="width:100%;">');
                                            } else {
                                                modal.find('.product-img').html('<span class="glyphicon glyphicon-picture" style="font-size: 20vmin;"></span>');
                                            }
                                            modal.find('#p_number').text(data[3]);
                                            modal.find('#ind_stock').text(data[4]);
                                            modal.find('input[name="ind_quantity"]').val(data[5]);
                                            modal.find('input[name="ind_notes"]').val(data[6]);

                                            var okButton = $('#okButton');

                                            if (data[7] == '1' && data[8] != '1') {
                                                //不是原盤點人不可修改
                                                okButton.removeClass("btn-success").addClass("btn-default").val("已盤點");
                                                okButton.attr('disabled', true);
                                            } else {
                                                okButton.removeClass("btn-default").addClass("btn-success").val("確定");
                                                okButton.attr('disabled', false);
                                            }

                                            okButton.show();
                                        });
                                        $('#countingmodal').on('hidden.bs.modal', function(event) {
                                            $('.product-img').html('');
                                            $('#okButton').hide();
                                        });


                                    });
                                </script>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>

            </section>
            <script data-exec-on-popstate>
                $(function() {});
            </script>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                <strong>Version</strong>&nbsp;&nbsp; 1.0
            </div>
            <!-- Default to the left -->
            <strong>Powered by <a href="https://github.com/z-song/laravel-admin" target="_blank">laravel-admin</a></strong>
        </footer>
    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <script src="http://localhost/packages/admin/AdminLTE/plugins/chartjs/Chart.min.js"></script>
    <script src="http://localhost/packages/admin/nestable/jquery.nestable.js"></script>
    <script src="http://localhost/packages/admin/toastr/build/toastr.min.js"></script>
    <script src="http://localhost/packages/admin/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="http://localhost/packages/admin/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script src="http://localhost/packages/admin/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="http://localhost/packages/admin/AdminLTE/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>
    <script src="http://localhost/packages/admin/moment/min/moment-with-locales.min.js"></script>
    <script src="http://localhost/packages/admin/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
    <script src="http://localhost/packages/admin/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js?v=4.3.7"></script>
    <script src="http://localhost/packages/admin/bootstrap-fileinput/js/fileinput.min.js?v=4.3.7"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key="></script>
    <script src="http://localhost/packages/admin/AdminLTE/plugins/select2/select2.full.min.js"></script>
    <script src="http://localhost/packages/admin/number-input/bootstrap-number-input.js"></script>
    <script src="http://localhost/packages/admin/AdminLTE/plugins/ionslider/ion.rangeSlider.min.js"></script>
    <script src="http://localhost/packages/admin/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
    <script src="http://localhost/packages/admin/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js"></script>
    <script src="http://localhost/js/ajaxlivesearch.js?v=201803261137"></script>
    <script src="http://localhost/js/popper.min.js"></script>
    <script src="http://localhost/js/customize.js?v=201804131334"></script>


    <script>
        function LA() {}
        LA.token = "0KTWwZMufpzMT96wb1hdpqyRTmXmQckWhIAwTvcJ";

        $.fn.editable.defaults.params = function(params) {
            params._token = '0KTWwZMufpzMT96wb1hdpqyRTmXmQckWhIAwTvcJ';
            params._editable = 1;
            params._method = 'PUT';
            return params;
        };

        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };

        $.pjax.defaults.timeout = 5000;
        $.pjax.defaults.maxCacheLength = 0;
        $(document).pjax('a:not(a[target="_blank"])', {
            container: '#pjax-container'
        });

        $(document).on('submit', 'form[pjax-container]', function(event) {
            $.pjax.submit(event, '#pjax-container')
        });

        $(document).on("pjax:popstate", function() {

            $(document).one("pjax:end", function(event) {
                $(event.target).find("script[data-exec-on-popstate]").each(function() {
                    $.globalEval(this.text || this.textContent || this.innerHTML || '');
                });
            });
        });

        $(document).on('pjax:send', function(xhr) {
            if (xhr.relatedTarget && xhr.relatedTarget.tagName && xhr.relatedTarget.tagName.toLowerCase() === 'form') {
                $submit_btn = $('form[pjax-container] :submit');
                if ($submit_btn) {
                    $submit_btn.button('loading')
                }
            }
        })

        $(document).on('pjax:complete', function(xhr) {
            if (xhr.relatedTarget && xhr.relatedTarget.tagName && xhr.relatedTarget.tagName.toLowerCase() === 'form') {
                $submit_btn = $('form[pjax-container] :submit');
                if ($submit_btn) {
                    $submit_btn.button('reset')
                }
            }
        })

        $(function() {
            $('.sidebar-menu li:not(.treeview) > a').on('click', function() {
                var $parent = $(this).parent().addClass('active');
                $parent.siblings('.treeview.active').find('> a').trigger('click');
                $parent.siblings().removeClass('active').find('li').removeClass('active');
            });
        });
    </script>

</body>

</html>