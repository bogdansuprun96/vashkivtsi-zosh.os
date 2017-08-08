@extends('layouts.site')
@section('content')
    <div class="row">
        <div class="container content">
            <div class="row">
                <div class="col-md-8">

                    <div class="container">
                            <div class="post">
                                <h2 class="title">{{ $news[0]->title }}</h2>
                                <p class="description">
                                     {{ $news[0]->text}}
                                </p>
                                <i>{{ $news[0]->date}} | {{ $news[0]->time}}</i>
                                <hr>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection