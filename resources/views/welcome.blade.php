@extends("layouts.main")

@section('content')
    <h1 class="text-3xl font-bold underline">
        PHP Laravel
    </h1>
    <ul>
    @for($i = 0; $i < 4; $i++)
        <li>{{ $i }}</li>
    @endfor
    </ul>
@endsection