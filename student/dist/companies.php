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

    <title>Internship Portal</title>


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
                                            <span class="md-user-letters md-bg-cyan">up</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Et dicta.</a></span>
                                            <span class="uk-text-small uk-text-muted">Placeat facere iusto rerum neque beatae itaque.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Sed id recusandae.</a></span>
                                            <span class="uk-text-small uk-text-muted">Omnis culpa id possimus ducimus.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-light-green">ch</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Veritatis consequuntur ut.</a></span>
                                            <span class="uk-text-small uk-text-muted">Hic error delectus at fuga soluta.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Accusantium perferendis in.</a></span>
                                            <span class="uk-text-small uk-text-muted">Ut ab et et et dolores minus.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Inventore eum.</a></span>
                                            <span class="uk-text-small uk-text-muted">Quia minima qui earum commodi totam non corporis expedita.</span>
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
                                            <span class="md-list-heading">Illum aut.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Possimus hic ut animi veritatis ut.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Officiis ipsa.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Id dolorem magnam asperiores rerum libero quod tempore.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">At suscipit tenetur.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Velit asperiores magni nemo officiis voluptatem.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Quia magni.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Nobis dolorem amet sint ipsam placeat necessitatibus.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="page_user_profile.html">My profile</a></li>
                                    <li><a href="page_settings.html">Settings</a></li>
                                    <li><a href="login.html">Logout</a></li>
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
                <li class="act_section">
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
                <li>
                    <a href="user_profile.php">
                        <span class="menu_icon uk-icon-user"></span>
                        User Profile
                    </a>
                </li>
                <li>
                    <a href="page_user_edit.php">
                        <span class="menu_icon uk-icon-user"></span>
                        User Edit
                    </a>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Datatables</h3>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <table id="dt_tableTools" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Salary</th>
                            </tr>
                        </thead>

                        <tbody>
                         <?php
                            $connect = mysql_connect("localhost","root", "manshoon");
                            if (!$connect) {
                                die(mysql_error());
                            }
                            mysql_select_db("internship_portal");
                            $results = mysql_query("SELECT * FROM company LIMIT 10");
                            while($row = mysql_fetch_array($results)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['company_name']?></td>
                                    <td><?php echo $row['location_name']?></td>
                                    <td><?php echo $row['salary']?></td>
                                </tr>

                            <?php
                            }
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>

            
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
    <!-- datatables -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <!-- datatables colVis-->
    <script src="bower_components/datatables-colvis/js/dataTables.colVis.js"></script>
    <!-- datatables tableTools-->
    <script src="bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
    <!-- datatables custom integration -->
    <script src="assets/js/custom/datatables_uikit.min.js"></script>

    <!--  datatables functions -->
    <script src="assets/js/pages/plugins_datatables.min.js"></script>
    
    <!-- enable hires images -->
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>
