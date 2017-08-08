@extends('layouts.site')
@section('content')
    <div class="row">
        <div class="container content">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="hero-unit center">
                            <h1>Такої сторінки не існує <small><font face="Tahoma" color="red">Помилка 404</font></small></h1>
                            <br />
                            <p>Такої сторінки не існує або вона тимчасово відключена. Використайте кнопку <b>"назад"</b> свого браузера для повернення на попередню сторінку</p>
                            <p><b>Або ж можете вернутись на головну сторінку використавши посилання:</b></p>
                            <a href="{{ route('index') }}" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Повернутись на головну</a>
                        </div>
                        <br />
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection