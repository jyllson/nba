@include('header')
@include('nav')
<div class="container">
	<h1>{{$player->first_name}} {{$player->last_name}}</h1>
	
	<table class="table table-striped">
		<tr>
			<td>E-mail:</td>
			<td>{{ $player->email }}</td>
		</tr>		
		<tr>
			<td>Team:</td>
			<td><a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></td>
		</tr>		
	</table>
</div>

@include('footer')