@extends( 'layouts.master' )

@section('content')
    Hier komen mijn projecten:
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach( $projects as $project)
            <div
                class="max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{route('project.show', $project)}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">{{$project->title}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 italic">
                    {{$project->intro}}
                </p>
                <a href="{{route('project.show', $project)}}"
                   class="bg-green focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Bekijk
                </a>
            </div>
        @endforeach
    </div>

@endsection


@section('scripts')
    <script>
        console.log('dit is een index');
    </script>
@endsection
