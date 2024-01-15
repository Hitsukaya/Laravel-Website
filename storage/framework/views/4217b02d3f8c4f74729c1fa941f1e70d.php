<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label' => null,
    'id' => null,
    'name' => null,
    'type' => 'text',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label' => null,
    'id' => null,
    'name' => null,
    'type' => 'text',
]); ?>
<?php foreach (array_filter(([
    'label' => null,
    'id' => null,
    'name' => null,
    'type' => 'text',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php $wireModel = $attributes->get('wire:model'); ?>

<div>
    <!--[if BLOCK]><![endif]--><?php if($label): ?>
        <label for="<?php echo e($id ?? ''); ?>" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-300">
            <?php echo e($label); ?>

        </label>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

    <div data-model="<?php echo e($wireModel); ?>" class="mt-1.5 rounded-md shadow-sm">
        <input <?php echo e($attributes->whereStartsWith('wire:model')); ?> id="<?php echo e($id ?? ''); ?>" name="<?php echo e($name ?? ''); ?>" type="<?php echo e($type ?? ''); ?>" required autofocus class="appearance-none flex w-full h-10 px-3 py-2 text-sm bg-white dark:text-gray-300 dark:bg-white/[4%] border rounded-md border-gray-300 dark:border-white/10 ring-offset-background placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-gray-300 dark:focus:border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200/60 dark:focus:ring-white/20 disabled:cursor-not-allowed disabled:opacity-50 <?php $__errorArgs = [$wireModel];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
    </div>

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$wireModel];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH D:\Web Server\xampp\htdocs\hitsu-app\website\resources\views/components/ui/input.blade.php ENDPATH**/ ?>