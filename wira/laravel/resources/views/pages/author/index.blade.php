@extends('layouts.template')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
  
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <h4>Author Table</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>

                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Book</th>
                        <th>Created At</th>
                        <th>Actions</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach ($authors as $author)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td>{{ $author->phone_number }}</td>
                        <td>{{ $author->address }}</td>
                        <td>{{ count($author->book_author) }}</td>
                        <td>{{ date('d-m-Y' ,strtotime($author->created_at)) }}</td>
                        <td>
                          <a href="" class="btn btn-primary">edit</a>
                          <form action="" method="POST">
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