@extends("layouts.main")

@section('content')
@include('partials.header')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between">
        <h1 class="text-3xl font-bold text-gray-900">
            Dashboard
        </h1>
        <span>
            <a href="{{ route('admin.newpost' )}}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <!-- Heroicon name: solid/pencil -->
                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                Create New Post
            </a>
        </span>
    </div>
</header>
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
        </div>
        <!-- /End replace -->
    </div>
</main>
@endsection