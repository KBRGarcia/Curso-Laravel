

<?php $__env->startSection('title', 'Curso ' . $curso); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al Curso: <?php echo $curso; ?></h1>
    
    
    <h1>Bienvenido al Curso: <?php echo e($curso); ?></h1>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\codigos-ika\Curso-Laravel\resources\views/cursos/show.blade.php ENDPATH**/ ?>