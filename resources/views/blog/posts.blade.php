@extends("layouts.main")

@section('content')
@include('partials.header')
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <div class="md:p-4">
                    @include('admin.posts', ['post' => $post])
                </div>
            </div>
        </div>
    </div>
</main>
@endsection