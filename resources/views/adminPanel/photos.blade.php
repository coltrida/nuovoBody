@extends('adminPanel.index')

@section('contenuto')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Foto</h1>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <!-- Page insert -->
                            <form  action="{{route('admin.photo.add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-auto">
                                        <select class="form-control"  name="posizione">
                                            <option>Seleziona posizione</option>
                                            <option value="firstMain/image-1.jpg">firstMain/image-1.jpg</option>
                                            <option value="firstMain/image-2.jpg">firstMain/image-2.jpg</option>
                                            <option value="firstMain/image-3.jpg">firstMain/image-3.jpg</option>
                                            <option><hr></option>
                                            <option value="secondMain/service-1.jpg">secondMain/service-1.jpg</option>
                                            <option value="secondMain/service-2.jpg">secondMain/service-2.jpg</option>
                                            <option value="secondMain/service-3.jpg">secondMain/service-3.jpg</option>
                                            <option value="secondMain/service-4.jpg">secondMain/service-4.jpg</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Sostituisci</button>
                                    </div>
                                </div>

                            </form >
                        </div>
                    </div>

                    <!-- table -->
                    <h2 class="h3 mb-2 text-gray-800">Slide Principale</h2>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Nome foto</th>
                                            <th>foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($firstMain as $item)
                                            <tr>
                                                <td style="vertical-align: middle">{{$item}}</td>
                                                <td><img width="300" src="{{asset('storage/'.$item)}}" alt=""></td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <h2 class="h3 mb-2 text-gray-800">Secondo Main</h2>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th>Nome foto</th>
                                        <th>foto</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($secondMain as $item)
                                        <tr>
                                            <td style="vertical-align: middle">{{$item}}</td>
                                            <td><img width="300" src="{{asset('storage/'.$item)}}" alt=""></td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

@endsection
