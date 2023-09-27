@extends('layouts.home')

@section('content')

 <div id="data-category">
      <div class="px-3 pt-4 pb-3">
        <h3 class="card-title">Transaction table</h3>
    </div>
    

    <div class="row mt-5 justify-content-between">
      <div class="col-md-3">
       <form :action="actionUrl" method="post" @submit="submitForm($event,data.id)">
              @csrf
              {{-- @method('PUT') --}}
            <div class="row g-2 ml-3">
              <div class="col mb-0">
                <label for="product_sn" class="form-label">product_sn</label>
                <input type="text" id="product_sn" name="product_sn" :value="data.product_sn"  class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>

            <div class="row g-2 ml-3">
              <div class="col mb-0">
                <label for="products" class="form-label">products</label>
                 <select name="products_id" id="" class="form-control">
                
                  @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                 @endforeach
                 
                </select>
              </div>
            </div>

            <div class="row g-2 ml-3">
              <div class="col mb-0">
                <label for="category" class="form-label">category</label>
                 <select  name="category_id" id="" class="form-control">
                
                  @foreach ($category as $cat)
                    <option :selected="data.category_id == {{ $cat->id }}" value="{{ $cat->id }}">{{ $cat->name }}</option>
                 @endforeach
                 {{-- :selected="book.publisher_id == {{ $publisher->id}}" --}}
                </select>
              </div>
            </div>



            <div class="row g-2 ml-3">
              <div class="col mb-0">
                <label for="price" class="form-label">price</label>
                <input type="number" id="price" name="price" :value="data.price" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>

            <div class="row g-2 ml-3">
              <div class="col mb-0">
                <label for="qty" class="form-label">qty</label>
                <input type="number" id="qty" name="qty" :value="data.qty" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>
         
          
         
        
            <div class="save-btn ms-auto ml-4 mt-3">
            <button type="submit" class="btn btn-primary save-btn-position">Add transaction</button>
       

          </div>
          </form>
      </div>

      <div class="col-md-7">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>no</th>
              <th>product name</th>
              <th>category</th>
              <th>unit</th>
              <th>price</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
             <td>no</td>
              <td>product name</td>
              <td>category</td>
              <td>unit</td>
              <td>price</td>
          </tbody>
          <tfoot>
            <td colspan="4" class="text-center">total</td>
            <td>50000</td>
          </tfoot>
        </table>
      </div>
    </div>
      
  
 </div>
    

@endsection

@push('style')
   
@endpush

@push('script')


@endpush