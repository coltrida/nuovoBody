@extends('adminPanel.index')

@section('contenuto')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Corsi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="corsiDataTable"  style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Nome Corso</th>
                                            <th>Descrizione</th>
                                            <th>Istruttore</th>
                                            <th>azioni</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome Corso</th>
                                            <th>Descrizione</th>
                                            <th>Istruttore</th>
                                            <th>azioni</th>

                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>

@endsection
