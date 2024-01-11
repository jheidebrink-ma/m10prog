@extends( 'layouts.master' )

@section('content')
        <div class="m-2">
        <h2>{{$project->title}}</h2>
            ID: {{$project->id}}
            <em>{{$project->intro}}</em>
        </div>

@endsection


@section('scripts')
<script>
    console.log('dit is een index');
</script>
@endsection
