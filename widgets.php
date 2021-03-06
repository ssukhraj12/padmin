<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ULTIMO Admin Dashboard Template</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="plugins/morris/morris.css" rel="stylesheet" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">ULTIMO</span> Admin</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"> <i class="fa fa-repeat"></i> </a> </li>
            <li> <a href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a> </li>
          </ul>
        </div>
      </div>
      <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New Task</span> </a>
      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
            <ul>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Tasks <span class="badge badge">8</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 7 pending tasks</p>
                  </li>
                  <li> <a href="task.php" class="task">
                    <div class="green_status task_height" style="width:80%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right green_label">80%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="yellow_status task_height" style="width:50%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right yellow_label">50%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="blue_status task_height" style="width:70%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right blue_label">70%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="red_status task_height" style="width:85%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right red_label">85%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <span class="new"> <a href="task.php" class="pull_left">Create New</a> <a href="task.php" class="pull-right">View All</a> </span> </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Mail <span class="badge badge color_1">4</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 4 mails</p>
                  </li>
                      <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail red_color"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
              
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> notification <span class="badge badge color_2">6</span> </a>
                <div class="notification_drop_down dropdown-menu">
                  <div class="top_pointer"></div>
                  <div class="box"> <a href="inbox.php"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                  <div class="box"> <a href="calendar.php"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                  <div class="box"> <a href="maps.php"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                  <div class="box"> <a href="todo.php"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                  <div class="box"> <a href="task.php"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                  <div class="box"> <a href="timeline.php"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname">John Doe</span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li>
            <li> <a href="help.php"><i class="fa fa-question-circle"></i> Help</a> </li>
            <li> <a href="settings.php"><i class="fa fa-cog"></i> Setting </a></li>
            <li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
        </div>
        <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
    <div class="left_nav">
      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened" style="display:block">
              <li> <a href="index.php" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Dashboard</b> </a> </li>
              <li> <a href="settings.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Settings</b> </a> </li>
              <li> <a href="layouts.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Layouts</b> </a> </li>
              <li> <a href="themes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Themes</b> </a> </li>
              <li> <a href="widgets.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Widgets</b> </a> </li>
              <li> <a href="animations.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Animations</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> UI KIT <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="typography.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Typography</b> </a> </li>
              <li> <a href="buttons.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Buttons</b> </a> </li>
              <li> <a href="icons.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Icons</b> </a> </li>
              <li> <a href="grid.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Grid</b> </a> </li>
              <li> <a href="alert.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Alert & Notification</b> </a> </li>
              <li> <a href="tabs.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tabs & Accordion</b> </a> </li>
              <li> <a href="tree.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tree View</b> </a> </li>
              <li> <a href="list.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>List Group</b> </a> </li>
              <li> <a href="portlets.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Portlets</b> </a> </li>
              <li> <a href="general.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b >General</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> Forms <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="components.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Components</b> </a> </li>
              <li> <a href="validation.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Validation</b> </a> </li>
              <li> <a href="multi-upload.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Multi-upload</b> </a> </li>
              <li> <a href="other-forms.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Others</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> APPS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="todo.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>To-Do</b> </a> </li>
              <li> <a href="task.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Task</b> </a> </li>
              <li> <a href="notes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Notes</b> </a> </li>
              <li> <a href="media.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Media Manager</b> </a> </li>
              <li> <a href="calendar.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Calendar</b> </a> </li>
              <li> <a href="ticket.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ticket Support</b> </a> </li>
              <li> <a href="invoice.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Invoice</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> EMAIL <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="inbox.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Inbox</b> </a> </li>
              <li> <a href="compose.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Compose</b> </a> </li>
              <li> <a href="readmail.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Read Mail</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-folder-open-o"></i> PAGES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="login.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Login</b> </a> </li>
              <li> <a href="registration.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Registration</b> </a> </li>
              <li> <a href="lockscreen.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Lock Screen</b> </a> </li>
              <li> <a href="blankpage.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Blank Page</b> </a> </li>
              <li> <a href="404error.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>404 Error</b> </a> </li>
              <li> <a href="500error.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>500 Error</b> </a> </li>
              <li> <a href="search.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Search</b> </a> </li>
              <li> <a href="about.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>About</b> </a> </li>
              <li> <a href="contact.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-th"></i> TABLES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="statictable.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Static Table</b> </a> </li>
              <li> <a href="datatable.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Data Table</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-glass"></i> EXTRA <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="timeline.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Timeline</b> </a> </li>
              <li> <a href="profile.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Profile</b> </a> </li>
              <li> <a href="contactlist.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact List</b> </a> </li>
              <li> <a href="maps.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Maps</b> </a> </li>
              <li> <a href="gallery.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Gallery</b> </a> </li>
              <li> <a href="help.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Help</b> </a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>widgets</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">DASHBOARD</a></li>
            <li class="active">widgets</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
       
       
       
       <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="widgets_user">
              <div class="stat-label">403</div>
              <div class="system_body_title"> <i class="fa fa-user"></i> System Users</div>
              <div class="system_bg">
              <div class="centered-container">
                  
                  <input type="text" class="dial" value="2000" data-width="130" data-height="150" data-fgcolor="#a4ed16" data-step="1000" data-min="-15000" data-max="15000" data-thickness=".15" />
                </div>
              </div>
              <div class="widget-stats "> <span class="item-number active_widget">47</span> <span class="item-title active_widget">HIGH RISK</span> </div>
              <div class="widget-stats"> <span class="item-number active_orangewidget">347</span> <span class="item-title active_orangewidget">TRACKED</span> </div>
              <div class="widget-stats_last"> <span class="item-number active_greenwidget">19</span> <span class="item-title active_greenwidget">BLOCKED</span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widgets_user">
              <div class="stat-label">21</div>
              <div class="system_body_title"> <i class="fa fa-user"></i> Policies </div>
              <div class="system_bg">
              
              <div class="centered-container">
                  
                  <input type="text" class="dial" data-cursor="true" value="12" data-width="130" data-height="150" data-fgcolor="#ffa200" data-thickness=".15" />
                </div>
                
                </div>
              <div class="widget-stats"> <span class="item-number active_orangewidget">0</span> <span class="item-title active_orangewidget">BLOCKING</span> </div>
              <div class="widget-stats "> <span class="item-number active_widget">0</span> <span class="item-title active_widget">ALERTING</span> </div>
              <div class="widget-stats_last"> <span class="item-number active_greenwidget">21</span> <span class="item-title active_greenwidget">INACTIVE</span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widgets_user">
              <div class="stat-label">1,063</div>
              <div class="system_body_title"> <i class="fa fa-user"></i> Violations</div>
              <div class="system_bg">
              
              <div class="centered-container">
                 
                  <input type="text" class="dial" value="42" data-angleoffset="-125" data-anglearc="250" data-width="130" data-height="150" data-fgcolor="#e74949" data-thickness=".15" />
                </div>
                
              </div>
              <div class="widget-stats"> <span class="item-number active_greenwidget">1,012</span> <span class="item-title active_greenwidget">HIGH RISK</span> </div>
              <div class="widget-stats"> <span class="item-number active_orangewidget">51</span> <span class="item-title active_orangewidget">MEDIUM RISK</span> </div>
              <div class="widget-stats_last"> <span class="item-number active_widget">2</span> <span class="item-title active_widget">BLOCKING</span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widgets_user">
              <div class="stat-label">1,944</div>
              <div class="system_body_title"> <i class="fa fa-user"></i> Managed Services </div>
              <div class="system_bg">
              <div class="centered-container">
                  
                  <input type="text" class="dial" value="23" data-width="130" data-height="150" data-fgcolor="#dc51f5" data-displayprevious="true" data-thickness=".15" />
                </div>
              </div>
              <div class="widget-stats"> <span class="item-number active_widget">0</span> <span class="item-title active_widget">BLOCKING</span> </div>
              <div class="widget-stats"> <span class="item-number active_greenwidget">0</span> <span class="item-title active_greenwidget">ALERTING</span> </div>
              <div class="widget-stats_last"> <span class="item-number active_orangewidget">2</span> <span class="item-title active_orangewidget">INACTIVE</span> </div>
            </div>
          </div>
        </div>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        <div class="row">
          
           <div class="col-md-6">
            <div class="multi-stat-box">
              <div class="header">
                <div class="left">
                  <h2>Pageviews</h2>
                  <a><i class="fa fa-chevron-down"></i> </a> </div>
                <div class="right">
                  <h2>NOV 14 - DEC 15</h2>
                  <div class="percent"><i class="fa fa-angle-double-down"></i> 34%</div>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <ul>
                    <li> <span class="date">Overall</span> <span class="value">1,104</span> </li>
                    <li class="active"> <span class="date">This week</span> <span class="value">486</span> </li>
                    <li> <span class="date">Yesterday</span> <span class="value">364</span> </li>
                    <li> <span class="date">Today</span> <span class="value">254</span> </li>
                  </ul>
                </div>
                <div class="right">
                  <div class="sparkline" data-type="line" data-resize="true" data-height="130" data-width="90%" data-line-width="1" data-line-color="#ddd" data-spot-color="#ccc" data-fill-color="" data-highlight-line-color="#ddd" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455,150,530,140]"></div>
                  <div class="ticket-lebel">SUN</div>
                  <div class="ticket-lebel">MON</div>
                  <div class="ticket-lebel">TUE</div>
                  <div class="ticket-lebel">WED</div>
                  <div class="ticket-lebel">THR</div>
                  <div class="ticket-lebel">FRI</div>
                  <div class="ticket-lebel">SAT</div>
                  <div class="ticket-lebel">SUN</div>
                </div>
              </div>
            </div>
            <br/>
            <div class="panel">
              <div class="panel-body">
                <div class="chart">
                  <div class="heading"> <span>June</span> <strong>15 Days | 57%</strong> </div>
                  <div id="barchart"></div>
                </div>
              </div>
              <div class="chart-tittle"> <span class="title text-muted">Total Earning</span> <span class="value-pie text-muted">$, 87,34,577</span> </div>
            </div>
          </div>
          
          
          
          <div class="col-md-3">
            <div class="widget_inbox">
              <ul>
                <li><a href="#"class="inbox_red widget_inbox_heading">inbox <span class="pull-left"><i class="fa fa-bars"></i></span> <span class="pull-right"><i class="fa fa-cog"></i></span> </a> </li>
                <li><a href="#">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">12.23</span> Blowin'In The Wind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                <li><a href="#"class="inbox_blue">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">12.23</span> Blowin'In The Wind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                <li><a href="#">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">12.23</span> Blowin'In The Wind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                <li><a href="#">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">12.23</span> Blowin'In The Wind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget_inbox">
              <ul>
                <li><a href="#" class="inbox_gray widget_inbox_heading">tasks list <span class="pull-left"><i class="fa fa-bars"></i></span> <span class="pull-right"><i class="fa fa-cog"></i></span> </a> </li>
                <li><a href="#">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">75%</span> Task Headind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                <li><a href="#"class="inbox_orange">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">80%</span> Task Headind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                <li><a href="#">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">60%</span> Task Headind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                <li><a href="#">
                  <div class="widget_inbox_header"> <span class="pull-right widget_inbox_time">50%</span> Task Headind </div>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
              </ul>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-sm-3 col-sm-6">
            <div class="information green_info">   
              <div class="information_inner">
              	<div class="info green_symbols"><i class="fa fa-users icon"></i></div>
                <span>TODAY SALES </span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_green">
                  <div class="greenprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress1">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
            <div class="information blue_info">
              <div class="information_inner">
              <div class="info blue_symbols"><i class="fa fa-shopping-cart icon"></i></div>
                <span>TODAY FEEDBACK</span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_blue">
                  <div class="blueprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress2">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
            <div class="information red_info">
              <div class="information_inner">
              <div class="info red_symbols"><i class="fa fa-comments icon"></i></div>
                <span>TODAY EARNINGS</span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_red">
                  <div class="redprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress3">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
           <div class="information gray_info">
              <div class="information_inner">
              <div class="info gray_symbols"><i class="fa fa-money icon"></i></div>
                <span>TODAY VISITS </span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_gray">
                  <div class="grayprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress4">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        <div class="row">
          <div class="col-sm-7">
            <div class="user-profile-sidebar profile_widget">
              <div class="row"> <img src="images/pro.png">
                <div class="user-identity">
                  <h4><strong>John Doe</strong></h4>
                  <p><i class="fa fa-map-marker"></i> Riaxe Systems Pvt</p>
                </div>
              </div>
            </div>
            <div class="widget-status-data">
              <div class="row">
                <div class="col-md-4">
                  <h5><strong>2,173</strong><br>
                    Posts</h5>
                </div>
                <div class="col-md-4">
                  <h5><strong>14</strong><br>
                    Following</h5>
                </div>
                <div class="col-md-4">
                  <h5><strong>100</strong><br>
                    Followers</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div id="ex-slider" data-ride="carousel" class="carousel slide pbl">
              <ol class="carousel-indicators">
                <li data-target="#ex-slider" data-slide-to="0" class="active"></li>
                <li data-target="#ex-slider" data-slide-to="1"></li>
                <li data-target="#ex-slider" data-slide-to="2"></li>
                <li data-target="#ex-slider" data-slide-to="3"></li>
                <li data-target="#ex-slider" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"><img src="images/superbox/superbox-full-1.jpg" /></div>
                <div class="item"><img src="images/superbox/superbox-full-7.jpg" /></div>
                <div class="item"><img src="images/superbox/superbox-full-14.jpg" /></div>
                <div class="item"><img src="images/superbox/superbox-full-11.jpg" /></div>
                <div class="item"><img src="images/superbox/superbox-full-16.jpg" /></div>
              </div>
              <a href="#ex-slider" data-slide="prev" class="left carousel-control"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a href="#ex-slider" data-slide="prev" class="right carousel-control"> <span class="glyphicon glyphicon-chevron-right"></span></a> </div>
          </div>
        </div>
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body">content</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> sgxdfgxfg </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
	<div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   















