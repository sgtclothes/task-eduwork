<div>
   <div id="data-category">
      <div class="px-3 pt-4 pb-3">
        <h3 class="card-title">Transaction table</h3>
    </div>
    

    <div class="row mt-5 justify-content-between">
      <div class="col-md-3">
       @if ($updateMode)
           @include('livewire.transaction-update')
       @else
          @include('livewire.transaction-create')
       @endif
      </div>

      
      <div class="col-md-8">
        
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>no</th>
              <th>product name</th>
              <th>qty</th>
              <th>total</th>
              <th>action</th>
            </tr>
          </thead>
          @php
             $no = 1
          @endphp
        @forelse ($transaction as $tr)
          <tbody>
              <td>{{ $no++ }}</td>
              <td>{{ $tr->product->name }}</td>
              <td>{{ $tr->qty }}</td>
              <td>{{ $tr->total }}</td>
              <td>
                <button wire:click="edit({{ $tr->id }})" class="btn btn-info btn-sm">edit</button>
                <button wire:click="delete({{ $tr->id }})" class="btn btn-danger btn-sm">Delete</button>
              </td>
          </tbody>
          
          @empty
          <tfoot>
            <td colspan="8" class="text-center">tidak ada transaksi</td>
          </tfoot>
          @endforelse
          <tfoot>
            <td colspan="4" class="text-center">total</td>
            @forelse ($tr_total as $tr)
                <td>{{ $tr->total }}
                  <form wire:submit.prevent="transfer">
                    <button type="submit" class="btn btn-primary btn-sm">Oke</button>
                  </form>
                
                </td>
                 
                
            @empty
              <td>0</td>  
            @endforelse
            
            
          </tfoot>
          
        </table>
      </div>
    </div>
      
  
 </div>
</div>
