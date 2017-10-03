@include('header')
@include('nav')
<div class="container">
	<h1>{{$team->name}}</h1>
	
	<table class="table table-striped">
		<tr>
			<td>E-mail:</td>
			<td>{{ $team->email }}</td>
		</tr>		
		<tr>
			<td>Address:</td>
			<td>{{ $team->address }}</td>
		</tr>
		<tr>
			<td>City:</td>
			<td>{{ $team->city }}</td>
		</tr>
		<tr>
			<td colspan="2" class="text-center"><strong>Players</strong></td>
		</tr>
		@if(count($team->players))
            @foreach($team->players as $player)
                <tr>
                    <td>Player:</td>
                    <td><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></td>
                </tr>
            @endforeach
    	@endif
	</table>
</div>

@include('footer')