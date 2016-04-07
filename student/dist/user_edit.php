<?php
    session_start();
?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Edit profile</title>

    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

</head>
<body class="sidebar_main_open">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown="{mode:'click'}" class="uk-hidden-small">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE0BE;</i><span class="uk-badge">12</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge uk-dropdown-flip uk-dropdown-scrollable">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-cyan">hh</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">In laudantium laborum.</a></span>
                                            <span class="uk-text-small uk-text-muted">Inventore dolorem in fuga ea accusamus illo architecto veniam.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Minima aut.</a></span>
                                            <span class="uk-text-small uk-text-muted">Sunt ut delectus ullam voluptatum nobis fugiat.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-light-green">zd</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Maxime cum.</a></span>
                                            <span class="uk-text-small uk-text-muted">Perspiciatis deserunt sunt doloremque minima praesentium recusandae dicta.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Sed at.</a></span>
                                            <span class="uk-text-small uk-text-muted">Quibusdam amet vel unde animi deleniti est dolor voluptate adipisci.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Dolores quasi quia.</a></span>
                                            <span class="uk-text-small uk-text-muted">Ducimus vel voluptate ad quia ut rerum.</span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary md-btn-block js-uk-prevent uk-margin-small-top">Show All</a>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">4</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge uk-dropdown-flip uk-dropdown-scrollable">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Deleniti impedit dolor.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Aut debitis quae in quo aut.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Nihil quae.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Deserunt aut ut et nam id fuga corporis.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Ullam fugit sunt.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Eum cum voluptatem optio non facere impedit.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Vitae rerum.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Sapiente et aut adipisci repellendus sed numquam.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="user_profile.php">My profile</a></li>
                                    <li><a href="page_settings.html">Settings</a></li>
                                    <li><a href="student_logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
            </form>
        </div>
    </header><!-- main header end -->

    <!-- main sidebar -->
    <aside id="sidebar_main">
        <a href="#" class="uk-close sidebar_main_close_button"></a>
        <div class="sidebar_main_header">
            <div class="sidebar_logo"><a href="user_profile.php"><img src="../../internship/images/logo.jpg" alt="" height="15" width="71"/></a></div>
        </div>
        <div class="menu_section">
            <ul>
                <li>
                    <a href="plugins_calendar.php">
                        <span class="menu_icon uk-icon-th-large"></span>
                        Calendar
                    </a>
                </li>
                <li>
                    <a href="page_mailbox.php">
                        <span class="menu_icon uk-icon-envelope-o"></span>
                        Mailbox
                    </a>
                </li>
                <li>
                    <a href="companies.php">
                        <span class="menu_icon uk-icon-usd"></span>
                        Companies
                    </a>
                </li>
                <li>
                    <a href="branch_wise.php">
                        <span class="menu_icon uk-icon-code"></span>
                        Branchwise
                    </a>
                </li>
                <li class="act_section">
                    <a href="user_profile.php">
                        <span class="menu_icon uk-icon-user"></span>
                        User Profile
                    </a>
                </li>
                <li>
                    <a href="user_edit.php">
                        <span class="menu_icon uk-icon-user"></span>
                        User Edit
                    </a>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    <div id="page_content">
        <div id="page_content_inner">
            <form action="edit_update.php" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-7-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <?php 
                                            $connect = mysql_connect("localhost","root", "manshoon");
                                            if (!$connect) {
                                                die(mysql_error());
                                            }
                                            mysql_select_db("internship_portal");
                                            $query = 'SELECT * FROM student WHERE name="'.$_SESSION["name"].'"';
                                            $row = mysql_fetch_array(mysql_query($query));
                                            //echo $_SESSION["name"];
                                            echo '<img src="data:image/png;base64,'.base64_encode($row['profile_pic']).'" alt="user avatar"/>';
                                          ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div class="user_avatar_controls">
                                        <span class="btn-file">
                                            <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                            <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                            <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                        </span>
                                        <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
                                    </div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"><?php echo ucfirst($_SESSION["name"]); ?></span><span class="sub-heading" id="user_edit_position"><?php echo ucfirst($_SESSION["surname"]); ?></span></h2>
                                </div>
                                <button type="submit" class="md-fab md-fab-small md-fab-success" id="user_edit_submi">
                                    <i class="material-icons">&#xE161;</i>
                                </button>
                            </div>
                            <div class="user_content">
                                <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                                    <li class="uk-active"><a href="#">Basic</a></li>
                                    <li><a href="#">Groups</a></li>
                                    <li><a href="#">Todo</a></li>
                                </ul>
                                <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                    <li>
                                        <div class="uk-margin-top">
                                            <h3 class="full_width_in_card heading_c">
                                                General info
                                            </h3>
                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_uname_control">User name</label>
                                                    <input class="md-input" type="text" id="user_edit_uname_control" name="user_edit_uname_control" />
                                                </div>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_position_control">Surname</label>
                                                    <input class="md-input" type="text" id="user_edit_position_control" name="user_edit_position_control" />
                                                </div>
                                            </div>
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <label for="user_edit_personal_info_control">About</label>
                                                    <textarea class="md-input" name="user_edit_personal_info_control" id="user_edit_personal_info_control" cols="30" rows="4"><?php echo $_SESSION['about_me'] ?></textarea>
                                                </div>
                                            </div>
                                            <h3 class="full_width_in_card heading_c">
                                                Contact info
                                            </h3>
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                                </span>
                                                                <label>Email</label>
                                                                <input type="text" class="md-input" name="user_edit_email" value="<?php echo $_SESSION['email'] ?>" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                                </span>
                                                                <label>Phone Number</label>
                                                                <input type="text" class="md-input" name="user_edit_phone" value="<?php echo $_SESSION['mob'] ?>" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                                                </span>
                                                                <label>Facebook</label>
                                                                <input type="text" class="md-input" name="user_edit_facebook" value="<?php echo $_SESSION['facebook'] ?>" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-twitter"></i>
                                                                </span>
                                                                <label>Twitter</label>
                                                                <input type="text" class="md-input" name="user_edit_twitter" value="<?php echo $_SESSION['twitter'] ?>" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-github"></i>
                                                                </span>
                                                                <label>Github</label>
                                                                <input type="text" class="md-input" name="user_edit_google_plus" value="<?php echo $_SESSION['github']; ?>" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-linkedin"></i>
                                                                </span>
                                                                <label>Linkdin</label>
                                                                <input type="text" class="md-input" name="user_edit_linkdin" value="<?php echo $_SESSION['linkedin'] ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="uk-text-muted uk-text-small">Move the draggable group by clicking and holding handler and drag it to other list.</p>
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-medium-1-2">
                                                <h4 class="heading_c uk-margin-small-bottom">My groups</h4>
                                                <ul class="md-list md-list-addon uk-sortable groups_connected" id="user_groups">
                                                    <li data-group-id="1">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Cloud Computing</a></span>
                                                            <span class="uk-text-small uk-text-muted">57 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="2">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Account Manager Group</a></span>
                                                            <span class="uk-text-small uk-text-muted">200 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="3">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Digital Marketing</a></span>
                                                            <span class="uk-text-small uk-text-muted">242 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="4">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">HR Professionals Association - Human Resources</a></span>
                                                            <span class="uk-text-small uk-text-muted">251 Members</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <h4 class="heading_c uk-margin-small-bottom">All Groups</h4>
                                                <ul class="md-list md-list-addon uk-sortable groups_connected" id="all_groups">
                                                    <li data-group-id="5">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Biotech & Pharma Professionals Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">80 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="6">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">The IT Sales Global Community</a></span>
                                                            <span class="uk-text-small uk-text-muted">47 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="7">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Healthcare Executives Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">33 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="8">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Luxury & Lifestyle Professionals</a></span>
                                                            <span class="uk-text-small uk-text-muted">254 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="9">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Information Security Community</a></span>
                                                            <span class="uk-text-small uk-text-muted">82 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="10">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">eMarketing Association Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">221 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="11">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Finance Club</a></span>
                                                            <span class="uk-text-small uk-text-muted">235 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="12">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Banking Careers</a></span>
                                                            <span class="uk-text-small uk-text-muted">233 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="13">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Java Developers</a></span>
                                                            <span class="uk-text-small uk-text-muted">163 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="14">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Information Technology: Software, Hardware, Computer, Developer, Cloud & Engineering</a></span>
                                                            <span class="uk-text-small uk-text-muted">276 Members</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <input name="user_groups_control" id="user_groups_control" type="hidden"/>
                                    </li>
                                    <li>
                                        <ul class="md-list md-list-addon" id="user_todo">
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_0" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Et ipsa non.</span>
                                                    <span class="uk-text-small uk-text-muted">Quia et quis labore et qui a quidem.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_1" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Perferendis molestiae ipsum architecto.</span>
                                                    <span class="uk-text-small uk-text-muted">Pariatur soluta possimus et ea et aperiam ut.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_2" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Amet eveniet culpa aut nulla.</span>
                                                    <span class="uk-text-small uk-text-muted">Ut autem qui voluptatibus exercitationem temporibus aut nemo impedit.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_3" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">Blanditiis officiis nostrum dignissimos id.</span>
                                                    <span class="uk-text-small uk-text-danger">Est eos tempore animi sed consequatur.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_4" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Quia nulla laboriosam.</span>
                                                    <span class="uk-text-small uk-text-muted">Soluta ab asperiores molestias placeat ipsum et.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_5" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Alias sed esse et omnis.</span>
                                                    <span class="uk-text-small uk-text-muted">Repudiandae cum laborum et consequatur numquam nam molestias dicta qui earum.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_6" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">Vel iusto consequatur quam dolore.</span>
                                                    <span class="uk-text-small uk-text-danger">Voluptate sit recusandae eveniet neque ipsum accusantium laudantium laboriosam optio.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_7" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Enim minima laboriosam quia.</span>
                                                    <span class="uk-text-small uk-text-muted">Eveniet fugit fugiat possimus laboriosam eaque quam doloremque.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_8" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Asperiores sit mollitia dolor enim.</span>
                                                    <span class="uk-text-small uk-text-muted">Enim in unde perspiciatis nemo maxime harum eius.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_9" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Ut vitae voluptate.</span>
                                                    <span class="uk-text-small uk-text-muted">Perferendis aut eveniet vero ea omnis enim aspernatur dolorem.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_10" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Omnis sed error voluptatem.</span>
                                                    <span class="uk-text-small uk-text-muted">Eos qui dolores consequatur reprehenderit culpa voluptates dolores doloremque iste provident.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_11" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Consequatur in ut ipsa eveniet mollitia.</span>
                                                    <span class="uk-text-small uk-text-muted">Odit ipsa quas quam vel laborum aut excepturi corporis.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_12" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">In voluptatum quae sit facere.</span>
                                                    <span class="uk-text-small uk-text-danger">Et optio quia amet blanditiis et rerum sapiente modi.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_13" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Dolor dolor temporibus nihil natus.</span>
                                                    <span class="uk-text-small uk-text-muted">Et quia exercitationem necessitatibus laboriosam exercitationem eligendi iste.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_14" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Error possimus rerum libero et.</span>
                                                    <span class="uk-text-small uk-text-muted">Qui quo consequuntur iusto in officiis tenetur voluptas repellendus aut commodi.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_15" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Eos architecto hic nobis veniam.</span>
                                                    <span class="uk-text-small uk-text-muted">Ut doloremque et provident fugiat nemo porro officia.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_16" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Consequatur facere veritatis eum tempore.</span>
                                                    <span class="uk-text-small uk-text-muted">Suscipit voluptate nihil omnis voluptatem ut.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_17" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Facilis recusandae minima.</span>
                                                    <span class="uk-text-small uk-text-muted">Minima possimus repudiandae vel quia.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_18" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Est repellat commodi consequuntur rem.</span>
                                                    <span class="uk-text-small uk-text-muted">Recusandae sapiente eveniet eum voluptas error doloribus.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_19" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">Amet velit veniam rerum.</span>
                                                    <span class="uk-text-small uk-text-danger">Magni aut nihil deleniti sed deserunt blanditiis exercitationem esse.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-large-3-10">
                        <div class="md-card">
                            <div class="md-card-content">
                                <h3 class="heading_c uk-margin-bottom">Other settings</h3>
                                <div class="uk-form-row">
                                    <input type="checkbox" checked data-switchery id="user_edit_active" />
                                    <label for="user_edit_active" class="inline-label">User Active</label>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="user_edit_role">User Role</label>
                                    <select data-md-selectize>
                                        <option value="">Select...</option>
                                        <option value="admin">Admin</option>
                                        <option value="super_admin">Super Admin</option>
                                        <option value="editor" selected>Editor</option>
                                        <option value="author">Author</option>
                                        <option value="none">None</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- momentJS date library -->
    <script src="bower_components/moment/min/moment.min.js"></script>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- file input -->
    <script src="assets/js/custom/uikit_fileinput.min.js"></script>

    <!--  user edit functions -->
    <script src="assets/js/pages/page_user_edit.min.js"></script>
    
    <!-- enable hires images -->
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html><div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-linkedin"></i>
                                                                </span>
                                                                <label>Linkdin</label>
                                                                <input type="text" class="md-input" name="user_edit_linkdin" value="<?php echo $_SESSION['linkedin'] ?>" />
                                                            </div>
                                                        </div>
