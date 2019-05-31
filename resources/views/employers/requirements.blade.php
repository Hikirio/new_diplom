@extends('layouts.app')
@section('content')
    <div style="text-align: center">
        <p style="font-size: 24px">Профиль организации</p>
    </div>
    <div class="container">
        <div class="row" style="height: 1000px">
            <div class="col">

                <div class="col-md-6">

@foreach($show as $s)

                        {{$s}}
    @endforeach
                </div>

            </div>

            <div class="col" style="
                      text-align: center;
                      border-left: 2px solid #ccc; /* Параметры линии */
                      margin-left: 20px; /* Отступ слева */
                      padding-left: 10px; /* Расстояние от линии до текста */
                      ">
                <div>
                    <div class="line">

                        <h3 class="title" style="
                          border: 5px solid grey;
                          color: black; /* Цвет текста */
                          font-size: 14px;
                        ">Предпологаемые сотрудники</h3>

                    </div>

                    <div class="title" style="
                          border: 5px solid grey;
                          color: black; /* Цвет текста */
                          font-size: 14px;
                        ">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