<div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10" style="color:#6e778c;">Layout Options</legend><section><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-header" name="subscription"><span>Fixed Header</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-navigation" name="terms"><span>Fixed Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms"><span>Right Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms"><span>Boxed Layout</span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a id="reset-smart-widget" class="btn btn-xs btn-block btn-primary" href="javascript:void(0);"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">Ultimo Skins</h6><section id="smart-styles"><a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);"><i id="skin-checked" class="fa fa-check fa-fw"></i> Dark Theme</a><a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white" id="red_thm" href="javascript:void(0);">Red Theme</a><a style="background:#34B077;" class="btn btn-xs btn-block txt-color-darken margin-top-5" id="green_thm" href="javascript:void(0);">Green Theme</a><a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5" data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Blue Theme</a><a style="background:#9C6BAD" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Magento Theme</a><a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="light_theme" href="javascript:void(0);">Light Theme</a></section></form> </div>









<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.sparkline.js"></script>
<script src="js/sparkline-chart.js"></script>
<script src="plugins/demo-slider/demo-slider.js"></script>
<script src="plugins/knob/jquery.knob.min.js"></script>

<script src="plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="plugins/sparkline/jquery.customSelect.min.js" ></script> 
<script src="plugins/sparkline/sparkline-chart.js"></script> 
<script src="plugins/sparkline/easy-pie-chart.js"></script>
<script src="plugins/morris/morris.min.js" type="text/javascript"></script> 
<script src="plugins/morris/raphael-min.js" type="text/javascript"></script>  
<script src="plugins/morris/morris-script.js"></script>

 
<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/scroll/jquery.nanoscroller.js"></script>
</body>
</html>
