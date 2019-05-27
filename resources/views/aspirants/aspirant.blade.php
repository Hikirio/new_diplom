@extends('layouts.app')
@section('content')
    <div style="text-align: center">

        <h3 style="font-size: 36px">Начать поиск вакансий</h3>
        <p style="font-size: 24px">Заполните свой профиль</p>
    </div>
    <div class="container">
        <div class="row" style="height: 1000px">
            <div class="col">
                <form action="/" method="POST">
                    <div class="form-group row">
                        <label for="want_position"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Желаемая должность:') }}</b></label>

                        <div class="col-md-6">
                            <input id="want_position" type="text"
                                   class="form-control @error('want_position') is-invalid @enderror"
                                   name="want_position" value="{{ old('want_position') }}" required
                                   autocomplete="want_position" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cost"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Зарплата не ниже:') }}</b></label>

                        <div class="col-md-6">
                            <input id="cost" type="text"
                                   class="form-control @error('cost') is-invalid @enderror"
                                   name="cost" value="{{ old('want_position') }}" required
                                   autocomplete="cost" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Ваш город:') }}</b></label>

                        <div class="col-md-6">
                            <input id="city" type="text"
                                   class="form-control @error('city') is-invalid @enderror"
                                   name="city" value="{{ old('city') }}" required
                                   autocomplete="city" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="skills"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Технологии(навыки):') }}</b></label>

                        <div class="col-md-6">
                            <input id="skills" type="text"
                                   class="form-control @error('skills') is-invalid @enderror"
                                   name="skills" value="{{ old('skills') }}" required
                                   autocomplete="skills" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="skills"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Опыт работы:') }}</b></label>

                        <div class="col-md-6">
                            <textarea name="skills" id="skills" cols="30" rows="10"
                                      class="form-control @error('skills') is-invalid @enderror" required
                                      autocomplete="skills" autofocus></textarea>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="experience"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Кол-во лет опыта:') }}</b></label>

                        <div class="col-md-6">

                            <select name="experience" id="experience" class="form-control">

                                @foreach($experience as $exp)

                                    <option value="{{$exp->id}}"> {{$exp->num.' '.$exp->year}}</option>

                                @endforeach


                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="category"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Категория:') }}</b></label>

                        <div class="col-md-6">

                            <select name="category" id="category" class="form-control">

                                @foreach($ids as $i)

                                    <option value="{{$i->id}}"> {{$i->name}}</option>

                                @endforeach

                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Уровень английского:') }}</b></label>

                        <div class="col-md-6">

                            <select name="category" id="category" class="form-control">

                                @foreach($eng as $i)

                                    <option value="{{$i->id}}"> {{$i->english_level}}</option>

                                @endforeach

                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="option"
                               class="col-md-4 col-form-label text-md-right"><b>{{ __('Тип занятости:') }}</b></label>

                        <div class="col-md-6">

                            @foreach($t_empl as $i)


                                <input name="option" type="checkbox" id="option" value="{{$i->id}}">{{$i->type_employment}}<Br>


                            @endforeach


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