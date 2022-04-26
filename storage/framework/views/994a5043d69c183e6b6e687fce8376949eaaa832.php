<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Pomodoro_Timer'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Timers <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Pomodoro Timer <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <pomodoro-timer></pomodoro-timer>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/heal-app-2/resources/views/pomodoro-timer.blade.php ENDPATH**/ ?>