<x-layout>
    <div class="p-3 mb-2 bg-secondary text-white"><h4 class="mt-1 mb-1 text-center">Belarusian hockey players playing in the major leagues of North America</h4></div>
    <div class="container">
        @auth
            <div><a href="/players/create" class="btn btn-secondary">Add player</a></div>  
        @endauth
        <div class='row'>
            @foreach ($players as $player)
                <x-player-card :player="$player" />
            @endforeach
            </div>
        <div class="mt-6 p-4">
            {{$players->links()}}
        </div>
    </div>
</x-layout>