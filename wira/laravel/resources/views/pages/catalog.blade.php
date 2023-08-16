@extends('layouts.template')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <h4>Catalog Table</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Actions</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach ($catalogs as $catalog)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $catalog->name }}</td>
                        <td>
                          <a href="" class="btn btn-primary">edit</a>
                          <a href="" class="btn btn-danger" onclick="alert('are you sure')">delete</a>
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