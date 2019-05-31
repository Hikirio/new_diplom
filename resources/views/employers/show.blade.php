@extends('layouts.app')
@section('content')
    <div style="text-align: center">

        <p style="font-size: 36px">Профиль организации</p>
    </div>
    <div class="container">
        <div class="row" style="height: 1000px">
            <div class="col">
                @foreach($show as $s)
                    <div class="form-group row">
                        <label for="position"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Название компании:') }}</b></label>

                        <div class="col-md-6">
                            {{$s->name_company}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Описние компании:') }}</b></label>

                        <div class="col-md-6">
                            {{$s->description}}
                        </div>
                    </div>
{{--                        {{$s->id}}--}}
                    <div class="form-group row">
                        <label for="position"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Сайт компании:') }}</b></label>

                        <div class="col-md-6">
                            {{$s->site}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Контактный номер:') }}</b></label>

                        <div class="col-md-6">
                            {{$s->phonenumber}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Контактное лицо:') }}</b></label>

                        <div class="col-md-6">
                            {{$s->contact}}
                        </div>
                    </div>

                        @endforeach
                    <hr>
                    <div class="col" >
                        <div style="text-align: center">

                            <p style="font-size: 36px">Профиль организации</p>
                        </div>

                    </div>
            </div>
        </div>
@endsection