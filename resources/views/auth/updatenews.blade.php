@extends('layouts.site')
@section('content')
    @if(Auth::user()->role === 'admin')
    <div class="row">
        <div class="container content">
            <div class="row">
                <div class="col-md-12">
                    <form action="#">
                        <input type="text" class="form-group" value="{{ $result->title  }}">
                                            <textarea name="" id="editor" cols="30" rows="10">
                        {{ $result->text}}
                    </textarea>
                        <script>
                            CKEDITOR.replace( 'editor' );
                        </script>
                        <button class="btn btn-danger">Зберегти</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endif
    @include('errors.404')
    @endsection