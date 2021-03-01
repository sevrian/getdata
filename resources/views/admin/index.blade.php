@extends('layout.landing')
@push('css')
    
@endpush
@section('content')
<div class="row" id="basic-datatable">
    <div class="col-12">
            
        <div class="card">
            
            <div class="card-content">
               
                <div class="card-body">
                    {{-- <p class="card-text">Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You can use any example of below table for your table and it can be use with any type of bootstrap tables.</p> --}}
                    {{-- <a href="{{route('exportEmail')}}" class="btn btn-primary">Export</a> --}}
                    <!-- Table with outer spacing -->
                    <div class="row input-daterange">
                        <div class="col-md-4">
                            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                        </div>
                        <div class="col-md-4">
                            <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                            <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                        </div>
                    </div>
                    <br>
                   
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
    $(document).ready(function(){
     $('.input-daterange').datepicker({
      todayBtn:'linked',
      format:'yyyy-mm-dd',
      autoclose:true
     });
    
     load_data();
    
     function load_data(from_date = '', to_date = '')
     {
      $('#datatable').DataTable({
     
       serverSide: true,
       dom: 'Bfrtip',
        buttons: [
         
            {
                extend: 'excel',
               
            },
           
        ],
       ajax: {
        url:'{{ route("home") }}',
        data:{from_date:from_date, to_date:to_date}
       },
       
       columns: [
        {
         data:'id',
         name:'id'
        },
        {
         data:'email',
         name:'email'
        },
        {
         data:'no_tlp',
         name:'no_tlp'
        },
        {
         data:'nama',
         name:'nama'
        },
       
       ]
      });
     }
    
     $('#filter').click(function(){
      var from_date = $('#from_date').val();
      var to_date = $('#to_date').val();
      if(from_date != '' &&  to_date != '')
      {
       $('#datatable').DataTable().destroy();
       load_data(from_date, to_date);
      }
      else
      {
       alert('Both Date is required');
      }
     });
    
     $('#refresh').click(function(){
      $('#from_date').val('');
      $('#to_date').val('');
      $('#datatable').DataTable().destroy();
      load_data();
     });
    
    });
    </script>
@endpush