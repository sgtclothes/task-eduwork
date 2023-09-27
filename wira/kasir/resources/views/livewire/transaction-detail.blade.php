<div>
     <div id="data-category">
      <div class="px-3 pt-4 pb-3">
        <h3 class="card-title">Detail Transaction table</h3>
    </div>

    <div class="card-body mt-5">

        <div class="table table-responsive">
            <table id="datatable" class="display table table-responsive table-bordered">
        <thead>
            <tr>
              <th>no</th>
              <th>product name</th>
              <th>Invoice</th>
              <th>category</th>
              <th>unit</th>
              <th>price</th>
              <th>Total</th>
              <th>action</th>
            </tr>
        </thead>
             @php
             $no = 1
          @endphp
          <tbody>
            @forelse ($transaction as $tr)
             <tr>
               <td>{{ $no++ }}</td>
              <td>{{ $tr->product->name }}</td>
              <td>{{ $tr->invoice }}</td>
              <td>{{ $tr->category->name }}</td>
              <td>{{ $tr->qty }}</td>
              <td>{{ $tr->price }}</td>
              <td>{{ $tr->total }}</td>
              <td>
                <button wire:click="edit({{ $tr->id }})" class="btn btn-info btn-sm">edit</button>
                <button wire:click="delete({{ $tr->id }})" class="btn btn-danger btn-sm">Delete</button>
              </td>
             </tr>
             @empty
             <tfoot>
               <td colspan="8" class="text-center">tidak ada transaksi</td>
             </tfoot>
             @endforelse
          </tbody>
          
          <tfoot>
            <td colspan="7" class="text-center">total</td>
            @forelse ($tr_total as $tr)
                <td>{{ $tr->total }}</td>
            @empty
              <td>0</td>  
            @endforelse
            
            
          </tfoot>
       
        </table>
        </div>
    </div>
  
 </div>
</div>
