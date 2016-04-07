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

    <title>Altair Admin v1.0.0</title>


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
                                            <span class="md-user-letters md-bg-cyan">ef</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Et nihil.</a></span>
                                            <span class="uk-text-small uk-text-muted">Aperiam maxime nam veritatis nam numquam dolor.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Dolorem iure rerum.</a></span>
                                            <span class="uk-text-small uk-text-muted">Soluta consequatur est nobis in qui.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-light-green">nn</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Qui pariatur.</a></span>
                                            <span class="uk-text-small uk-text-muted">Ea pariatur sint ipsum quasi adipisci enim nihil.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Reprehenderit numquam asperiores.</a></span>
                                            <span class="uk-text-small uk-text-muted">Unde non quibusdam velit quod eum quasi aut expedita sequi et.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Quasi deserunt debitis.</a></span>
                                            <span class="uk-text-small uk-text-muted">Animi non voluptas velit earum sint cupiditate saepe tenetur eos.</span>
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
                                            <span class="md-list-heading">Eos eveniet.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Distinctio nostrum officiis neque aut quasi dolor nihil est.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Repudiandae repudiandae.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Numquam minima atque aliquid et aut dicta.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Vero doloremque ullam.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Mollitia laudantium eos quia voluptates aliquam.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Ut in reprehenderit.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Odio et eum optio asperiores omnis iure omnis.</span>
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
                <li class="act_section">
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

    <div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-width-large-8-10 uk-container-center">
                <div class="uk-clearfix">
                    <div class="md-top-bar-actions-left">
                        <div class="md-top-bar-checkbox">
                            <input type="checkbox" name="mailbox_select_all" id="mailbox_select_all" data-md-icheck />
                        </div>
                    </div>
                    <div class="md-top-bar-actions-right">
                        <div class="md-top-bar-icons">
                            <i id="mailbox_list_split" class=" md-icon material-icons">&#xE8EE;</i>
                            <i id="mailbox_list_combined" class="md-icon material-icons">&#xE8F2;</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card-list-wrapper" id="mailbox">
                <div class="uk-width-large-8-10 uk-container-center">
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">Today</div>
                        <div class="md-card-list-header md-card-list-header-combined heading_list" style="display: none">All Messages</div>
                        <ul class="hierarchical_slide">
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">20 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_10_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Rory Pagac PhD</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Rory Pagac PhD</span>
                                    </div>
                                    <span>Sit hic fugiat ab ratione est.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Et rerum quae magni id vero et pariatur qui ratione magni natus nesciunt asperiores quae hic autem quasi et impedit praesentium nemo quis totam nostrum aut illo earum nobis natus laudantium nam iure ea repellendus rerum sint unde error aut voluptatem ex aut et nihil facilis placeat animi similique quod soluta et dolor earum itaque amet sunt magni ab aut occaecati laborum ab enim atque blanditiis ut cumque aut beatae vel quisquam repudiandae natus nobis quod tempora sequi magni exercitationem et ea et explicabo sunt fugit voluptatem sit omnis molestias sint velit molestiae nisi consequatur molestiae sapiente molestiae magni qui quo excepturi veniam at maiores voluptatum corporis blanditiis error numquam occaecati debitis debitis minus distinctio ea qui nobis omnis sunt eveniet reprehenderit nihil suscipit animi harum mollitia aut et debitis quam aliquam facilis consequuntur quos commodi dolorem doloribus est commodi nam impedit quis nobis odit nemo mollitia commodi id cumque commodi est minima odio nostrum repellendus ipsum rem recusandae exercitationem possimus dolorum recusandae illum deleniti suscipit cupiditate facere labore et eligendi quia deleniti consequatur aut atque quas qui quod aut in explicabo delectus ut iure consequatur consequatur reiciendis nostrum quo omnis est sit temporibus aut eos voluptatem culpa molestias qui autem atque soluta maxime tempore consequatur sit enim ipsa et ea quas tempore rerum labore architecto odit et qui alias tenetur.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_784">Reply to <span>Rory Pagac PhD</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_784" id="mailbox_reply_784" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">20 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_05_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Emmanuelle Bode MD</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Emmanuelle Bode MD</span>
                                    </div>
                                    <span>Deserunt fuga nemo eum quo culpa.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1449">Reply to <span>Emmanuelle Bode MD</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1449" id="mailbox_reply_1449" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">20 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_10_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>boyer.caroline@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>boyer.caroline@gmail.com</span>
                                    </div>
                                    <span>Dicta molestiae molestiae minus eveniet magni quaerat.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_10">Reply to <span>boyer.caroline@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_10" id="mailbox_reply_10" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">20 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">ke</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>luettgen.minnie@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>luettgen.minnie@hotmail.com</span>
                                    </div>
                                    <span>Molestiae similique fuga incidunt doloribus id mollitia.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1204">Reply to <span>luettgen.minnie@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1204" id="mailbox_reply_1204" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">Yesterday</div>
                        <ul class="hierarchical_slide">
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">pv</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>kkuhlman@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>kkuhlman@hotmail.com</span>
                                    </div>
                                    <span>Voluptatum vel sit velit.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Repellendus eveniet autem dolores non aliquam asperiores dignissimos est esse culpa eveniet repudiandae autem quibusdam sint laborum dolorem non perspiciatis illo deserunt error nihil sit mollitia sint inventore dignissimos mollitia illum animi distinctio vel vitae accusamus reprehenderit est quis sit occaecati facere aut soluta tenetur iste ut soluta hic quia culpa non et qui non corporis dolorum quidem dicta eaque autem rerum dolorum et veniam nobis delectus corrupti error voluptatem sit consectetur quia cupiditate voluptatem consequatur minus velit qui fugiat ut harum placeat molestias voluptas aut voluptatem qui adipisci possimus in ratione at qui sit dolor iste minus quia optio blanditiis voluptatem voluptatem fugiat enim hic et qui atque voluptatum et dolor provident ullam omnis rerum ea eos consequuntur odit molestiae quis saepe magni quo ut libero sint soluta quia id dignissimos quia ducimus laboriosam velit aut mollitia minima consequatur rerum ipsa possimus provident rerum porro impedit distinctio et repellendus velit possimus dolores consequatur quos mollitia veritatis accusantium temporibus dolorem atque rerum aut repudiandae ut aliquid sint consequuntur quo aut et a esse eaque sit facilis quia suscipit deleniti et id ut ex quaerat et corporis cumque voluptas quis similique magnam quis quae sapiente dolorem dicta sed quia et cum voluptatem quod et ut ut sequi accusamus laboriosam ex eum aliquid cum sit est ratione voluptas nihil aut doloribus consequatur quia repudiandae qui id itaque est vero minima deserunt tempora omnis aliquid expedita ut est voluptas vitae ea quam animi quo libero expedita aut voluptas cupiditate corrupti error neque dolorem sunt debitis voluptatem sit amet in minus quo et repudiandae delectus aut veniam animi iusto natus ut aperiam fuga ab at voluptatum veritatis dolores voluptatibus ut inventore nisi minima est ipsam odio non aperiam maxime ipsam soluta blanditiis ea laudantium veritatis error deleniti magni adipisci tempore sint distinctio asperiores perspiciatis et suscipit consequatur dolores ipsam similique porro sed quo distinctio quis et ut exercitationem voluptatem repellendus et rerum id suscipit repudiandae autem repudiandae iusto dolorem quae dignissimos qui culpa accusantium recusandae itaque molestiae velit eum quas quisquam aut et perspiciatis porro id ut odit consequatur nesciunt ut suscipit eum aut consequatur unde et saepe in fugiat ut dolorum accusantium sit possimus deserunt quidem rerum vel reprehenderit voluptatum velit velit consequatur et nihil rerum molestiae dolor natus deserunt voluptate sint molestiae doloremque sed magni at temporibus amet eligendi sunt nam ut vel assumenda qui soluta aut corporis ullam est quibusdam ipsam sunt dolor consectetur dolor non nostrum et nobis quibusdam animi pariatur quia non vero at corrupti sed modi aut eius molestias natus animi aut maiores ex saepe laudantium iste dolorem ratione ducimus occaecati deserunt corrupti officia sint qui sint alias placeat et esse quasi consectetur et reprehenderit ad sit doloribus iste rerum mollitia maxime ullam laboriosam consectetur sit quis magnam autem aperiam aliquid fuga architecto recusandae et porro qui animi esse accusantium quia nam debitis sapiente vitae ipsam numquam a natus et nihil accusamus nemo consequatur impedit et ad placeat voluptatum officia occaecati qui distinctio velit et impedit itaque consequatur repellat earum occaecati eum vel quis itaque veritatis voluptatibus et hic voluptatem vel quis accusantium voluptatum aperiam suscipit harum et iusto sed sequi qui voluptatem ipsa repudiandae sint placeat voluptas beatae et aut eaque laborum at explicabo adipisci eius aut minima provident dolorem inventore unde mollitia autem inventore et qui optio et cumque odit harum voluptatem ipsam voluptatibus odio earum dolorum rerum nisi sit sed eum aliquam dolorem nihil pariatur nemo aliquid reprehenderit ut voluptatem minima enim est officiis sequi sunt nostrum accusantium eum rerum et earum sed quod ut temporibus rem a modi nesciunt voluptatem modi et autem est qui illum autem non perspiciatis et quam et dignissimos fugiat dolor assumenda id corrupti quia fugit est eum rerum et iure quia omnis est qui numquam fugit vero a consequuntur repellat aut id voluptatem voluptatem ab sed deleniti omnis laborum tenetur facere officiis modi aspernatur nisi possimus quidem quis laborum quam repellendus aperiam veniam earum aperiam porro quas deserunt et odio est veniam culpa excepturi quo eos tempora non dignissimos quisquam esse distinctio dolore aut illo quia aperiam ut voluptatem quo corrupti et veritatis sunt est ut officiis voluptatum enim possimus aut aut et dolorem suscipit expedita qui aut eos id eum molestias adipisci perspiciatis libero sed adipisci rerum repellat quidem tempore sint et voluptatem est in iste ut corrupti dignissimos doloribus in ut nihil beatae quo necessitatibus quasi eveniet dolor id sit tempora ut officia vel dolorem veniam harum similique sed vero mollitia et voluptatum vero distinctio adipisci ut molestias molestiae aut aliquam sit sint ratione occaecati veritatis quas et qui autem blanditiis similique optio consectetur commodi id unde temporibus sit in voluptas unde earum omnis velit maiores omnis deserunt quidem nobis fugiat voluptas hic repellendus numquam aliquam totam labore corporis at vero itaque deleniti ipsum amet repudiandae eos voluptas recusandae rerum maiores voluptates nihil in sed nemo nobis voluptas aut dolor maxime animi iure ullam tempore sit qui voluptates beatae ut provident rerum nisi reprehenderit officia labore commodi voluptas qui omnis quisquam repellendus sit libero earum adipisci dolores aut officia quibusdam recusandae vero alias nesciunt minus nulla soluta neque nemo et ipsa expedita alias aut ab necessitatibus blanditiis maxime similique est amet cum ea quibusdam inventore eius ut perferendis iure sed et illo quia expedita amet totam ad neque molestiae numquam rerum est est consequuntur rerum consequatur quam qui et reprehenderit amet aperiam veritatis qui ut recusandae quo perferendis reprehenderit autem harum consequuntur sint aut temporibus voluptatem iste vel ut voluptas facilis deleniti earum eveniet officiis non sit aut neque illo ut optio repudiandae delectus et fugit accusantium est mollitia dolores possimus voluptates dolores est quia perferendis quas tempore omnis et enim eos sunt nostrum molestiae et autem vel est dicta laborum dolor quis corporis ea neque praesentium autem quia et consequatur dolore ut iure veritatis magnam similique eum molestiae quia iure et et voluptatem aut doloremque assumenda rerum nesciunt quia quam at ullam quisquam saepe tempora aliquam voluptas ut error natus quia quam eum dolorem aut eligendi cupiditate exercitationem doloribus nemo ipsa quidem officiis blanditiis ipsam deserunt consequatur delectus consequatur dolores necessitatibus modi magni aut impedit modi aut sit ut repudiandae aut ut magni distinctio consequatur ut nemo in aut fugit dolorum autem ipsam iusto earum voluptates temporibus asperiores suscipit quaerat eaque odit doloribus et ipsam et aperiam tempore sed et sequi ea vel harum eius est cupiditate et dolorum voluptate molestias dolorum pariatur similique veritatis nesciunt quia iste earum nihil sit et vero qui repellendus voluptates iste qui minus voluptas vitae quam et et hic soluta nihil excepturi eveniet eaque.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_5925">Reply to <span>kkuhlman@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_5925" id="mailbox_reply_5925" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">dm</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>mschimmel@hills.biz</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>mschimmel@hills.biz</span>
                                    </div>
                                    <span>Sunt quo blanditiis et quis exercitationem quam.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Totam quibusdam cumque veritatis quia reiciendis velit sapiente totam aut blanditiis eveniet harum ducimus accusamus consequuntur velit perferendis fugit iusto omnis qui maxime voluptatibus quis laborum temporibus atque quia neque occaecati quia et sit in et et rerum et hic consectetur sint consequatur aperiam rerum voluptatem illo distinctio distinctio eveniet voluptas recusandae delectus eligendi quia delectus dolorum ut id voluptatem repudiandae rerum optio quia saepe dolorem et ipsa blanditiis accusamus sed aliquam amet consequuntur incidunt molestias totam est similique quia sunt dolores dolorem temporibus debitis ut eveniet consequatur voluptatem possimus blanditiis rem sit autem qui vero nihil sed accusamus perferendis est est est velit ea aliquam eligendi deleniti voluptatem nemo temporibus accusamus voluptas fuga accusamus rem iure dolore porro rerum sequi commodi ea et ducimus nisi et incidunt inventore dolorem dolores fuga nulla dicta ut voluptatem modi culpa rerum sed voluptatem officiis quo enim cupiditate laudantium iure commodi similique ab consequuntur temporibus provident aut ut repellendus sapiente quos quae soluta aut sit impedit aut dolore officiis quo excepturi ipsum quia fugiat dicta facilis totam in labore est libero harum ut qui sint consectetur quisquam molestias voluptas eveniet rerum et fugit modi voluptatem velit repellat quisquam nam odio optio numquam reiciendis adipisci odio tempora modi et libero aut illum fugit iusto magni aut doloribus esse commodi dolorem accusantium maiores modi odit architecto minima est voluptatem harum consequatur ratione cupiditate laborum exercitationem nam rem quasi amet dolore eos velit error sapiente iste qui dignissimos accusantium molestiae voluptatum est perferendis ut dolore omnis eligendi et vero distinctio quae molestiae optio qui dolores sed vitae qui magnam molestias aliquam officiis culpa minus dolor tenetur et rerum ducimus consequuntur quos illo omnis explicabo occaecati nemo assumenda voluptatem laudantium rerum voluptatum sequi nesciunt neque ipsam unde quia nesciunt sunt qui aut dolor vitae quasi quo nihil est expedita tenetur recusandae rerum autem enim minima sit consectetur vel non natus ex est voluptatibus delectus voluptas dolorem et vel nam eveniet consequatur possimus dolores provident quam aperiam est dolorum quis sint ipsa a sed quis enim ullam iste enim architecto qui hic enim facere nihil et tempore iste id cum et quia molestiae quisquam nihil sint odit explicabo quis recusandae dicta sed beatae dolorem et temporibus ex et occaecati molestiae sint tempora nisi et sunt distinctio odio sunt quos dolores eveniet ipsa iste a tenetur neque reiciendis occaecati illo autem dolorem eveniet aspernatur nobis neque voluptatem excepturi fugiat dolores rem saepe accusamus et excepturi officia quis libero rerum ipsum accusamus qui est minima perferendis dolor.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_9060">Reply to <span>mschimmel@hills.biz</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_9060" id="mailbox_reply_9060" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">nx</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>wnienow@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>wnienow@gmail.com</span>
                                    </div>
                                    <span>Voluptatibus provident quo voluptatibus rerum adipisci quod.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Voluptatem debitis consequatur sint qui et non ut ipsam non in voluptatem quis vitae qui velit non at temporibus unde ipsa reiciendis consectetur nihil sit libero ipsa repellat qui molestiae qui veniam veniam labore unde atque et dolor provident ab quae tempora commodi sint fuga quia iusto culpa consequatur qui omnis expedita magni ut debitis distinctio cupiditate provident magni quam velit vero quia ducimus natus fugit reiciendis molestiae est sit asperiores enim quod sint eaque perferendis dolor harum alias velit voluptates nulla natus autem tenetur animi harum magni eos quaerat necessitatibus et accusantium exercitationem nesciunt perspiciatis quaerat ad animi nemo consectetur sunt odio qui enim corrupti optio qui sequi quia placeat enim sunt enim accusamus eos ut quae illum et distinctio quam eaque dicta fugiat perferendis suscipit non dicta voluptatem laborum sunt eveniet quia odio molestiae et qui odit tempore omnis quo consequatur doloremque voluptas tenetur porro molestiae quo dolorem eos magni delectus distinctio consequuntur et est dolores nam deserunt nesciunt magni aut accusantium voluptatem distinctio ab amet quis omnis aut omnis et earum nam omnis nemo sed excepturi fugit voluptatibus id reiciendis et eum voluptas numquam quibusdam et suscipit molestiae ut expedita iure quo aperiam soluta unde quos dicta aut dolor est sit quas incidunt recusandae illo ut eum aperiam ut asperiores sed mollitia mollitia blanditiis ut accusantium impedit occaecati et quibusdam sit blanditiis nobis totam nesciunt vel ut placeat nemo accusantium repellendus ea provident asperiores voluptas ratione vitae ea voluptates qui ad consectetur minus voluptatum quas et assumenda ut quo aut architecto error velit dolores maxime quis doloribus laborum atque voluptas esse consequatur labore quos perspiciatis fugiat reiciendis non nostrum quia impedit sunt est velit dolores sit error dolorum tempora mollitia nihil reprehenderit ut reprehenderit placeat et et voluptatem iste deserunt eaque cumque ea vel consequatur in quis sed distinctio modi dolores illo sed eos nobis dolore nihil deleniti optio cum voluptates maxime tempora et est quia ut repellat nulla quo alias recusandae molestiae doloremque magnam nesciunt est suscipit ut repellendus eos architecto voluptatum enim esse rem sit dolorem quos velit ut omnis dolorem totam accusamus neque iure dolorem facere voluptatem esse qui doloribus maiores amet eaque enim velit magnam voluptatem veniam est vitae minima assumenda harum exercitationem aut reprehenderit laudantium excepturi temporibus temporibus sint a ea est libero delectus provident et aut cumque rerum et minima animi eius sapiente rerum dignissimos recusandae omnis quia fugit soluta officiis corporis ut delectus soluta qui dolorum eius sed nesciunt autem molestias at culpa et laborum aut pariatur enim officia vel suscipit dolore sapiente explicabo at aperiam sed ratione vel voluptatem quod laboriosam qui veniam quo nihil deserunt laudantium sequi laboriosam eos asperiores placeat perspiciatis voluptas praesentium soluta et illo minima aut dolores voluptates omnis qui eum cumque debitis nihil rerum debitis voluptatem qui voluptatem at aliquam est modi aut cum laboriosam aut quis ab in aperiam voluptatem delectus maiores quam doloribus dolores pariatur totam ipsa omnis ut beatae qui est animi eligendi aut dolores temporibus cumque et enim corrupti ut ut dolorum qui facere enim corrupti eum maxime quaerat quam deleniti qui veniam quaerat necessitatibus perspiciatis et voluptas mollitia totam vel illum quidem perspiciatis voluptas vel aut labore modi ipsum non voluptas corporis blanditiis autem adipisci tempora libero minus quis debitis qui odit earum voluptas tenetur et ullam eum facilis cumque quos deserunt harum repellat sed neque aut numquam cum quia inventore illum enim eligendi quis fuga mollitia nulla eveniet quos odio quo similique est ullam laborum voluptatem molestiae dolorum quae expedita nam nobis eum quidem ut esse consequatur fugit omnis velit facere ut ut ipsum qui sint quia quia modi non omnis ad quaerat maxime aliquam quisquam possimus delectus deserunt rerum tenetur rerum voluptatem quod repellendus mollitia velit mollitia repellat veniam quo sed praesentium vel dolor aut quam eius velit repellat culpa cumque non et illo vitae doloribus reiciendis aliquam ea hic sed animi vel nihil quae ut explicabo facilis aut eius nam excepturi sint sed suscipit itaque alias perferendis eligendi quis vero magnam eius eaque porro eum maiores earum earum ex delectus veniam hic laudantium voluptas id omnis dolores odit ex excepturi id sit qui dolore quod magni et impedit officiis voluptas et praesentium similique dolor aliquam quidem eveniet quam incidunt ea ducimus fuga neque eius maxime vitae sed quia qui nam tempore necessitatibus sapiente sequi harum facilis repudiandae et nesciunt omnis a ut nihil sit necessitatibus voluptates libero omnis eos quo rerum sed ut sunt totam praesentium delectus possimus et neque consequatur excepturi ut repellendus adipisci quaerat doloribus necessitatibus perferendis quis pariatur voluptatum culpa nostrum et velit quia dolore et facere animi deleniti aut voluptatem sint corporis alias et et fuga nesciunt dolorum est quia id tempora voluptatem nam modi quis doloremque quibusdam adipisci harum nobis ea quaerat tempore et ut sit rerum veritatis quos est dolor doloribus eius modi itaque sunt quia eos suscipit saepe molestiae aut atque quis voluptas eveniet aut qui commodi error assumenda aliquid nobis quia et fugiat totam cumque ex quo id odit est et quas officiis sint cum distinctio ipsum voluptatem vel quo odio molestiae dolores quae voluptas fuga et modi ducimus ut cum quis error voluptatem tenetur cupiditate saepe est occaecati nulla quia mollitia facere vel qui qui ut quibusdam inventore et corrupti mollitia illum tempore aut aut rem quia eius aut qui deleniti ipsam officiis vel rerum voluptatem beatae odio rerum totam quia saepe qui qui molestiae porro fugit molestiae quam quidem consequatur amet molestias amet unde dolor totam expedita ut molestiae et illo dicta totam illo sint sed sunt velit libero eos facilis necessitatibus suscipit culpa omnis beatae ut quo aut sit quisquam voluptatem quia quas dolorum nesciunt exercitationem odio voluptas non maxime excepturi qui quam est qui quasi quas quia sed iste tempora error rem omnis tenetur minus voluptatibus iusto error dicta natus repudiandae et illo facere est minus minima officiis dicta quis error in doloremque vel excepturi eum tempore qui quia laudantium id a est sit amet ut culpa libero aspernatur enim eius odit placeat magni quas ad sed sapiente itaque quia exercitationem rerum non deleniti occaecati et ea omnis dolores consequuntur cum assumenda totam ullam non sed dolorem autem aut nobis aut consequatur eveniet et sed non tempora ducimus ea quo fugiat porro soluta ex sit ad veritatis quas suscipit illum voluptatem veniam veniam nostrum autem nobis sit natus asperiores dolorem veritatis sit incidunt perspiciatis dolor corporis doloremque deleniti in atque aperiam ullam corporis laudantium nihil ab consequatur incidunt sunt aut officia voluptatibus.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1737">Reply to <span>wnienow@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1737" id="mailbox_reply_1737" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_07_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>stanford.reynolds@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>stanford.reynolds@hotmail.com</span>
                                    </div>
                                    <span>Ut architecto sed qui aut ea praesentium.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Molestiae deserunt cupiditate dolores aut eaque corporis repellendus accusantium ipsum quam nulla dolor esse qui et doloribus voluptas exercitationem facilis ea eius consectetur aspernatur similique velit sit quam suscipit quam dolor enim optio aut ab voluptatibus excepturi aut voluptatem qui animi maiores fugit deleniti optio repellat veniam velit dolorem culpa perspiciatis aliquid voluptatem eos dolores reprehenderit est eaque doloribus iure laborum cupiditate voluptates iste omnis excepturi error est illo temporibus rerum atque voluptatem laboriosam maiores numquam omnis aut animi accusantium maiores error aut in nemo rerum qui amet dolorem dolorum vel culpa autem delectus ut enim error consequuntur sunt saepe tenetur dolorem minus ab quisquam voluptatem et at ut consequatur aut esse similique similique ipsa quisquam et et excepturi necessitatibus ut explicabo placeat nihil natus reprehenderit vel eos quis a sapiente omnis ullam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_6896">Reply to <span>stanford.reynolds@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_6896" id="mailbox_reply_6896" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">hp</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>alivia81@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>alivia81@gmail.com</span>
                                    </div>
                                    <span>Delectus blanditiis dicta totam vitae.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Est modi libero cum consectetur minima voluptate occaecati sequi reprehenderit aut voluptatibus minima et necessitatibus cum adipisci consequatur mollitia id accusamus adipisci rerum distinctio error doloribus harum quasi illum totam expedita deleniti animi sunt temporibus ea quae sit ut incidunt ipsum rerum non omnis repellat illo velit expedita optio ad est quidem fugiat eos et aut esse rerum mollitia laborum fugiat non ea dolores aut non beatae exercitationem eum veniam qui consequatur quo tempora repellat veniam numquam ea itaque necessitatibus odio exercitationem assumenda commodi consequatur rem architecto consequuntur ut recusandae est nesciunt quasi ipsum quisquam tenetur nesciunt laborum enim assumenda molestias vero rerum omnis dolorem dolore officiis pariatur et id neque voluptas beatae dolorem repellat iste corporis aut dicta perferendis qui sapiente laboriosam unde sunt quia quasi cumque mollitia molestiae mollitia perferendis qui officiis voluptas voluptatem est unde amet voluptas in ab minima debitis culpa earum aspernatur blanditiis officia.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_7714">Reply to <span>alivia81@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_7714" id="mailbox_reply_7714" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_10_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>sanford.zoe@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>sanford.zoe@gmail.com</span>
                                    </div>
                                    <span>Aut exercitationem sint accusamus aut.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quo vitae aut fugiat dolorem voluptate est fugit soluta maiores eos architecto adipisci dolorum amet vero sequi eos vitae inventore aut quia consequuntur eius voluptatem sequi qui consectetur et cum quos est minima et exercitationem assumenda necessitatibus in dolorem quos voluptas nesciunt quaerat in aliquid et sequi quis officiis sunt omnis voluptas earum dolores pariatur sunt laboriosam iste laudantium porro maiores quis nulla eos in ut architecto aut officia quia libero minus eos optio corrupti voluptatem ipsam nemo hic impedit deserunt sed accusantium velit ullam quia qui impedit aspernatur ipsum corporis dolores et architecto quisquam voluptas eum similique hic ut iure consequatur est accusantium incidunt in hic ea quo excepturi ipsum sequi sit ea maiores vel autem magni sint tempore tempore sequi.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_3794">Reply to <span>sanford.zoe@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_3794" id="mailbox_reply_3794" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">iq</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Rosario Kuhic</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Rosario Kuhic</span>
                                    </div>
                                    <span>Qui amet id explicabo amet optio voluptas.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Voluptatem ex qui necessitatibus voluptate distinctio eos quas ut sed error sit ut eveniet ex soluta distinctio dolores ducimus commodi et eius et adipisci maiores eaque quia architecto sed ipsa vero nulla quasi dolore qui non reprehenderit non aut aut aspernatur dolore eum illo repellendus nemo occaecati quia saepe qui maiores veniam quasi assumenda quia maiores ut exercitationem aliquid consectetur quo ut et voluptas et in repellat et soluta tempora sit et ut ullam ab quod modi fuga tempore id quia dolores nihil numquam autem quia sequi cupiditate in quisquam dolorem magni incidunt incidunt at molestiae veritatis hic et porro provident laboriosam labore architecto nemo quo beatae vel ipsum ut laudantium eos consequuntur in dolorem occaecati qui cupiditate excepturi quia autem autem saepe a vel ad blanditiis accusantium ipsa voluptas maxime porro voluptatibus tempore est consectetur sed inventore odio consectetur cumque est iste veniam quia omnis occaecati omnis libero quis voluptatem est totam sint quos animi est veniam eligendi laborum reiciendis qui quia voluptatem architecto praesentium et sit nulla molestiae consectetur cum et placeat est incidunt ex qui quae veritatis sint id exercitationem iure aut et nihil optio voluptatem cum atque sed aut quis et quis ut at accusamus sed vitae fugit sed inventore est voluptatibus facere voluptatem illum magnam vel ut voluptatum est tempore animi blanditiis in et consequatur beatae minus ipsam ut quod et ut adipisci aut voluptatem repellat sit harum non amet eius natus qui aperiam sunt iure aut ipsam repellendus modi similique a totam aut ducimus ea aliquid aliquid quo quos laudantium dolor dignissimos mollitia quo ipsa vero id velit eaque laborum id repellendus ex ea quo soluta laboriosam rerum commodi facilis distinctio qui molestiae ipsum enim non ut officia occaecati ad voluptas deleniti nihil perspiciatis sint ut repellendus rem excepturi placeat maxime aliquam est in id rem provident rem qui rerum beatae quia officiis tenetur voluptatem voluptatem quis laboriosam assumenda eveniet perspiciatis aliquam dolores doloribus magni sed porro temporibus voluptas quasi aut ab iusto error corrupti vel assumenda non et et recusandae nostrum nihil officiis fugit eum eos ab quasi omnis quia praesentium et maiores labore eveniet ea eaque aut tempora sapiente dolorem illo dolorum dolores iure ut modi dolore ea et ad maiores et voluptatem enim accusantium rerum fugit rem possimus repellat repellendus quo recusandae voluptas voluptatum maiores omnis eum numquam facilis impedit quos sit fugiat non quidem placeat magni non omnis accusamus doloribus nesciunt molestiae ut et dolore tempore et rerum quis ab et doloremque numquam qui ut voluptate quod voluptatem dolor dolorem ipsa voluptatem omnis est asperiores animi doloremque ab dolorem eaque nesciunt rerum rerum nemo ut atque eum id totam enim voluptas velit inventore aperiam ipsam ipsum itaque eligendi inventore quia occaecati quia vel ut est in a rem adipisci esse quia excepturi blanditiis ut aliquam molestiae laborum quia sit iusto deleniti commodi dicta et quibusdam et nobis dolores voluptatem rerum repellendus enim labore quis et nobis at eligendi porro et ut molestiae commodi iste sint excepturi laudantium ratione autem quis a accusantium et omnis debitis repellat sequi itaque dolore ipsum temporibus est exercitationem laboriosam maiores quisquam magnam nulla dolores molestias qui est dolorum aspernatur nihil fugit at officia eos beatae sint qui eos culpa esse qui autem eum ab minima voluptas asperiores temporibus quia atque eligendi aut qui quia molestias tempora molestias reiciendis fugiat consequuntur quod provident aliquam nobis et enim rem possimus qui quas ullam impedit sint ipsa quasi quia delectus a ex aut nemo doloremque cupiditate laudantium sint et culpa corporis non qui neque nemo temporibus odit at reiciendis tempore omnis quo veritatis autem culpa quaerat illo cum quia officiis consectetur illo explicabo itaque consectetur ut nostrum ex quasi ullam nisi sapiente perferendis quos sit illo autem enim adipisci possimus nisi tempore velit ut sapiente esse omnis delectus et doloremque esse quasi autem animi optio voluptatem aut et vitae hic est magnam dignissimos cumque voluptate ab laboriosam blanditiis expedita amet ut quis architecto blanditiis eum tempora in necessitatibus earum expedita ut placeat suscipit ut qui corporis dolorum ut culpa nesciunt illo sint qui quis commodi omnis sit ab minus commodi rem dolorem ut rerum fugiat pariatur ea voluptatem debitis natus voluptatem magnam et sed qui ut et et aliquid molestiae dignissimos dignissimos quos doloremque consequuntur et animi saepe quidem ratione non ut eum quo enim officiis in expedita ea dicta quos eos beatae ea distinctio in incidunt cumque et placeat deleniti occaecati eligendi rem omnis quod quibusdam omnis repudiandae aut rerum quo natus magni quia quo facilis quaerat autem ab quam illo deserunt mollitia non commodi quo atque rerum iste aperiam vel eos quod voluptatem ipsam et veritatis est et at est aut assumenda labore ab consequatur eaque dolores numquam eveniet ratione quod suscipit animi nisi eum voluptatem in cupiditate reprehenderit est corrupti quam ab aut distinctio est sed similique illum laborum ab ipsa excepturi blanditiis ab deleniti autem eaque consectetur quia sunt eveniet rerum dolores harum deserunt sed tempora soluta velit eaque voluptatem nulla et eius dicta est porro dolor laboriosam voluptatem ratione quisquam nihil modi est cupiditate voluptas soluta eum rem et eligendi in corporis alias suscipit ea cupiditate molestias excepturi ea vel voluptatem ut quis distinctio eum beatae harum quo rerum quaerat expedita veniam voluptates debitis nisi quia qui sed blanditiis fugiat dignissimos ut nihil nesciunt maxime reprehenderit quo provident repellat officiis id quo quis consequuntur itaque aut esse at odio omnis voluptatem tempora et autem nam impedit excepturi illum consequatur dignissimos aut recusandae deleniti fugit est ut consequuntur sequi labore molestias molestias autem nisi et eius distinctio nisi excepturi perspiciatis architecto modi dolores aut tempora consequatur molestiae ut nobis magni vel aut rerum eius delectus corporis ab ut ut quod enim magni aut voluptatem neque rerum iusto occaecati nisi necessitatibus sunt laudantium aut ipsam delectus illum adipisci doloremque animi eius omnis sit ut sapiente ut reprehenderit.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_3967">Reply to <span>Rosario Kuhic</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_3967" id="mailbox_reply_3967" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">This Month</div>
                        <ul class="hierarchical_slide">
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_02_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>bins.ericka@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>bins.ericka@hotmail.com</span>
                                    </div>
                                    <span>Error ea architecto nostrum sed nostrum.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_726">Reply to <span>bins.ericka@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_726" id="mailbox_reply_726" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">17 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">ib</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>dhalvorson@schmitt.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>dhalvorson@schmitt.com</span>
                                    </div>
                                    <span>Debitis nisi minima pariatur harum accusantium.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_656">Reply to <span>dhalvorson@schmitt.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_656" id="mailbox_reply_656" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">17 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_06_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Cullen Mohr</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Cullen Mohr</span>
                                    </div>
                                    <span>Enim quas iste quae distinctio.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1127">Reply to <span>Cullen Mohr</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1127" id="mailbox_reply_1127" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">17 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">ot</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Ardella Lockman</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Ardella Lockman</span>
                                    </div>
                                    <span>Eaque doloribus blanditiis molestias.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Et rerum quae magni id vero et pariatur qui ratione magni natus nesciunt asperiores quae hic autem quasi et impedit praesentium nemo quis totam nostrum aut illo earum nobis natus laudantium nam iure ea repellendus rerum sint unde error aut voluptatem ex aut et nihil facilis placeat animi similique quod soluta et dolor earum itaque amet sunt magni ab aut occaecati laborum ab enim atque blanditiis ut cumque aut beatae vel quisquam repudiandae natus nobis quod tempora sequi magni exercitationem et ea et explicabo sunt fugit voluptatem sit omnis molestias sint velit molestiae nisi consequatur molestiae sapiente molestiae magni qui quo excepturi veniam at maiores voluptatum corporis blanditiis error numquam occaecati debitis debitis minus distinctio ea qui nobis omnis sunt eveniet reprehenderit nihil suscipit animi harum mollitia aut et debitis quam aliquam facilis consequuntur quos commodi dolorem doloribus est commodi nam impedit quis nobis odit nemo mollitia commodi id cumque commodi est minima odio nostrum repellendus ipsum rem recusandae exercitationem possimus dolorum recusandae illum deleniti suscipit cupiditate facere labore et eligendi quia deleniti consequatur aut atque quas qui quod aut in explicabo delectus ut iure consequatur consequatur reiciendis nostrum quo omnis est sit temporibus aut eos voluptatem culpa molestias qui autem atque soluta maxime tempore consequatur sit enim ipsa et ea quas tempore rerum labore architecto odit et qui alias tenetur.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_510">Reply to <span>Ardella Lockman</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_510" id="mailbox_reply_510" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">17 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_01_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>gudrun97@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>gudrun97@hotmail.com</span>
                                    </div>
                                    <span>Et ea quam non exercitationem et.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1319">Reply to <span>gudrun97@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1319" id="mailbox_reply_1319" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">16 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">xj</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>felicita16@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>felicita16@gmail.com</span>
                                    </div>
                                    <span>Voluptatum vel fugit rerum labore esse vitae.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1087">Reply to <span>felicita16@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1087" id="mailbox_reply_1087" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">13 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">ng</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Prince Hilll III</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Prince Hilll III</span>
                                    </div>
                                    <span>Qui libero ipsum sit itaque.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_2633">Reply to <span>Prince Hilll III</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_2633" id="mailbox_reply_2633" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">13 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_03_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>muller.cecile@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>muller.cecile@gmail.com</span>
                                    </div>
                                    <span>Minus ea ea officia et ut nobis.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Et rerum quae magni id vero et pariatur qui ratione magni natus nesciunt asperiores quae hic autem quasi et impedit praesentium nemo quis totam nostrum aut illo earum nobis natus laudantium nam iure ea repellendus rerum sint unde error aut voluptatem ex aut et nihil facilis placeat animi similique quod soluta et dolor earum itaque amet sunt magni ab aut occaecati laborum ab enim atque blanditiis ut cumque aut beatae vel quisquam repudiandae natus nobis quod tempora sequi magni exercitationem et ea et explicabo sunt fugit voluptatem sit omnis molestias sint velit molestiae nisi consequatur molestiae sapiente molestiae magni qui quo excepturi veniam at maiores voluptatum corporis blanditiis error numquam occaecati debitis debitis minus distinctio ea qui nobis omnis sunt eveniet reprehenderit nihil suscipit animi harum mollitia aut et debitis quam aliquam facilis consequuntur quos commodi dolorem doloribus est commodi nam impedit quis nobis odit nemo mollitia commodi id cumque commodi est minima odio nostrum repellendus ipsum rem recusandae exercitationem possimus dolorum recusandae illum deleniti suscipit cupiditate facere labore et eligendi quia deleniti consequatur aut atque quas qui quod aut in explicabo delectus ut iure consequatur consequatur reiciendis nostrum quo omnis est sit temporibus aut eos voluptatem culpa molestias qui autem atque soluta maxime tempore consequatur sit enim ipsa et ea quas tempore rerum labore architecto odit et qui alias tenetur.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1122">Reply to <span>muller.cecile@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1122" id="mailbox_reply_1122" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">11 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_02_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Janice Grady</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Janice Grady</span>
                                    </div>
                                    <span>Omnis quia natus architecto voluptatem nobis.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_2639">Reply to <span>Janice Grady</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_2639" id="mailbox_reply_2639" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">9 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_09_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>larson.nadia@yahoo.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>larson.nadia@yahoo.com</span>
                                    </div>
                                    <span>Eligendi non quis alias illo sint.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1636">Reply to <span>larson.nadia@yahoo.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1636" id="mailbox_reply_1636" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">7 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">tx</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Thalia Bogan</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Thalia Bogan</span>
                                    </div>
                                    <span>Ipsa ratione voluptas distinctio sapiente.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_398">Reply to <span>Thalia Bogan</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_398" id="mailbox_reply_398" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">6 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_02_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Mr. Julien Cole IV</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Mr. Julien Cole IV</span>
                                    </div>
                                    <span>Expedita eum nostrum qui officia et placeat.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_2140">Reply to <span>Mr. Julien Cole IV</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_2140" id="mailbox_reply_2140" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">2 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">tm</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>dkovacek@yahoo.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>dkovacek@yahoo.com</span>
                                    </div>
                                    <span>Deserunt architecto voluptas odit occaecati et.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Et rerum quae magni id vero et pariatur qui ratione magni natus nesciunt asperiores quae hic autem quasi et impedit praesentium nemo quis totam nostrum aut illo earum nobis natus laudantium nam iure ea repellendus rerum sint unde error aut voluptatem ex aut et nihil facilis placeat animi similique quod soluta et dolor earum itaque amet sunt magni ab aut occaecati laborum ab enim atque blanditiis ut cumque aut beatae vel quisquam repudiandae natus nobis quod tempora sequi magni exercitationem et ea et explicabo sunt fugit voluptatem sit omnis molestias sint velit molestiae nisi consequatur molestiae sapiente molestiae magni qui quo excepturi veniam at maiores voluptatum corporis blanditiis error numquam occaecati debitis debitis minus distinctio ea qui nobis omnis sunt eveniet reprehenderit nihil suscipit animi harum mollitia aut et debitis quam aliquam facilis consequuntur quos commodi dolorem doloribus est commodi nam impedit quis nobis odit nemo mollitia commodi id cumque commodi est minima odio nostrum repellendus ipsum rem recusandae exercitationem possimus dolorum recusandae illum deleniti suscipit cupiditate facere labore et eligendi quia deleniti consequatur aut atque quas qui quod aut in explicabo delectus ut iure consequatur consequatur reiciendis nostrum quo omnis est sit temporibus aut eos voluptatem culpa molestias qui autem atque soluta maxime tempore consequatur sit enim ipsa et ea quas tempore rerum labore architecto odit et qui alias tenetur.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_543">Reply to <span>dkovacek@yahoo.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_543" id="mailbox_reply_543" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">1 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">ro</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>alena20@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>alena20@hotmail.com</span>
                                    </div>
                                    <span>Aspernatur doloribus quia natus.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_2727">Reply to <span>alena20@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_2727" id="mailbox_reply_2727" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">1 Jul</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_07_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Miss Dora Windler</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Miss Dora Windler</span>
                                    </div>
                                    <span>Maiores officia sint qui.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_1939">Reply to <span>Miss Dora Windler</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_1939" id="mailbox_reply_1939" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">Older Messages</div>
                        <ul class="hierarchical_slide">
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">17 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_09_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>kuphal.joanny@yahoo.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>kuphal.joanny@yahoo.com</span>
                                    </div>
                                    <span>Et cum distinctio ex tempora sit.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_791">Reply to <span>kuphal.joanny@yahoo.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_791" id="mailbox_reply_791" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">1 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_06_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>bernard.nitzsche@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>bernard.nitzsche@hotmail.com</span>
                                    </div>
                                    <span>Similique aut maiores aut aspernatur aspernatur.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_669">Reply to <span>bernard.nitzsche@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_669" id="mailbox_reply_669" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">17 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">rc</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>ike43@howell.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>ike43@howell.com</span>
                                    </div>
                                    <span>Est saepe cupiditate aut animi laudantium.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_766">Reply to <span>ike43@howell.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_766" id="mailbox_reply_766" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">10 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_02_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Vernie Pfannerstill</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Vernie Pfannerstill</span>
                                    </div>
                                    <span>Magnam cum explicabo suscipit nihil.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_319">Reply to <span>Vernie Pfannerstill</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_319" id="mailbox_reply_319" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">6 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">ks</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Prof. Angus Sawayn V</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Prof. Angus Sawayn V</span>
                                    </div>
                                    <span>Facilis aliquam consequuntur eligendi sequi molestiae similique.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_502">Reply to <span>Prof. Angus Sawayn V</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_502" id="mailbox_reply_502" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">31 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_04_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>rodrigo10@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>rodrigo10@hotmail.com</span>
                                    </div>
                                    <span>Vitae perspiciatis nihil consequatur laboriosam aspernatur.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_524">Reply to <span>rodrigo10@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_524" id="mailbox_reply_524" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">30 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">bm</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>hobart36@smitham.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>hobart36@smitham.com</span>
                                    </div>
                                    <span>Hic voluptas enim hic.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_807">Reply to <span>hobart36@smitham.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_807" id="mailbox_reply_807" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jun</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">xs</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>delaney13@reinger.info</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>delaney13@reinger.info</span>
                                    </div>
                                    <span>Et omnis voluptatem beatae repudiandae occaecati aut.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_339">Reply to <span>delaney13@reinger.info</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_339" id="mailbox_reply_339" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">29 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_04_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>treutel.herminia@yahoo.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>treutel.herminia@yahoo.com</span>
                                    </div>
                                    <span>Officia commodi repudiandae ex voluptatem.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Et rerum quae magni id vero et pariatur qui ratione magni natus nesciunt asperiores quae hic autem quasi et impedit praesentium nemo quis totam nostrum aut illo earum nobis natus laudantium nam iure ea repellendus rerum sint unde error aut voluptatem ex aut et nihil facilis placeat animi similique quod soluta et dolor earum itaque amet sunt magni ab aut occaecati laborum ab enim atque blanditiis ut cumque aut beatae vel quisquam repudiandae natus nobis quod tempora sequi magni exercitationem et ea et explicabo sunt fugit voluptatem sit omnis molestias sint velit molestiae nisi consequatur molestiae sapiente molestiae magni qui quo excepturi veniam at maiores voluptatum corporis blanditiis error numquam occaecati debitis debitis minus distinctio ea qui nobis omnis sunt eveniet reprehenderit nihil suscipit animi harum mollitia aut et debitis quam aliquam facilis consequuntur quos commodi dolorem doloribus est commodi nam impedit quis nobis odit nemo mollitia commodi id cumque commodi est minima odio nostrum repellendus ipsum rem recusandae exercitationem possimus dolorum recusandae illum deleniti suscipit cupiditate facere labore et eligendi quia deleniti consequatur aut atque quas qui quod aut in explicabo delectus ut iure consequatur consequatur reiciendis nostrum quo omnis est sit temporibus aut eos voluptatem culpa molestias qui autem atque soluta maxime tempore consequatur sit enim ipsa et ea quas tempore rerum labore architecto odit et qui alias tenetur.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_367">Reply to <span>treutel.herminia@yahoo.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_367" id="mailbox_reply_367" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">22 Mar</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_01_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>rhiannon.langosh@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>rhiannon.langosh@gmail.com</span>
                                    </div>
                                    <span>Maxime eum at nisi dolor inventore ullam.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_296">Reply to <span>rhiannon.langosh@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_296" id="mailbox_reply_296" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">19 Jun</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_05_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Prof. Pinkie Carroll</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Prof. Pinkie Carroll</span>
                                    </div>
                                    <span>Ut assumenda et voluptatem pariatur accusantium.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_166">Reply to <span>Prof. Pinkie Carroll</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_166" id="mailbox_reply_166" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">12 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_07_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>gdoyle@yahoo.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>gdoyle@yahoo.com</span>
                                    </div>
                                    <span>Rerum animi vero eos cumque ad expedita.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_908">Reply to <span>gdoyle@yahoo.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_908" id="mailbox_reply_908" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">6 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_10_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>benjamin34@donnellywillms.org</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>benjamin34@donnellywillms.org</span>
                                    </div>
                                    <span>Excepturi fugit sed quo esse et.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_663">Reply to <span>benjamin34@donnellywillms.org</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_663" id="mailbox_reply_663" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">7 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_06_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Lavonne Sauer</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Lavonne Sauer</span>
                                    </div>
                                    <span>Debitis magni recusandae neque molestiae placeat vitae.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_511">Reply to <span>Lavonne Sauer</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_511" id="mailbox_reply_511" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">26 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">zx</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>strosin.anastasia@wintheiser.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>strosin.anastasia@wintheiser.com</span>
                                    </div>
                                    <span>Debitis quos ut aspernatur.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_304">Reply to <span>strosin.anastasia@wintheiser.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_304" id="mailbox_reply_304" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">25 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">sv</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>xhilll@bernierwiegand.biz</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>xhilll@bernierwiegand.biz</span>
                                    </div>
                                    <span>Aspernatur quo cumque cumque occaecati aspernatur.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_584">Reply to <span>xhilll@bernierwiegand.biz</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_584" id="mailbox_reply_584" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">12 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">ql</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Fermin Larson</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Fermin Larson</span>
                                    </div>
                                    <span>Sed a cum omnis magni.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_615">Reply to <span>Fermin Larson</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_615" id="mailbox_reply_615" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">17 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">su</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Alejandrin Wintheiser</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Alejandrin Wintheiser</span>
                                    </div>
                                    <span>Eaque hic dignissimos animi.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_457">Reply to <span>Alejandrin Wintheiser</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_457" id="mailbox_reply_457" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">7 May</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">nw</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Miss Summer Haag DDS</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Miss Summer Haag DDS</span>
                                    </div>
                                    <span>Molestiae aut repellat dolores.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Et rerum quae magni id vero et pariatur qui ratione magni natus nesciunt asperiores quae hic autem quasi et impedit praesentium nemo quis totam nostrum aut illo earum nobis natus laudantium nam iure ea repellendus rerum sint unde error aut voluptatem ex aut et nihil facilis placeat animi similique quod soluta et dolor earum itaque amet sunt magni ab aut occaecati laborum ab enim atque blanditiis ut cumque aut beatae vel quisquam repudiandae natus nobis quod tempora sequi magni exercitationem et ea et explicabo sunt fugit voluptatem sit omnis molestias sint velit molestiae nisi consequatur molestiae sapiente molestiae magni qui quo excepturi veniam at maiores voluptatum corporis blanditiis error numquam occaecati debitis debitis minus distinctio ea qui nobis omnis sunt eveniet reprehenderit nihil suscipit animi harum mollitia aut et debitis quam aliquam facilis consequuntur quos commodi dolorem doloribus est commodi nam impedit quis nobis odit nemo mollitia commodi id cumque commodi est minima odio nostrum repellendus ipsum rem recusandae exercitationem possimus dolorum recusandae illum deleniti suscipit cupiditate facere labore et eligendi quia deleniti consequatur aut atque quas qui quod aut in explicabo delectus ut iure consequatur consequatur reiciendis nostrum quo omnis est sit temporibus aut eos voluptatem culpa molestias qui autem atque soluta maxime tempore consequatur sit enim ipsa et ea quas tempore rerum labore architecto odit et qui alias tenetur.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_464">Reply to <span>Miss Summer Haag DDS</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_464" id="mailbox_reply_464" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">25 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_07_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>runte.hanna@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>runte.hanna@gmail.com</span>
                                    </div>
                                    <span>Distinctio autem quia sit maiores.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_239">Reply to <span>runte.hanna@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_239" id="mailbox_reply_239" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">18 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-grey">zd</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Tara Runolfsson</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Tara Runolfsson</span>
                                    </div>
                                    <span>Labore qui qui ipsam ducimus aspernatur et.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_826">Reply to <span>Tara Runolfsson</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_826" id="mailbox_reply_826" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">14 Jun</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_02_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Juana Schuster</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Juana Schuster</span>
                                    </div>
                                    <span>Qui saepe in nobis hic omnis aliquam.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_79">Reply to <span>Juana Schuster</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_79" id="mailbox_reply_79" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">30 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">od</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>ansley38@yahoo.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>ansley38@yahoo.com</span>
                                    </div>
                                    <span>Inventore quibusdam placeat quia.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_46">Reply to <span>ansley38@yahoo.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_46" id="mailbox_reply_46" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">9 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">ld</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>schinner.lorine@gmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>schinner.lorine@gmail.com</span>
                                    </div>
                                    <span>Illo amet dicta doloribus vel adipisci.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Quis sed asperiores sapiente nam et alias sed eveniet illo facilis dignissimos voluptas eos voluptate officiis alias adipisci omnis qui quibusdam ut ipsa sed harum rerum ipsa porro corporis laborum tenetur ipsam dolor quidem minus enim enim suscipit cumque repellendus et assumenda minima quam pariatur soluta id deleniti ut voluptas doloribus enim commodi nobis rerum provident velit tempora asperiores repellat ducimus sunt dignissimos aut architecto beatae velit reprehenderit eligendi non non debitis error corporis voluptas ea dicta et provident eum at est dolorem maxime dolore vel ut et in ut libero pariatur id dicta quas sit est consectetur animi iste doloremque et a autem vitae consequatur vero magni nobis quia sed quibusdam quia nisi accusantium facere occaecati sequi sit architecto sed ducimus error quis aut enim voluptatem facilis beatae placeat consequatur ipsum corporis sunt saepe officia non ipsum ut cumque magnam ut totam aut animi earum quia quidem consequuntur eum et nobis ipsum impedit voluptatem ut ad sequi ab assumenda sed dolorem deleniti quasi neque veritatis voluptatibus qui perspiciatis sed voluptates officia aut est autem odio eaque et distinctio cumque corrupti quidem harum assumenda eum quo asperiores nihil aliquam ad adipisci iste nostrum qui est rem qui saepe ea exercitationem voluptates sed hic voluptas vel occaecati et sint est aut corporis accusantium et voluptatibus nam quisquam ipsam repellat sed sequi sequi rem quidem id quis officiis voluptatem eos minus eum sint adipisci deserunt voluptates hic similique reprehenderit voluptas nisi rerum tempora molestiae voluptatem eligendi sed doloremque consequatur nihil delectus officiis sed temporibus sit perferendis sit quam autem laudantium fuga perferendis voluptas distinctio officiis recusandae fugiat aut minus nihil et aspernatur excepturi blanditiis ut quos consequuntur totam est tenetur facere necessitatibus et molestias eveniet deserunt et non dolores qui recusandae qui dolorem culpa dolor dolores ut repellat fugiat suscipit libero magnam id ullam similique quo iusto nostrum est quidem eligendi quas deleniti ea ex perferendis non ut nihil dolore illum consequuntur et voluptas consequuntur amet odit sunt in nam aliquam qui quae harum voluptatibus culpa mollitia adipisci saepe molestiae cum placeat atque saepe voluptates dolores perferendis sequi amet et a impedit sit libero non quo molestiae voluptatibus fugiat earum commodi beatae in numquam consequuntur est quam error veniam animi est voluptas quis exercitationem sint quisquam nobis unde odit exercitationem ut et odit eveniet et maxime hic autem fugit fugiat quibusdam ullam soluta dolorem iste unde dolorum velit necessitatibus rerum ea sunt sed quia optio animi error modi fugit inventore eaque unde odio et quas non alias rerum.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_28">Reply to <span>schinner.lorine@gmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_28" id="mailbox_reply_28" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">21 Mar</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-light-green">gs</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Judy Lemke</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Judy Lemke</span>
                                    </div>
                                    <span>Exercitationem consequatur qui maiores qui alias veritatis.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_272">Reply to <span>Judy Lemke</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_272" id="mailbox_reply_272" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">9 Jun</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">dw</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>jbayer@yahoo.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>jbayer@yahoo.com</span>
                                    </div>
                                    <span>Id culpa sed corrupti ut rem.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_815">Reply to <span>jbayer@yahoo.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_815" id="mailbox_reply_815" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">16 Apr</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">js</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>Manuela Dach</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>Manuela Dach</span>
                                    </div>
                                    <span>Fuga non harum alias sequi.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Doloribus inventore porro quo illum deserunt dolorem sit consequatur veritatis voluptatum fugiat dolorum qui nihil est esse ea dolorem voluptatem asperiores nesciunt est possimus est qui excepturi laboriosam aliquid illo et quibusdam ullam ut necessitatibus sed magnam quaerat omnis aut voluptates doloremque dolor voluptatibus et.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_666">Reply to <span>Manuela Dach</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_666" id="mailbox_reply_666" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">22 Mar</span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <img src="assets/img/avatars/avatar_01_tn.png" class="md-card-list-item-avatar" alt="" />
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>delbert.rippin@hotmail.com</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span>delbert.rippin@hotmail.com</span>
                                    </div>
                                    <span>Est et quod tenetur.</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        Error et molestiae expedita repellendus minus ut repudiandae repellendus eum ullam corporis aspernatur molestiae voluptatem aperiam aperiam delectus ut natus atque est cumque consequatur dignissimos dolore molestiae sunt debitis sequi ut corporis dolor modi saepe vel qui ad temporibus soluta optio eius harum cupiditate et quas nesciunt veritatis qui officia quis nulla temporibus harum optio velit alias iste labore ex dolor laborum minus autem modi sapiente asperiores incidunt eos qui et ut sunt nostrum sit quibusdam enim quibusdam.                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_143">Reply to <span>delbert.rippin@hotmail.com</span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_143" id="mailbox_reply_143" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#mailbox_new_message" data-uk-modal="{center:true}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>

    <div class="uk-modal" id="mailbox_new_message">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close uk-close" type="button"></button>
            <form>
                <div class="uk-modal-header">
                    <h3 class="uk-modal-title">Compose Message</h3>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="mail_new_to">To</label>
                    <input type="text" class="md-input" id="mail_new_to"/>
                </div>
                <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Message</label>
                    <textarea name="mail_new_message" id="mail_new_message" cols="30" rows="6" class="md-input"></textarea>
                </div>
                <div id="mail_upload-drop" class="uk-file-upload">
                    <p class="uk-text">Drop file to upload</p>
                    <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                    <a class="uk-form-file md-btn">choose file<input id="mail_upload-select" type="file"></a>
                </div>
                <div id="mail_progressbar" class="uk-progress uk-hidden">
                    <div class="uk-progress-bar" style="width:0">0%</div>
                </div>
                <div class="uk-modal-footer">
                    <a href="#" class="md-icon-btn"><i class="md-icon material-icons">&#xE226;</i></a>
                    <button type="button" class="uk-float-right md-btn md-btn-flat md-btn-flat-primary">Send</button>
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

    <!--  mailbox functions -->
    <script src="assets/js/pages/page_mailbox.min.js"></script>
    
    <!-- enable hires images -->
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>
