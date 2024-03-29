<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'href' => '/'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'href' => '/'
]); ?>
<?php foreach (array_filter(([
    'href' => '/'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a 
    <?php echo e($attributes); ?> class="<?php if(Request::is( (($href == '/') ? '/' : trim($href, '/')) )): ?><?php echo e('bg-slate-200/60 text-slate-900 dark:bg-slate-900 dark:text-white'); ?><?php endif; ?> inline-block sm:w-auto w-full px-4 py-2 text-sm rounded-full text-slate-700 dark:text-slate-200 dark:hover:bg-slate-900 dark:hover:text-white hover:bg-slate-200/60 hover:text-slate-900" 
    href="<?php echo e($href); ?>"
>
    <?php echo e($slot); ?>

</a><?php /**PATH D:\Web Server\xampp\htdocs\hitsu-app\website\resources\views/components/ui/nav-link.blade.php ENDPATH**/ ?>