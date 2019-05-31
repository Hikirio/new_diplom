@extends('layouts.app')
@section('content')
    <div style="text-align: center">

        <h3 style="font-size: 36px">Начать поиск кандидатов</h3>
        <p style="font-size: 24px">Заполните профиль организации</p>
    </div>
    <div class="container">
        <div class="row" style="height: 1000px">
            <div class="col">
                <form action="/" method="POST">

                    <div class="form-group row">
                        <label for="fname"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('ФИО:') }}</b></label>

                        <div class="col-md-6">
                            <input id="fname" type="text"
                                   class="form-control @error('fname') is-invalid @enderror"
                                   name="fname" value="{{ old('fname') }}" required
                                   autocomplete="fio" autofocus placeholder="Фамилия">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required
                                   autocomplete="name" autofocus placeholder="Имя">
                            <input id="patronymic" type="text"
                                   class="form-control @error('patronymic') is-invalid @enderror"
                                   name="patronymic"
                                   value="{{ old('patronymic') }}"
                                   required
                                   autocomplete="patronymic" autofocus placeholder="Отчество">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Ваша должность:') }}</b></label>

                        <div class="col-md-6">
                            <input id="position" type="text"
                                   class="form-control @error('position') is-invalid @enderror"
                                   name="position" value="{{ old('position') }}" required
                                   autocomplete="position" autofocus placeholder="HR">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="skype"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Skype:') }}</b></label>

                        <div class="col-md-6">
                            <input id="skype" type="text"
                                   class="form-control @error('skype') is-invalid @enderror"
                                   name="skype" value="{{ old('skype') }}" required
                                   autocomplete="skype" autofocus placeholder="test_a">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="number"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Номер телефона:') }}</b></label>

                        <div class="col-md-6">
                            <input id="number" type="text"
                                   class="form-control @error('number') is-invalid @enderror"
                                   name="number" value="{{ old('number') }}" required
                                   autocomplete="number" autofocus placeholder="380951111111">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lenkedin"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Профиль LinkedIn(если есть):') }}</b></label>

                        <div class="col-md-6">
                            <input id="lenkedin" type="text"
                                   class="form-control @error('lenkedin') is-invalid @enderror"
                                   name="lenkedin" value="{{ old('lenkedin') }}"
                                   autocomplete="lenkedin" autofocus placeholder="">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="infocompany"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('О компании:') }}</b></label>

                        <div class="col-md-6">
                           <textarea name="infocompany" id="infocompany" cols="32" rows="10"
                                     class="form-control @error('infocompany') is-invalid @enderror" required
                                     autocomplete="infocompany" autofocus
                                     placeholder="Расскажите о проектах вашей компании и о всем что считаете нужным"></textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="site"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Веб-сайт:') }}</b></label>

                        <div class="col-md-6">
                            <input id="site" type="text"
                                   class="form-control @error('site') is-invalid @enderror"
                                   name="site" value="{{ old('site') }}" required
                                   autocomplete="site" autofocus placeholder="">

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Сохранить') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col" style="background: black">

            </div>
        </div>
    </div>
@endsection