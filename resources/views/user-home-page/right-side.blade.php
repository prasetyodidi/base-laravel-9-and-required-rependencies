<div id="right-side" class="hidden lg:flex flex-col w-1/6 my-4 gap-4">
    <aside class="flex flex-col h-2/5 bg-white rounded-lg gap-4 p-4 overflow-y-auto" aria-label="popular peoples">
        <span class="text-slate-700 text-lg font-medium">Popular Peoples</span>
        @for($i = 0; $i < 3; $i++)
            <div class="flex flex-row gap-2 items-center">
                <img src="avatar3.png"
                     alt="avatar {{ $i }}"
                     class="w-8 h-8 rounded-full">
                <div class="flex flex-col justify-between">
                    <span class="text-slate-700 font-semibold">Cory Hammes</span>
                    <span class="text-slate-700 text-sm">Upvote 4.4k</span>
                </div>
            </div>
        @endfor
    </aside>
    <aside class="flex flex-col h-3/5 bg-white rounded-lg gap-4 p-4 overflow-y-scroll" aria-label="popular posts">
        <span class="text-slate-700 text-lg font-medium">Popular Posts</span>
        @for($i = 0; $i < 5; $i++)
            <div class="flex flex-col text-sm">
                <span class="text-slate-700 font-semibold">
                    Mental health as a founder and the importance of community...
                </span>
                <div class="flex flex-row gap-2 text-slate-500">
                    <span>by James McKinven</span>
                    <x-heroicon-s-arrow-up-circle class="h-6 w-6 text-purple-500 hover:cursor-pointer"/>
                    <span>2.2k</span>
                </div>
            </div>
        @endfor
    </aside>
</div>
