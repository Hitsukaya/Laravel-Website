<x-layouts.marketing>


    @volt('genesis-powerups')
    <div class="w-full ">

        <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'Power-ups'] ]" />
        <x-ui.marketing.page-header title="Power-Ups" description="Power-ups offer additional features to help you supercharge the beginning of your application journey." />

        <div class="w-full max-w-6xl px-8 mx-auto">

            <div class="relative w-full p-6 pl-12 text-yellow-700 border border-yellow-200 rounded-lg dark:border-transparent dark:bg-yellow-500 dark:text-white bg-yellow-50">
                <svg class="absolute w-5 h-5 -translate-x-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                <div class="text-sm opacity-80 dark:opacity-100">Before deploying to production you will want to remove the `pages/genesis` folder. These power-ups should only be installed with a new local app.</div>
            </div>

            @if (session()->has('power-up-install'))
                <div class="relative w-full p-6 pl-12 mt-8 text-green-700 border border-green-200 rounded-lg dark:border-transparent dark:bg-green-500 dark:text-white bg-green-50">
                    <svg class="absolute w-5 h-5 -translate-x-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div class="text-sm opacity-80 dark:opacity-100">Successfully Installed Power-Up. Please restart your asset watcher to in order to include updated classes and styles.</div>
                </div>
            @endif

            <div class="grid w-full grid-cols-3 gap-8 mt-8">



                    <x-ui.slide-over title="" name="power-up-details" focusable>
                        <x-slot:trigger>
                            <div class="p-3 transition-transform duration-300 bg-white border shadow-sm cursor-pointer group dark:bg-gray-900 rounded-xl hover:-translate-y-1 hover:shadow-xl border-slate-100 dark:border-white/10">
                                <img src="" class="w-full h-auto rounded-md" />
                                <span class="flex flex-col justify-start px-1 py-2">
                                    <span class="line-clamp-1 pt-2.5 text-lg font-semibold flex items-center dark:text-white space-x-1.5">
                                        <span class="flex items-center justify-center text-lg">📝</span>
                                        <span></span>
                                    </span>
                                    <p class="block pt-1.5 pb-3 text-sm text-left line-clamp-2 text-slate-800/60 dark:text-white/50"></p>

                                        <div class="flex items-center justify-start pb-3">
                                            <span class="flex items-center w-auto px-2 py-1 text-xs text-white bg-green-500 rounded-md">
                                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                                                <span>Installed</span>
                                            </span>
                                        </div>

                                    <x-ui.button type="secondary" rounded="md">View Details</x-ui.button>
                                </span>
                            </div>
                        </x-slot:trigger>
                        <div class="relative space-y-4">
                            <img src="" class="w-full h-auto rounded-md" />
                            <div class="flex items-center justify-start space-x-2">



                            </div>
                            <div class="pb-3">
                                <a href="https://github.com/" target="_blank" class="inline-flex items-center justify-start px-3 py-1.5 space-x-1 text-xs font-normal rounded-full bg-slate-100 dark:text-slate-100 dark:bg-gray-800 text-slate-700">
                                    <svg class="flex w-5 h-5 -ml-1 fill-current" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>

                                    <span class="underline">https://github.com/</span>
                                </a>
                            </div>
                            <div class="pt-5 prose-sm prose border-t dark:prose-invert border-slate-200 dark:border-gray-800">
                                <h3>Pages Included</h3>
                                <ul>

                            </div>
                            <div class="fixed bottom-0 right-0 z-30 w-full max-w-md p-4 bg-white border-t border-gray-200 dark:border-gray-800 dark:bg-gray-900">
                                <x-ui.button wire:click="', '')" type="success" rounded="md">
                                    <span class="mr-1.5">
                                        <svg wire:loading class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                        <svg wire:loading.remove class="w-5 h-5 text-white fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g fill="none" class="signal-icon-wrapper" stroke="none"><path d="M18.2502 20.25C19.3548 20.25 20.2502 19.3546 20.2502 18.25L20.2501 9.45157C20.2501 8.99742 20.0955 8.5568 19.8118 8.20217L16.8505 4.50059C16.4709 4.02617 15.8963 3.75 15.2888 3.75L5.75 3.75C4.64543 3.75 3.75 4.64543 3.75 5.75V18.25C3.75 19.3546 4.64543 20.25 5.75 20.25H18.2502Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.25 8C12.6715 8 11.0903 8 8.75041 8C8.19813 8 7.75 7.55228 7.75 7L7.75 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.75 20.25V14.5C7.75 13.6716 8.42157 13 9.25 13H14.75C15.5784 13 16.25 13.6716 16.25 14.5V20.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
                                    </span>
                                    <span>Install Power-up</span>
                                </x-ui.button>
                            </div>
                        </div>
                    </x-ui.slide-over>



                <div class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-dashed rounded-md border-gray-200/70 dark:border-slate-700 dark:bg-gray-800/50 dark:text-gray-400">
                    More Power-ups coming soon.
                </div>

            </div>
        </div>

    </div>
    @endvolt
</x-layouts.marketing>
