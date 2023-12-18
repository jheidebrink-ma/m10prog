<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hier komen mijn projecten") }}

                    <a href="{{route('project.create')}}" class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right">
                        {{ __('New project') }}
                    </a>

                    @foreach($projects as $project)
                        <a href="{{$project->title}}">{{ $project->title }}</a><br>
                    @endforeach

                    {{$projects->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
