<div>
     <div id="data-category">
      <div class="px-3 pt-4 pb-3">
        <h3 class="card-title">Detail Transaction table</h3>
    </div>

    <div class="card-body mt-5">

      <div class="table">
            <table id="datatable" class="table table-bordered">
        <thead>
            <tr>
              <th>no</th>
              <th>Invoice</th>
              <td>Actions</td>
            </tr>
        </thead>
          @php
             $no = 1
          @endphp
          <tbody>
            @foreach ($tr_total as $tr)
             <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $tr->invoice }}</td>
              <td class="text-center">
                {{-- <button data-toggle="modal" data-target="#showModal" wire:click="show({{ $tr->invoice }})" class="btn btn-warning btn-sm">Show</button> --}}
                {{-- <a href="{{ route('transaction-detail-show',$tr->invoice) }}" wire:navigate class="btn btn-sm btn-primary">Show</a> --}}
                {{-- <a href="{{ route('transaction-detail-show',['invoice' => $tr->invoice]) }}" class="btn btn-sm btn-primary">Show</a> --}}
                <a href="{{ route('transaction-detail-show', ['invoice' => $tr->invoice]) }}" class="btn btn-sm btn-primary">Show</a>
               {{-- <button wire:click="show({{ $tr->invoice }})" class="btn btn-info btn-sm">show</button> --}}

              
              </td>
             </tr>
             @endforeach
             
          </tbody>
          
         
       
        </table>
        </div>
    </div>

 
    {{-- @include('livewire.transaction-detail-show') --}}
    {{-- @include('livewire.hello-modal') --}}
 </div>
</div>
