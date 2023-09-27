 <form wire:submit.prevent="store">
             
    <div class="row g-2 ml-3">
      <div class="col mb-0">
        <label for="invoice" class="form-label">invoice</label>
       <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">#AAA11</span>
        </div>

        <input type="text" id="invoice" wire:model="invoice" class="form-control" placeholder="masukkan nama"  />
        @error('invoice') <span class="error text-danger">{{ $message }}</span> @enderror
       </div>
      </div>
    </div>


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
        <label for="category" class="form-label">category</label>
          <select id="" wire:model="category_id" class="form-control">
        
          @foreach ($categories as $cat)
            <option :selected="data.category_id == {{ $cat->id }}" value="{{ $cat->id }}">{{ $cat->name }}</option>
          @endforeach
          {{-- :selected="book.publisher_id == {{ $publisher->id}}" --}}
        </select>
          @error('category_id') <span class="error text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <div class="row g-2 ml-3">
      <div class="col mb-0">
        <label for="price" class="form-label">price</label>
        <input type="number" id="price" wire:model="price" class="form-control" placeholder="masukkan nama"  />
          @error('price') <span class="error text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <div class="row g-2 ml-3">
      <div class="col mb-0">
        <label for="qty" class="form-label">qty</label>
        <input type="number" id="qty" wire:model="qty" class="form-control" placeholder="masukkan nama"  />
        @error('qty') <span class="error text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <div class="save-btn ms-auto ml-4 mt-3 mb-3">


          <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>