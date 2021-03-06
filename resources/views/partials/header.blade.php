<nav class="relative flex items-center justify-between sm:h-10" aria-label="Global">
    <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
        <a href="{{ route('blog.index' )}}" class="font-medium text-gray-500 hover:text-gray-900">Home</a>
        <a href="{{ route('blog.posts' )}}" class="font-medium text-gray-500 hover:text-gray-900">Posts</a>
        <a href="{{ route('login' )}}" class="font-medium text-gray-500 hover:text-gray-900">Admin</a>
    </div>

    <!-- If the user is authenticated and NOT viewing the landing page ('/' route) then display their name -->
    @if(Auth::user() && !Request::is('/'))
    <div>
        <span class="font-medium text-gray-500">Welcome, {{ Auth::user()->name }}</span>
    </div>
    @endif
</nav>