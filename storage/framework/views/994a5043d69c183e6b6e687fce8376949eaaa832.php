<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Pomodoro_Timer'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Timers <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Pomodoro Timer <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-4">
                            <div class="avatar-md">
                                <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                    <img src="assets/images/companies/img-1.png" alt="" height="30">
                                </span>
                            </div>
                        </div>
                        

                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="javascript: void(0);" class="text-dark">New admin Design</a></h5>
                            <p class="text-muted mb-4">It will be as simple as Occidental</p>
                            <div class="avatar-group">
                                <div class="avatar-group-item">
                                    <a href="javascript: void(0);" class="d-inline-block">
                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                    </a>
                                </div>
                                <div class="avatar-group-item">
                                    <a href="javascript: void(0);" class="d-inline-block">
                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                    </a>
                                </div>
                                <div class="avatar-group-item">
                                    <a href="javascript: void(0);" class="d-inline-block">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                A
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="avatar-group-item">
                                    <a href="javascript: void(0);" class="d-inline-block">
                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-3">
                            <span class="badge bg-success">Completed</span>
                        </li>
                        <li class="list-inline-item me-3">
                            <i class="bx bx-calendar me-1"></i> 15 Oct, 19
                        </li>
                        <li class="list-inline-item me-3">
                            <i class="bx bx-comment-dots me-1"></i> 214
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/heal-app-2/resources/views/pomodoro-timer.blade.php ENDPATH**/ ?>