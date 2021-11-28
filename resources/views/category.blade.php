@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 p-3">
                <div class="bg-warning text-black p-2">
                    <h2>{{ $categoryTitle->category }}</h2>
                </div>

                <div class="mt-2 mb-2">
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                        </tr>
                        @if (count($books) > 0)
                            @foreach ($books as $b)
                                <tr>
                                    <td class="col-6">
                                        <a href="{{ route('view.detail', $b->id) }}">{{ $b->title }}</a>
                                    </td>
                                    <td class="col-6">{{ $b->detail->author }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="2">Unfortunately, there are no books in this category</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>

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

        <div class="row">
            <div class="d-flex justify-content-center">
                {{ $books->links() }}
            </div>
        </div>
    </div>
@endsection
