<header class="fixed w-full flex flex-row items-center justify-between h-14 lg:h-16 bg-white py-2 px-4 lg:gap-6">
    <div class="flex flex-row gap-4">
        <div class="flex flex-row items-center gap-2">
            <div class="bg-purple-600 rounded-md p-1">
                <x-heroicon-o-home class="h-6 w-6 text-white"/>
            </div>
            <h1 class="text-xl hidden md:block font-bold text-purple-500">Forum Penelitian</h1>
        </div>
        <div class="flex flex-row items-center md:bg-slate-100 rounded-md md:px-2 lg:hidden">
            <label>
                <input type="text"
                       class="bg-transparent hidden md:block outline-none border-none focus:ring-0 p-0 text-sm"
                       placeholder="Type here to search">
            </label>
            <x-heroicon-o-magnifying-glass class="h-6 w-6 text-gray-300 hover:cursor-pointer"/>
        </div>
    </div>
    <div class="hidden lg:flex flex-row grow justify-end gap-6">
        <div class="flex flex-row items-center justify-between bg-slate-100 rounded-md px-2 py-1 w-3/5 gap-2">
            <label class="grow">
                <input type="text"
                       class="w-full bg-transparent outline-none border-none focus:ring-0 p-0 text-sm"
                       placeholder="Type here to search">
            </label>
            <x-heroicon-o-magnifying-glass class="h-6 w-6 text-gray-300 hover:cursor-pointer"/>
        </div>
        <div class="flex flex-row gap-2">
            <div id="comments" class="flex flex-row items-center justify-center">
                <x-heroicon-s-chat-bubble-oval-left-ellipsis class="h-6 w-6 text-gray-400 hover:cursor-pointer"/>
            </div>
            <div id="notifications" class="flex flex-row items-center justify-center">
                <x-heroicon-s-bell class="h-6 w-6 text-gray-400 hover:cursor-pointer"/>
            </div>
        </div>
    </div>
    <div class="flex flex-row gap-4 lg:w-1/5 justify-center">
        <div id="comments" class="flex flex-row items-center justify-center lg:hidden">
            <x-heroicon-s-chat-bubble-oval-left-ellipsis class="h-6 w-6 text-gray-400 hover:cursor-pointer"/>
        </div>
        <div id="notifications" class="flex flex-row items-center justify-center lg:hidden">
            <x-heroicon-s-bell class="h-6 w-6 text-gray-400 hover:cursor-pointer"/>
        </div>
        <div id="avatar" class="flex flex-row items-center gap-3">
            <img src="/avatar1.png"
                 alt="avatar"
                 class="inline-block h-8 w-8 rounded-md ring-1 ring-offset-1 ring-purple-700">
            <span class="hidden md:inline font-bold text-slate-700 text-sm lg:text-lg">Sofia</span>
        </div>
    </div>
</header>
