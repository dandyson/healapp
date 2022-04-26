<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Timers'); ?></li>

                <li>
                    <a href="pomodoro-timer" class="waves-effect" key="t-pomodoro-timer">
                        <i class="bx bx-timer"></i>
                        <?php echo app('translator')->get('translation.Pomodoro_Timer'); ?>
                    </a>
                </li>
                <li>
                    <a href="layouts-horizontal" class="waves-effect">
                        <i class="mdi mdi-yin-yang"></i>
                        <?php echo app('translator')->get('translation.Meditation_Timer'); ?>
                    </a>
                </li>

                <li class="menu-title" key=""><?php echo app('translator')->get('translation.Fitness'); ?></li>

                <li>
                    <a href="" class="waves-effect">
                        <i class="bx bx-body"></i>
                        <?php echo app('translator')->get('translation.Body_Measurements'); ?>
                    </a>
                </li>

                <li class="menu-title" key=""><?php echo app('translator')->get('translation.News'); ?></li>

                <li>
                    <a href="positive-news" class="waves-effect" key="t-positive-news">
                        <i class="bx bx-news"></i>
                        <?php echo app('translator')->get('translation.Positive_News'); ?>
                    </a>
                </li>

                <li class="menu-title" key=""><?php echo app('translator')->get('translation.Journals'); ?></li>

                <li>
                    <a href="" class="waves-effect">
                        <i class="bx bx-book-bookmark"></i>
                        <?php echo app('translator')->get('translation.Worry_Journal'); ?>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH /Applications/MAMP/htdocs/heal-app-2/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>