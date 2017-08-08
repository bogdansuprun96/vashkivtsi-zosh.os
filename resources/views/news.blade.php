@extends('layouts.site')
@section('content')
<div class="row">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <div class="container">
                    @foreach( $news as $new)
                    <div class="post">
                        <h2 class="title">{{ $new->title }}</h2>
                        <p class="description">
                           {{ $new->description }} <a href="{{ route('news') }}/{{ $new->category_id }}/{{ $new->id  }}">Читати детальніше...</a>
                        </p>
                        <i>25/05/2017</i>
                        <hr>
                    </div>
                    @endforeach

                        {{ $news->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection