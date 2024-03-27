

<?php $__env->startSection('title', 'Curso ' . $curso->name); ?>
    
<?php $__env->startSection('content'); ?>
    
    
    <h1>Bienvenido al Curso: <?php echo e($curso->name); ?></h1>

    <a href="<?php echo e(route('cursos.index')); ?>">Volver a cursos</a>

    <p><strong>Categoria: </strong><?php echo e($curso->category); ?></p>

    <p><?php echo e($curso->description); ?></p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codigos-ika\Curso-Laravel\resources\views/cursos/show.blade.php ENDPATH**/ ?>