<div>

     <div id="data-category">
      <div class="px-3 pt-4 pb-3">
        <h3 class="card-title">Detail Transaction invoice <strong>{{ $transaction[0]['invoice'] }}</strong></h3>
    </div>

    <div class="card-body mt-3">

      <div class="table">
            <table id="datatable" class="table table-bordered">
        <thead>
            <tr>
              <th>no</th> 
              <th>Product</th> 
              <td>Category</td>
            </tr>
        </thead>
          @php
             $no = 1
          @endphp
          <tbody>
            @foreach ($transaction as $tr)
             <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $tr->product->name }}</td>
              <td>{{ $tr->category->name }}</td>
             

              </td>
             </tr>
             @endforeach
             
          </tbody>
          
         
       
        </table>
        </div>
    </div>
</div>
