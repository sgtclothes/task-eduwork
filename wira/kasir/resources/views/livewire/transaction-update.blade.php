 <form wire:submit.prevent="update">
             <input type="hidden" wire:model="transaction_id">
         
            <div class="row g-2 ml-3">
              <div class="col mb-0">
                <label for="products" class="form-label">products</label>
                 <select id="" wire:model="products_id" class="form-control">

                  @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                 @endforeach
                 
                </select>
                  @error('products_id') <span class="error text-danger">{{ $message }}</span> @enderror
              </div>
            </div>

        
            <div class="row g-2 ml-3">
              <div class="col mb-0">
                <label for="qty" class="form-label">qty</label>
                <input type="number" id="qty" wire:model="qty" class="form-control" placeholder="masukkan nama"  />
                @error('qty') <span class="error text-danger">{{ $message }}</span> @enderror
              </div>
            </div>

            
     @php
        $statusAlert = 'text-success';
     @endphp
        @if(session()->has('status'))
          @if(session('status') == 'failed')
            @php
              $statusAlert = 'text-danger';
            @endphp
          @endif
        @endif 

    @if (session()->has('message'))
      <span class="error {{ $statusAlert }}" role="alert">
        <p class="ml-4">{{ session('message') }}</p>  
        </span>
    @endif 

    <div class="save-btn ms-auto ml-4 mt-3 mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </form>