@extends('app')

@push('css')

@endpush

@section('content')
@foreach ($podatci as $podatak)
    <p>{{ $podatak->naziv }}</p>
@endforeach

@endsection


@push('js')

@endpush