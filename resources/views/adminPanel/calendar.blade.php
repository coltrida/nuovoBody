@extends('adminPanel.index')

@section('contenuto')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Calendario</h1>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <!-- Page insert -->
                            <form  class="row" action="{{route('admin.calendar.add')}}" method="post">
                                @csrf
                                <div class="col-auto">
                                    <select id="course_id" class="form-control"  name="course_id">
                                        <option>Seleziona corso</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-5">
                                    <select id="giorno" class="form-control"  name="giorno">
                                        <option>Seleziona giorno</option>
                                            <option value="1">Lunedì</option>
                                            <option value="2">Martedì</option>
                                            <option value="3">Mercoledì</option>
                                            <option value="4">Giovedì</option>
                                            <option value="5">Venerdì</option>
                                            <option value="6">Sabato</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <select id="oraInizio" class="form-control"  name="oraInizio">
                                        <option>Seleziona Orario</option>
                                        @for($i=9; $i<22; $i++)
                                            <option value="{{$i}}">{{$i}} : 00</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Inserisci</button>
                                </div>
                            </form >
                        </div>
                    </div>

                    <!-- table -->
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Giorno</th>
                                            <th>Ora</th>
                                            <th>Corso</th>
                                            <th style="text-align: center">azioni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($calendars as $item)
                                            <tr>
                                                <td>{{$item->giorno}}</td>
                                                <td>{{$item->oraInizio}}:00</td>
                                                <td>{{$item->course->nome}}</td>
                                                <td style="text-align: center">
                                                    <a href="{{route('admin.calendar.delete', $item->id)}}">
                                                        <i title="elimina" class="fas fa-trash" style="color: red"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

@endsection
