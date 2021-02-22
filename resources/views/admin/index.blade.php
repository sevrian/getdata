@extends('layout.landing')


@section('content')
<div class="row" id="basic-table">
   <div class="col-12">
       <div class="card">
           <div class="card-header">
               <h4 class="card-title">Basic Tables</h4>
           </div>
           <div class="card-content">
               <div class="card-body">
                   <p class="card-text">Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You can use any example of below table for your table and it can be use with any type of bootstrap tables.</p>
                   <p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
                   <!-- Table with outer spacing -->
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>User ID</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th scope="row">1</th>
                                   <td>Leanne Graham</td>
                                   <td>sincere@april.biz</td>
                                   <td>@mdo</td>
                               </tr>
                               <tr>
                                   <th scope="row">2</th>
                                   <td>Ervin Howell</td>
                                   <td>shanna@melissa.tv</td>
                                   <td>@fat</td>
                               </tr>
                               <tr>
                                   <th scope="row">3</th>
                                   <td>Clementine Bauch</td>
                                   <td>nathan@yesenia.net</td>
                                   <td>@twitter</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
              
           </div>
       </div>
   </div>
</div>
@endsection