
<x-layouts.marketing>

    <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'Terms of serivices'] ]" />

    <div class="pt-4">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div class="w-full mt-6 p-6  bg-white dark:bg-gray-800 shadow-md overflow-hidden prose dark:prose-invert">
                {!! $terms !!}
            </div>
        </div>
    </div>

</x-layouts.marketing>


