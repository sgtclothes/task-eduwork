@extends('layouts.template')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
  
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <h4>Catalog Table</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                  <a href="{{ route('catalog-create') }}">
                    <button class="btn btn-primary ms-3 my-2">Create New Catalog</button>
                  </a>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Book</th>
                        <th>Created At</th>
                        <th>Actions</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach ($catalogs as $catalog)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $catalog->name }}</td>
                        <td>{{ count($catalog->book_catalog) }}</td>
                        <td>{{ date('d-m-Y' ,strtotime($catalog->created_at)) }}</td>
                        <td>
                          <a href="{{ route('catalog-edit', $catalog->id) }}" class="btn btn-primary">edit</a>
                          <form action="{{ route('catalog-delete', $catalog->id) }}" method="POST">
                            @csrf
                            @method('delete')
                          <button class="btn btn-danger" onclick="alert('are you sure')">delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />

            
              <!--/ Responsive Table -->
            </div>

@endsection