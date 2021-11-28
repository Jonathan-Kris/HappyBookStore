@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 p-3">
                <div class="bg-warning text-black p-2">
                    <h2>Contact</h2>
                </div>

                <div class="mt-2 mb-2">
                    <h2>Store Address :</h2>
                    <p>Jalan Pembangunan Raya</p>
                    <p>Kompleks Pertokoan Emerald Blok III/12</p>
                    <p>Bintaro, Tangerang Selatan</p>
                    <p>Indonesia</p>

                    <h2>Open Daily :</h2>
                    <p>08.00 - 20.00</p>

                    <h2>Contact :</h2>
                    <p>Phone : 021-08899776655</p>
                    <p>Email : happybookstore@happy.com</p>
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
