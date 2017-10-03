@include('header')

<div class="container">
	<h1>Teams</h1>

	<table class="table table-striped">
		@foreach($teams as $team)
			<tr>
				<td><a href="/teams/{{$team->id}}">{{ $team->name }}</a></td>
				<td>{{ $team->city }}</td>
			</tr>
		@endforeach
	</table>
</div>
@include('footer')