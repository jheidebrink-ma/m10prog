@extends( 'layouts.master' )

@section('content')
    Hier komen mijn projecten:

    @foreach( $projects as $project)
        <div class="m-2">
        <h2>{{$project->title}}</h2>
            <a href="{{route('project.show', $project->id)}}">Bekijk</a>
        </div>

    @endforeach

@endsection


@section('scripts')
<script>
    console.log('dit is een index');
</script>
@endsection
