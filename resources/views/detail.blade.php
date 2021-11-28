@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 p-3">
                <div class="bg-warning text-black p-2">
                    <h2>Book Detail</h2>
                </div>

                <div class="mt-2 mb-2">
                    <p>Title : {{ $detail->book->title }}</p>
                    <p>Author : {{ $detail->author }}</p>
                    <p>Publisher : {{ $detail->publisher }}</p>
                    <p>Year : {{ $detail->year }}</p>
                    <p>Description :</p>

                    <p class="text-justify">{{ $detail->description }}</p>
                </div>
            </div>

            {{-- Category Menu --}}
            <div class="col-sm-3 p-3">
                <div class="bg-warning text-black p-2">
                    <h2>Category</h2>
                </div>
                @foreach ($categories as $ct)
                    <div class="row p-2">
                        <a href="{{ route('view.categories', $ct->id) }}">{{ $ct->category }}</a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
