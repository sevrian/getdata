@extends('layout.landing')
@push('css')
    
@endpush
@section('content')
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            
            <div class="card-content">
                <div class="card-body">
                    {{-- <p class="card-text">Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You can use any example of below table for your table and it can be use with any type of bootstrap tables.</p> --}}
                    <a href="{{route('exportEmail')}}" class="btn btn-primary">Export</a>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table id ="datatable" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data AS $row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->no_tlp}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scrips_js')
    <script>
        $(Document).ready(function(){
            $('#datatable').DataTable({
                // dom: 'Bfrtip',
                // buttons: [
                //     'copy', 'excel', 'pdf'
                // ]
            });
        });
    </script>
@endpush