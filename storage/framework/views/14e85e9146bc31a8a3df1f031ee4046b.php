

<?php $__env->startSection('title', 'Cursos'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la pagina Cursos</h1>
    <a href="<?php echo e(route('cursos.create')); ?>">Crear Curso</a>
    <ul>
        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('cursos.show', $curso->id)); ?>"><?php echo e($curso->name); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($cursos->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codigos-ika\Curso-Laravel\resources\views/cursos/index.blade.php ENDPATH**/ ?>