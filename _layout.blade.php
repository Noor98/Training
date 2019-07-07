<!DOCTYPE html>

<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>@yield("title") | المحاسب</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

        <link href="/metronic-rtl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic-rtl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic-rtl/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic-rtl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/metronic-rtl/assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/metronic-rtl/assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="/metronic-rtl/assets/layouts/layout/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic-rtl/assets/layouts/layout/css/themes/darkblue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="/metronic-rtl/assets/layouts/layout/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        @yield("css")
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="/">
                        <img src="/metronic-rtl/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="/metronic-rtl/assets/layouts/layout/img/avatar3_small.jpg" />
                                <span class="username username-hide-on-mobile"> محمد </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> تغيير كلمة المرور </a>
                                </li>
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> تسجيل خرروج </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li class="sidebar-search-wrapper">
                            <!--<form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                             -->
                        </li>
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-list"></i>
                                <span class="title">الاصناف</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="/category" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">ادارة التصنيفات</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/item" class="nav-link ">
                                        <i class="icon-list"></i>
                                        <span class="title">ادارة الاصناف</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/item/create" class="nav-link ">
                                        <i class="icon-plus"></i>
                                        <span class="title">اضافة صنف جديد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>   
                        
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">الزبائن</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="/customer" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">ادارة الزبائن</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/customer/create" class="nav-link ">
                                        <i class="icon-plus"></i>
                                        <span class="title">اضافة زبون جديد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>   
                        
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-tv"></i>
                                <span class="title">الحسابات</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="/account" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">ادارة الحسابات</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/account/create" class="nav-link ">
                                        <i class="icon-plus"></i>
                                        <span class="title">اضافة حساب جديد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>   
                        
                        
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-ticket"></i>
                                <span class="title">العمليات</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="/operation/buy" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">المشتريات</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/operation/x" class="nav-link ">
                                        <i class="icon-plus"></i>
                                        <span class="title">مردود المشتريات</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/operation/buy" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">المبيعات</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/operation/x" class="nav-link ">
                                        <i class="icon-plus"></i>
                                        <span class="title">مردود المبيعات</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/voucher/create" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">اضافة قيد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>   
                        
                        
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-file"></i>
                                <span class="title">التقارير</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="/report/ledger" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">تقرير الاستاذ</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/user/create" class="nav-link ">
                                        <i class="icon-list"></i>
                                        <span class="title">تقرير الاصناف</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/user/create" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">تقرير الزبائن</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/user/voucher" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">تقرير القيود</span>
                                    </a>
                                </li>
                            </ul>
                        </li>   
                        
                        
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">المستخدمون</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="/admin" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">ادارة المستخدمين</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="/admin/create" class="nav-link ">
                                        <i class="icon-plus"></i>
                                        <span class="title">اضافة حساب جديد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>   
                        
                    </ul>
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <h3 class="page-title"> @yield("title")
                        <small>@yield("subtitle")</small>
                    </h3>
                    @include("_msg")
                    @yield("content")
                </div>
                <!-- END CONTENT BODY -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> {{date("Y")}} &copy; جميع الحقوق محفوظة لبرنامج الحاسب
              
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
         <div id="Confirm" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">تأكيد</h4>
              </div>
              <div class="modal-body">
                <p>هل انت متأكد من الاستمرار في العملية؟</p>
              </div>
              <div class="modal-footer">
                <a class="btn btn-danger">نعم, متأكد</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">الغاء الأمر</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
        <script src="/metronic-rtl/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/metronic-rtl/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="/metronic-rtl/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="/metronic-rtl/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        @yield("js")
        
        
        <script>
            $(function(){                
              $(".Confirm").click(function(e){
                  $("#Confirm").modal("show");
                  $("#Confirm .btn-danger").attr("href",$(this).attr("href"));
                 // return false;
                  //e.preventDefault();
              });
            })
        </script>
    </body>

</html>