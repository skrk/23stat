<x-layout>
<div class="p-3 mb-2 bg-secondary text-white"><h4 class="mt-1 mb-1 text-center">Leagues of North America in which Belarusian hockey players play</h4></div>
<div class="container">
    @auth
    <div>
        <a href="/leagues/create" class="btn btn-secondary">Add league</a>
    </div>  
    @endauth
    <div class="row">
    @foreach($leagues as $league)
    <x-league-card :league="$league" />
    @endforeach 
    </div>  
</div>


</x-layout>