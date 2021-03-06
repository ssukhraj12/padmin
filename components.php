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
<link href="plugins/toggle-switch/toggles.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/icheck.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/blue.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/green.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/grey.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/orange.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/pink.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/purple.css" rel="stylesheet" type="text/css" />
<link href="plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<link href="plugins/dropzone/dropzone.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-colorpicker/css/colorpicker.css" />


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
          <li><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="index.php" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Dashboard</b> </a> </li>
              <li> <a href="settings.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Settings</b> </a> </li>
              <li> <a href="layouts.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Layouts</b> </a> </li>
              <li> <a href="themes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Themes</b> </a> </li>
              <li> <a href="widgets.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Widgets</b> </a> </li>
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
          
          <li class="left_nav_active theme_border"> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> Forms <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul class="opened" style="display:block">
              <li> <a href="components.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Components</b> </a> </li>
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
          <h1>Components</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">FORMS</a></li>
            <li class="active">Components</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        
      
      <div class="row">
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Default Form Elements</h3>
            </div>
            <div class="porlets-content">
              <form action="" class="form-horizontal row-border">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Simplest Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label class="col-sm-3 control-label">Password Field</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Input with Placeholder</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Placeholder">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Disabled Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Disabled Input" disabled="">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Read only field</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" readonly="" value="Read only text goes here">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">With pre-defined value</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="http://">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">With max length</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" maxlength="20" placeholder="max 20 characters here">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Popover Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control popovers" placeholder="Popover Input" data-trigger="hover" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tooltip Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Select Box</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="source">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK"> Argentina </option>
                      <option value="HI"> Aruba </option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                      <option value="CA"> Belarus </option>
                      <option value="NV"> Chile </option>
                      <option value="OR"> Ecuador </option>
                      <option value="WA"> Cyprus </option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                      <option value="AZ"> Finland </option>
                      <option value="CO"> Georgia </option>
                      <option value="ID"> Germany </option>
                      <option value="MT"> Honduras </option>
                      <option value="NE"> Georgia </option>
                      <option value="NM"> Ireland </option>
                      <option value="ND"> Japan </option>
                      <option value="UT"> Utah </option>
                      <option value="WY"> Wyoming </option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                      <option value="AL"> Kazakhstan </option>
                      <option value="AR"> Kuwait </option>
                      <option value="IL"> Illinois </option>
                      <option value="IA"> Libya </option>
                      <option value="KS"> Kansas </option>
                      <option value="KY"> Kentucky </option>
                      <option value="LA"> Macau </option>
                      <option value="MN"> Minnesota </option>
                      <option value="MS"> Mississippi </option>
                      <option value="MO"> Liberia </option>
                      <option value="OK"> Oklahoma </option>
                      <option value="SD"> South Dakota </option>
                      <option value="TX"> Texas </option>
                      <option value="TN"> Tennessee </option>
                      <option value="WI"> Wisconsin </option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                      <option value="CT"> Moldova </option>
                      <option value="DE"> Nauru </option>
                      <option value="FL"> New Zealand </option>
                      <option value="GA"> Georgia </option>
                      <option value="IN"> Indiana </option>
                      <option value="ME"> Nigeria </option>
                      <option value="MD"> Maryland </option>
                      <option value="MA"> Massachusetts </option>
                      <option value="MI"> Michigan </option>
                      <option value="NH"> New Hampshire </option>
                      <option value="NJ"> New Jersey </option>
                      <option value="NY"> New York </option>
                      <option value="NC"> North Carolina </option>
                      <option value="OH"> Ohio </option>
                      <option value="PA"> Pennsylvania </option>
                      <option value="RI"> Rhode Island </option>
                      <option value="SC"> South Carolina </option>
                      <option value="VT"> Vermont </option>
                      <option value="VA"> Virginia </option>
                      <option value="WV"> West Virginia </option>
                      </optgroup>
                    </select>
                  </div><!--/col-sm-9--> 
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Disabled Dropdown</label>
                  <div class="col-sm-9">
                    <select class="form-control" disabled="" placeholder="Disabled Dropdown">
                      <option> Lorem </option>
                      <option> Lorem ipsum dolor. </option>
                      <option> Amet, impedit aperiam? </option>
                      <option> Nemo, alias, quasi? </option>
                      <option> impedit, expedita. </option>
                    </select>
                  </div><!--/col-sm-9--> 
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Textarea</label>
                  <div class="col-sm-9">
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
                <div class="bottom">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div><!--/form-group-->
              </form>
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Basic Form Elements</h3>
            </div>
            <div class="porlets-content">
              <form action="" class="form-horizontal row-border">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Before Text Field</label>
                  <div class="col-sm-9">
                    <div class="input-group"> <span class="input-group-addon">@</span>
                      <input type="text" class="form-control" placeholder="Username">
                    </div>
                  </div>
                </div><!--/form-group-->
                 
                <div class="form-group">
                  <label class="col-sm-3 control-label">After Text Field</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <span class="input-group-addon">.00</span> </div>
                  </div>
                </div><!--/form-group--> 
            
                <div class="form-group">
                  <label class="col-sm-3 control-label">Both</label>
                  <div class="col-sm-9">
                    <div class="input-group"> <span class="input-group-addon">$</span>
                      <input type="text" class="form-control">
                      <span class="input-group-addon">.00</span> </div>
                  </div>
                </div><!--form-group end--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Checkbox</label>
                  <div class="col-sm-9">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox">
                      <span class="custom-checkbox"></span> </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Radio</label>
                  <div class="col-sm-9">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="radio">
                      <span class="custom-radio"></span> </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Buttons instead of text</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Go!</button>
                      </div>
                    </div>
                  </div>
                </div><!--/form-group--> 
                <div class="form-group">
                  <label class="col-sm-3 control-label">Buttons with Dropdowns</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action <i class="icon-caret-down"></i></button>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div><!--form-group--> 
                <div class="form-group">
                  <label class="col-sm-3 control-label">Segmentded Dropdown</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <i class="icon-caret-down"></i></button>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Inline Radio</label>
                  <div class="col-sm-9">
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio1" value="option1">
                       Option 1 </label>
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio2" value="option2">
                     Option 2 </label>
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio3" value="option3">
                       Option 3 </label>
                  </div>
                </div><!--/form-group--> 
                <div class="form-group">
                  <label class="col-sm-3 control-label">Radio</label>
                  <div class="col-sm-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                         Option one is this and that </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                         Option two can be something else </label>
                    </div>
                  </div>
                </div><!--/form-group--> 
                <div class="form-group">
                  <label class="col-sm-3 control-label">Inline Checkbox</label>
                  <div class="col-sm-9">
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox1" value="option1">
                       Option 1 </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox2" value="option2">
                       Option 2 </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox3" value="option3">
                       Option 3 </label>
                  </div>
                </div><!--/form-group--> 
             
                <div class="form-group">
                  <label class="col-sm-3 control-label">Checkbox</label>
                  <div class="col-sm-9">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">
                        <span class="custom-checkbox"></span> Option one is this and that </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">
                        <span class="custom-checkbox"></span> Option two can be something else </label>
                    </div>
                  </div>
                </div><!--/form-group-->
                <div class="bottom">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6--> 
      </div>
      
      
      
     <div class="row">
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Toggle Switches</h3>
            </div>
            <div class="porlets-content">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-5 control-label">Default Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-default" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Primary Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-primary" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Success Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-success" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Warning Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-warning" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Danger Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-danger" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-5 control-label">Green Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-green" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-sm-5 control-label">Yellow Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-yellow" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-sm-5 control-label">Purple Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-Purple" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-sm-5 control-label">Purple Switch</label>
                  <div class="col-sm-7 control-label">
                    <div class="toggle toggle-black" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                  </div>
                </div>
                
                
                
                
                
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Checkboxes and Radios</h3>
            </div>
            <div class="porlets-content">
              <div class="row">
                <div class="col-md-6">
                  
                  <form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Checkboxes</label>

                        <div class="col-sm-9 icheck ">

                            <div class="minimal single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Black Checkbox </label>
                                </div>
                            </div>
                            <div class="minimal-red single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Red Checkbox </label>
                                </div>
                            </div>

                            <div class="minimal-green single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Green Checkbox </label>
                                </div>
                            </div>

                            <div class="minimal-blue single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Blue Checkbox </label>
                                </div>
                            </div>

                            <div class="minimal-yellow single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Yellow Checkbox </label>
                                </div>
                            </div>

                            <div class="minimal-purple single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Purple Checkbox </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                  
                  
                  <form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Checkboxes</label>

                        <div class="col-sm-9 icheck ">

                            <div class="square single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Black Checkbox </label>
                                </div>
                            </div>
                            <div class="square-red single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Red Checkbox </label>
                                </div>
                            </div>

                            <div class="square-green single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Green Checkbox </label>
                                </div>
                            </div>

                            <div class="square-blue single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Blue Checkbox </label>
                                </div>
                            </div>

                            <div class="square-yellow single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Yellow Checkbox </label>
                                </div>
                            </div>

                            <div class="square-purple single-row">
                                <div class="checkbox ">
                                    <input type="checkbox" checked>
                                    <label>Purple Checkbox </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                  
                </div><!-- /col-md-6 -->
                
                
                <div class="col-md-6">
                
                <form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Radio</label>

                        <div class="col-sm-9 icheck ">

                            <div class="minimal single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Black Radio </label>
                                </div>
                            </div>
                            <div class="minimal-red single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio" checked>
                                    <label>Red Radio </label>
                                </div>
                            </div>

                            <div class="minimal-green single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Green Radio </label>
                                </div>
                            </div>

                            <div class="minimal-blue single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Blue Radio </label>
                                </div>
                            </div>

                            <div class="minimal-yellow single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Yellow Radio </label>
                                </div>
                            </div>

                            <div class="minimal-purple single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Purple Radio </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                
                <form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Radio</label>

                        <div class="col-sm-9 icheck ">

                            <div class="square single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Black Radio </label>
                                </div>
                            </div>
                            <div class="square-red single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio" >
                                    <label>Red Radio </label>
                                </div>
                            </div>

                            <div class="square-green single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Green Radio </label>
                                </div>
                            </div>

                            <div class="square-blue single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Blue Radio </label>
                                </div>
                            </div>

                            <div class="square-yellow single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Yellow Radio </label>
                                </div>
                            </div>

                            <div class="square-purple single-row">
                                <div class="radio ">
                                    <input tabindex="3" type="radio"  name="demo-radio">
                                    <label>Purple Radio </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                
                
              </div>
              <!--/row-->
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6--> 
      </div>
      
      
      
      <div class="row">
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Dropzone Multi-File Upload</h3>
            </div>
            <div class="porlets-content">
              <p>This is just a demo. Uploaded files are <strong>not</strong> stored. This does not handle your file uploads on the server. You have to implement the code to receive and store the file yourself.</p>
              <br>
              <form class="dropzone dz-clickable" action="http://riaxe.com/file/post">
                
              <div class="dz-default dz-message"><span>Drop files here to upload</span></div></form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Form Wizard</h3>
            </div>
            <div class="porlets-content">
              <div class="basic-wizard" id="progressWizard">
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a data-toggle="tab" href="#ptab1"><span>Step 1:</span> Basic Info</a></li>
                  <li><a data-toggle="tab" href="#ptab2"><span>Step 2:</span> Product Info</a></li>
                  <li><a data-toggle="tab" href="#ptab3"><span>Step 3:</span> Payment</a></li>
                </ul>
                <div class="tab-content">
                  <div class="progress progress-striped">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar" style="width: 33.3333%;"></div>
                  </div>
                  <div id="ptab1" class="tab-pane active">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Firstname</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Lastname</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Gender</label>
                        <div class="col-sm-8">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" value="m" id="male2" checked="checked">
                            <label for="male2">Male</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" id="female2" value="f">
                            <label for="female2">Female</label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div id="ptab2" class="tab-pane">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Product ID</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="product_id">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Product Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="product_name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Category</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Choose One</option>
                            <option value="">3D Animation</option>
                            <option value="">Web Design</option>
                            <option value="">Software Engineering</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div id="ptab3" class="tab-pane">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Card No</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="cardno">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Expiration</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">...</option>
                          </select>
                        </div>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Year</option>
                            <option value="">2013</option>
                            <option value="">2014</option>
                            <option value="">2015</option>
                            <option value="">...</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">CSV</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="csv">
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /tab-content -->
                
                <ul class="pager wizard">
                  <li class="previous disabled"><a href="javascript:void(0)">Previous</a></li>
                  <li class="next"><a href="javascript:void(0)">Next</a></li>
                </ul>
              </div><!--/progressWizard-->
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6--> 
      </div>
      
      
      
      
      <div class="row">
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Input Mask</h3>
            </div>
            <div class="porlets-content">
              <form action="" class="form-horizontal row-border">
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Date</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'alias': 'date'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">alias:date</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">(999) 999-9999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone + Ext</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999 x999
                            99'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">(999) 999-9999 x99999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Int' Phone</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'+33 999 999 999'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">+33 999 999 999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">TaxID</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'99-9999999'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">99-9999999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">SSN</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'999-99-9999'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">999-99-9999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Product Key</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'a*-999-a999'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">a*-999-a999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Purchase Order</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'PO: aaa-999-***'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">PO: aaa-999-***</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Percent</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'99%'">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">99%</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Currency</label>
                  <div class="col-sm-6">
                    <input type="text" style="text-align: right;" class="form-control mask" data-inputmask="'mask':'999,999,999.99 $', 'numericInput' : true">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">right alignment</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Currency 2</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'$ 999,999,999.99', 'greedy' : false, 'rightAlignNumerics' : false">
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">left alignment</p>
                  </div>
                </div>
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Date Pickers</h3>
            </div>
            <div class="porlets-content">
              <form class="form-horizontal" action="#">
                <div class="form-group">
                  <label class="control-label col-md-4">Default Datepicker</label>
                  <div class="col-md-6 col-xs-11">
                    <input type="text" value="" size="16" class="form-control form-control-inline input-medium default-date-picker">
                    <span class="help-block">Select date</span> </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label class="control-label col-md-3">Start with years viewMode</label>
                  <div class="col-md-6 col-xs-11">
                    <div class="input-append date dpYears" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                      <input type="text" class="form-control" size="30" value="12-02-2012" readonly="">
                      <span class="input-group-btn add-on">
                      <button type="button" class="btn btn-danger"><i class="fa fa-calendar"></i></button>
                      </span> </div>
                    <span class="help-block">Select date</span> </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label class="control-label col-md-3">Months Only</label>
                  <div class="col-md-6 col-xs-11">
                    <div class="input-append date dpMonths" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                      <input type="text" class="form-control" size="30" value="02/2012" readonly="">
                      <span class="input-group-btn add-on">
                      <button type="button" class="btn btn-danger"><i class="fa fa-calendar"></i></button>
                      </span> </div>
                    <span class="help-block">Select month only</span> </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label class="control-label col-md-4">Date Range</label>
                  <div class="col-md-6">
                    <div data-date-format="mm/dd/yyyy" data-date="13/07/2013" class="input-group input-large">
                      <input type="text" name="from" class="form-control dpd1">
                      <span class="input-group-addon">To</span>
                      <input type="text" name="to" class="form-control dpd2">
                    </div>
                    <span class="help-block">Select date range</span> </div>
                </div><!--/form-group-->
              </form>

              <h4><strong>Color Pickers</strong> </h4>
              <hr>
              <form action="#" class="form-horizontal  tasi-form">
                <!--/form-group-->
                <div class="form-group">
                  <label class="control-label col-md-4">Default</label>
                  <div class="col-md-6">
                    <input type="text" value="#8fff00" class="colorpicker-default form-control">
                  </div>
                </div><!--/form-group --> 

                <div class="form-group">
                  <label class="control-label col-md-4">RGBA</label>
                  <div class="col-md-6">
                    <input type="text" data-color-format="rgba" value="rgb(0,194,255,0.78)" class="colorpicker-rgba form-control">
                  </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label class="control-label col-md-4">As Component</label>
                  <div class="col-md-6 col-xs-11">
                    <div class="input-append colorpicker-default color" data-color="rgb(255, 146, 180)" data-color-format="rgb">
                      <input type="text" class="form-control" value="" readonly="">
                      <span class=" input-group-btn add-on">
                      <button style="padding:6px" type="button" class="btn btn-white"> <i style="background-color: rgb(255, 146, 180);"></i> </button>
                      </span> </div>
                  </div>
                </div><!--/form-group-->
              </form><!--/form-horizontal-->
              
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
       </div>
      
      
       <div class="row">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a><a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">CKEditor</h3>
            </div>
            <div class="porlets-content">
              <div class="form">
                <form action="#" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2">CKEditor</label>
                    <div class="col-sm-10">
                      <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12-->
       </div><!--/row--> 
      
  
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
      <div class="modal-body"> content </div>
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
      <div class="modal-body">sgxdfgxfg </div>
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
<script type="text/javascript"  src="plugins/toggle-switch/toggles.min.js"></script> 
<script src="plugins/checkbox/zepto.js"></script>
<script src="plugins/checkbox/icheck.js"></script>
<script src="js/icheck-init.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/icheck.js"></script>
<script type="text/javascript" src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
<script type="text/javascript" src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="js/form-components.js"></script> 
<script type="text/javascript"  src="plugins/input-mask/jquery.inputmask.min.js"></script> 
<script type="text/javascript"  src="plugins/input-mask/demo-mask.js"></script> 
<script type="text/javascript"  src="plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
<script type="text/javascript"  src="plugins/dropzone/dropzone.min.js"></script> 
<script type="text/javascript" src="plugins/ckeditor/ckeditor.js"></script>

<script>
/*==Porlets Actions==*/
    $('.minimize').click(function(e){
      var h = $(this).parents(".header");
      var c = h.next('.porlets-content');
      var p = h.parent();
      
      c.slideToggle();
      
      p.toggleClass('closed');
      
      e.preventDefault();
    });
    
    $('.refresh').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();
      var loading = $('&lt;div class="loading"&gt;&lt;i class="fa fa-refresh fa-spin"&gt;&lt;/i&gt;&lt;/div&gt;');
      
      loading.appendTo(p);
      loading.fadeIn();
      setTimeout(function() {
        loading.fadeOut();
      }, 1000);
      
      e.preventDefault();
    });
    
    $('.close-down').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();
      
      p.fadeOut(function(){
        $(this).remove();
      });
      e.preventDefault();
    });

</script>


<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>


</body>
</html>
