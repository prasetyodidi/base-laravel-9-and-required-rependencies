<main class="flex flex-col gap-2 md:grow overflow-y-scroll">
    @include('user-home-page.main.create-post')
    <div class="flex flex-col gap-2">
        @for($i = 1; $i < 10; $i++)
            @include('user-home-page.main.content')
        @endfor
    </div>
</main>
