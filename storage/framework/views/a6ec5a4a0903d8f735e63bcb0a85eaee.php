<?php if (isset($component)) { $__componentOriginal606bedd6108050b8303bc7c381e2387c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606bedd6108050b8303bc7c381e2387c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.link','data' => ['attributes' => $attributes->except('wire:navigate'),'class' => 'text-gray-500 underline cursor-pointer dark:text-gray-400 dark:hover:text-gray-300 hover:text-gray-800']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ui.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->except('wire:navigate')),'class' => 'text-gray-500 underline cursor-pointer dark:text-gray-400 dark:hover:text-gray-300 hover:text-gray-800']); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal606bedd6108050b8303bc7c381e2387c)): ?>
<?php $attributes = $__attributesOriginal606bedd6108050b8303bc7c381e2387c; ?>
<?php unset($__attributesOriginal606bedd6108050b8303bc7c381e2387c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal606bedd6108050b8303bc7c381e2387c)): ?>
<?php $component = $__componentOriginal606bedd6108050b8303bc7c381e2387c; ?>
<?php unset($__componentOriginal606bedd6108050b8303bc7c381e2387c); ?>
<?php endif; ?><?php /**PATH D:\Web Server\xampp\htdocs\hitsu-app\website\resources\views/components/ui/text-link.blade.php ENDPATH**/ ?>