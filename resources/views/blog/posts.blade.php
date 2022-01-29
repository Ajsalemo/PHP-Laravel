@extends("layouts.main")

@section('content')
@include('partials.header')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <div class="md:p-4">
            @include('admin.posts', ['posts' => $posts])
        </div>
    </div>
</div>
@endsection