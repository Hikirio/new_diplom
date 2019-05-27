@extends('layouts.app')
@section('content')
    <div style="text-align: center">

        <h3 style="font-size: 36px"> Начать поиск вакансий</h3>
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
                                <option value="1">Нет опыта</option>
                                <option value="2">Менее года</option>
                                <option value="3">1 год</option>
                                <option value="4">1,5 года</option>
                                <option value="5">2 года</option>
                                <option value="6">2,5 года</option>
                                <option value="7">3 года</option>
                                <option value="8">4 года</option>
                                <option value="9">5 лет</option>
                                <option value="10">6 лет</option>
                                <option value="11">7 лет</option>
                                <option value="12">Более 10 лет</option>
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

                            <option value="11"> Более 5 лет</option>
                            </select>

                        </div>
                    </div>

                </form>
            </div>
            <div class="col" style="background: black">

            </div>
        </div>

@stop