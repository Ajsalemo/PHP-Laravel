@extends("layouts.main")

@section("content")
@include("partials.header")
<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
</div>
<!-- Data is accessed at the first index [0] since only one post will ever be returned -->
<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Edit a blog post.</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Edit a blog post.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            @include("partials.session")
            @include("partials.validation")
            <form action="{{ route('admin.editsubmit', ['id' => $adminEditPost[0]->id] )}}" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="firstname" class="block text-sm font-medium text-gray-700">First name</label>
                                <input type="text" name="firstname" id="firstname" autocomplete="given-name" value="{{ $adminEditPost[0]->firstname }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="lastname" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" name="lastname" id="lastname" autocomplete="family-name" value="{{ $adminEditPost[0]->lastname }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="title" class="block text-sm font-medium text-gray-700">Post Title</label>
                                <input type="text" name="title" id="title" autocomplete="given-name" value="{{ $adminEditPost[0]->title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="pt-4">
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                About
                            </label>
                            <div class="mt-1">
                                <textarea id="about" name="content" rows="6" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="What" s on your mind...">{{ $adminEditPost[0]->content }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        {{ csrf_field() }}
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
</div>
@endsection