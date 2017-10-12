<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\wamp64\www\tp5\public/../application/admin\view\index\index.htm";i:1507731063;s:65:"C:\wamp64\www\tp5\public/../application/admin\view\common\top.htm";i:1507732687;s:66:"C:\wamp64\www\tp5\public/../application/admin\view\common\left.htm";i:1507702943;}*/ ?>
<?php
/* http://www.upupw.net */
/* webmaster@upupw.net */
$version="15.12.5AQ";
date_default_timezone_set('Asia/Shanghai') && error_reporting(0);
function _GET($n) { return isset($_GET[$n]) ? $_GET[$n] : NULL; }
function _SERVER($n) { return isset($_SERVER[$n]) ? $_SERVER[$n] : '[undefine]'; }
?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>EG-Blog管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">
    <style type="text/css">
        <!--
        *{margin:0px;padding:0px;}
        body {background-color:#FFFFFF;color:#000000;margin:0px;font-family:"\5fae\8f6f\96c5\9ed1",tahoma,arial,sans-serif;}
        input {text-align:center;width:200px;height:20px;padding:5px;}
        a:link {color:green; text-decoration:none;}
        a:visited {color:green;text-decoration:none;}
        a:active {color:green;text-decoration:none;}
        a:hover {color:#ed776b;text-decoration:none;}
        table {border-collapse:collapse;margin:10px 0px;clear:both;}
        .inp tr th, td {padding:2px 5px 2px 5px;vertical-align:center;text-align:center;height:30px; border:1px #FFFFFF solid;}
        .er { text-align: right; background-color: #d3e1e5; }
        .ec { text-align: center; background-color: #1abc9c; font-weight: bold; color: #FFFFFF; }
        .fl { text-align: left; background-color: #ecf0f1; color: #505050; }
        -->
    </style>

</head>
<body>
    <!--头部引入-->
    <!-- 头部分离 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="<?php echo url('/admin/index'); ?>" class="navbar-brand">
                    <small>
                        <img src="__PUBLIC__/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__PUBLIC__/images/manager.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit', array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
    <div class="main-container container-fluid">
        <div class="page-container">
    <!--左侧引入-->
    <!--左侧分离分离-->
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input class="searchinput" type="text">
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">管理员</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text">栏目管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">文档</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-link"></i>
                        <span class="menu-text">友情链接</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('links/lst'); ?>">
                                    <span class="menu-text">
                                        链接列表                                   </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">系统</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('tags/lst'); ?>">
                                    <span class="menu-text">
                                        Tags标签管理
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                            <a href="<?php echo url('logo/index'); ?>">
                                    <span class="menu-text">
                                        Logo管理
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->

            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active">控制面板</li>
                    </ul>
                </div>
                <!-- Page Body -->
                <div class="page-body">

				<div style="text-align:center; line-height:100%; font-size:20px;">

                    <table class="table" contenteditable="true">
                        <tr>
                            <th colspan="2" class="ec" width="50%">服务器信息</th>
                        </tr>
                        <tr>
                            <td class="er" width="12%">服务器域名</td>
                            <td class="fl" width="38%"><?=_SERVER('SERVER_NAME')?></td>
                        </tr>
                        <tr>
                            <td class="er">服务器端口</td>
                            <td class="fl"><?=_SERVER('SERVER_ADDR').':'._SERVER('SERVER_PORT')?></td>
                        </tr>
                        <tr>
                            <td class="er">服务器环境</td>
                            <td class="fl"><?=stripos(_SERVER('SERVER_SOFTWARE'), 'PHP')?_SERVER('SERVER_SOFTWARE'):_SERVER('SERVER_SOFTWARE')?></td>
                        </tr>
                        <tr>
                            <td class="er">服务器标准时</td>
                            <td class="fl">
                                <?=gmdate('Y-m-d H:i:s', time() + 3600 * 8)?>
                            </td>
                        </tr>
                </div>
                </div>
                

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="__PUBLIC__/style/jquery_002.js"></script>
    <script src="__PUBLIC__/style/bootstrap.js"></script>
    <script src="__PUBLIC__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/style/beyond.js"></script>
    


</body>
</html>