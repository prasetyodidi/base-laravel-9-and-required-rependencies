<div id="left-side" class="hidden md:flex flex-col gap-4 md:w-2/5 lg:w-1/6 my-4">
    <aside class="flex flex-col gap-3 rounded-lg bg-white px-3 py-4" aria-label="related post">
        @for($i = 0; $i < 3; $i++)
            <div class="flex flex-row items-center h-10 hover:bg-slate-200 rounded-md gap-1 px-1">
                <div class="w-8 h-8 bg-slate-200 rounded-md flex flex-row justify-center items-center p-1">
                    <img src="new-icon.svg" alt="icon newest post" class="w-full h-full">
                </div>
                <div class="flex flex-col h-full justify-between">
                    <span class="font-bold text-slate-700 text-xs">Newest</span>
                    <span class="text-slate-500 text-xs">Find the latest update</span>
                </div>
            </div>
        @endfor
    </aside>
    <aside class="rounded-lg bg-white px-3 py-4 flex flex-col gap-6" aria-label="popular tags">
        <span class="text-slate-700 text-lg font-medium">Popular Tags</span>
        <div class="flex flex-col gap-4">
            @for($i = 0; $i < 3; $i++)
                <div class="flex flex-row items-center h-10 rounded gap-1 px-1">
                    <div class="w-10 h-10 bg-slate-200 rounded-md flex flex-row justify-center items-center p-1">
                        <img src="new-icon.svg" alt="icon newest post" class="w-full h-full">
                    </div>
                    <div class="flex flex-col justify-between h-full">
                        <span class="font-bold text-slate-500 text-xs hover:underline decoration-purple-500">
                            #technology
                        </span>
                        <span class="text-slate-500 text-xs">82,645 Posted</span>
                    </div>
                </div>
            @endfor
        </div>
    </aside>
    <aside class="flex flex-col gap-3 rounded-lg bg-white px-3 py-4" aria-label="web information">
        @for($i = 0; $i < 5; $i++)
            <div class="flex flex-row gap-2">
                <x-heroicon-o-information-circle class="h-6 w-6 text-gray-400 hover:cursor-pointer"/>
                <span class="text-slate-400 hover:underline decoration-purple-500">About</span>
            </div>
        @endfor
    </aside>
</div>
