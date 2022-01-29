@foreach($posts as $post)
<div class="md:p-4 mt-4 border-4 border-dashed border-gray-200 rounded-lg">
    <span class="
            bg-primary
            rounded
            inline-block
            text-center
            py-1
            px-4
            text-xs
            leading-loose
            font-semibold
            text-white
            mb-5
        ">
        Dec 22, 2023
    </span>
    <h3>
        <a href="#" class="
                font-semibold
                text-xl
                sm:text-2xl
                lg:text-xl
                xl:text-2xl
                mb-4
                inline-block
                text-dark
                hover:text-primary
            ">
            {{ $post->title }}
        </a>
    </h3>
    <h3 class="
                mb-4
                inline-block
                text-dark
                hover:text-primary
            ">
        By {{ $post->firstname }} {{ $post->lastname }}
    </h3>
    <p class="text-base text-body-color">
        {{ $post->content }}
    </p>
    <!-- If the URL requests is /admin, show the 'Edit Post' button -->
    @if(Request::is('admin'))
    <div class="pt-4">
        <a href="{{ route('admin.edit', ['id' => $post->id] )}}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <!-- Heroicon name: solid/pencil -->
            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
            Edit Post
        </a>
    </div>
    @else
    <div class="pt-4">
        <a href="{{ route('blog.view', ['id' => $post->id] )}}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            View Post
        </a>
    </div>
    @endif
</div>
@endforeach