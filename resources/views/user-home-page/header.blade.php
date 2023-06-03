<header class="fixed w-full flex flex-row items-center justify-between h-14 lg:h-16 bg-white py-2 px-4 gap-2 lg:gap-6">
    <div class="flex flex-row items-center gap-2">
        <div class="bg-purple-600 rounded-md p-1">
            <x-heroicon-o-home class="h-6 w-6 text-white"/>
        </div>
        <h1 class="text-xl hidden md:block font-bold text-purple-500">Forum Penelitian</h1>
    </div>
    <div class="flex flex-row grow justify-evenly lg:justify-end gap-6">
        <div class="flex flex-row items-center justify-between md:bg-slate-100 rounded-md px-2 py-1 w-3/5 gap-2">
            <label class="grow hidden md:block">
                <input type="text"
                       class="w-full bg-transparent outline-none border-none focus:ring-0 p-0 text-sm"
                       placeholder="Type here to search">
            </label>
            <x-heroicon-o-magnifying-glass class="h-6 w-6 text-gray-300 hover:cursor-pointer"/>
        </div>
        <div class="flex flex-row gap-2">
            <div id="comments" class="relative flex flex-row items-center justify-center">
                <x-heroicon-s-chat-bubble-oval-left-ellipsis class="h-6 w-6 text-gray-400 hover:cursor-pointer"/>
                <div class="absolute top-0 left-3 flex flex-row justify-center items-center
                            bg-purple-500 text-xs text-white rounded-full w-4 h-4 ring-1 ring-white">5</div>
            </div>
            <div id="notifications" class="relative flex flex-row items-center justify-center">
                <x-heroicon-s-bell class="h-6 w-6 text-gray-400 hover:cursor-pointer"/>
                <div class="absolute top-0 left-3 flex flex-row justify-center items-center
                            bg-purple-500 text-xs text-white rounded-full w-4 h-4 ring-1 ring-white">3</div>
            </div>
        </div>
    </div>
    <div id="avatar" class="flex flex-row items-center gap-3">
        <img src="/avatar1.png"
             alt="avatar"
             class="inline-block h-8 w-8 rounded-md ring-1 ring-offset-1 ring-purple-700">
        <span class="hidden md:inline font-bold text-slate-700 text-sm lg:text-lg">Sofia</span>
    </div>
</header>
