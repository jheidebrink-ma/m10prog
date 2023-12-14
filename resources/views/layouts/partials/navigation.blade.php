@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="sm:fixed sm:top-0 sm:left-0 p-6 text-left">
    <ul class="navbar-nav d-flex justify-content-end">
        <li class="nav-item">
            <a href="{{route('about')}}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">About</a>
        </li>
        <li class="nav-item">
            <a href="{{route('project.index')}}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">Projects</a>
        </li>
    </ul>
</div>
