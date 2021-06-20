@extends('layouts.stile')

@section('main')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <h2>Calendario Corsi</h2>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Calendario Corsi</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Timing Section -->
    <section class="timing-section">
        <div class="auto-container">

            <!-- Timing Info Tabs -->
            <div class="timing-info-tabs">
                <!-- Timing Tabs -->
                <div class="timing-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#prod-tutti" class="tab-btn active-btn">tutti</li>
                        @foreach($courses as $item)
                            <li data-tab="#prod-{{$item->id}}" class="tab-btn">{{$item->nome}}</li>
                        @endforeach

                    </ul>

                    <!-- Tabs Container -->
                    <div class="tabs-content">

                        <div class="tab active-tab" id="prod-tutti">
                            <div class="content">
                                <div class="table-image">
                                    <table class="table table-striped table-bordered">
                                        <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Lunedì</th>
                                            <th scope="col">Martedì</th>
                                            <th scope="col">Mercoledì</th>
                                            <th scope="col">Giovedì</th>
                                            <th scope="col">Venerdì</th>
                                            <th scope="col">Sabato</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=9; $i<21; $i++)
                                            <tr>
                                                <td style="background-color: #1a202c; color: white">{{$i}}:00</td>
                                                <td>
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 1 && $ele->oraInizio == $i)
                                                                {{$item->nome}} <br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 2 && $ele->oraInizio == $i)
                                                                {{$item->nome}} <br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 3 && $ele->oraInizio == $i)
                                                                {{$item->nome}} <br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 4 && $ele->oraInizio == $i)
                                                                {{$item->nome}} <br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 5 && $ele->oraInizio == $i)
                                                                {{$item->nome}} <br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 6 && $ele->oraInizio == $i)
                                                                {{$item->nome}} <br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        @foreach($courses as $item)
                            <div class="tab" id="prod-{{$item->id}}">
                                <div class="content">
                                    <div class="table-image">

                                        {{--{{$item->calendars}}--}}
                                            <table class="table table-striped table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Lunedì</th>
                                                        <th scope="col">Martedì</th>
                                                        <th scope="col">Mercoledì</th>
                                                        <th scope="col">Giovedì</th>
                                                        <th scope="col">Venerdì</th>
                                                        <th scope="col">Sabato</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @for($i=9; $i<21; $i++)
                                                    <tr>
                                                        <td style="background-color: #1a202c; color: white">{{$i}}:00</td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 1 && $ele->oraInizio == $i)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 2 && $ele->oraInizio == $i)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 3 && $ele->oraInizio == $i)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 4 && $ele->oraInizio == $i)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 5 && $ele->oraInizio == $i)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 6 && $ele->oraInizio == $i)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endfor
                                                </tbody>
                                            </table>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--Tab / Active Tab-->

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Timing Section -->
@endsection
