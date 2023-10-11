@extends('layouts.admin')
@section('title', 'Book')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card" id="controller">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-5 offset-md-3">
                            <div class="input-group">
                                <input type="text" class="form-control" autocomplete="off" placeholder="Search From Title" v-model="search">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success" @click="addData()"><i class="fas fa-plus"></i> Create</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <dir class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12" v-for="book in filteredList">
                            <div class="info-box shadow" v-on:click="editData(book)">
                                <div class="info-box-content">
                                    <span class="info-box-text h5">@{{ book.title }} (@{{book.qty}})</span>
                                    <span class="info-box-number"><small>Rp. @{{ numberWithSpaces(book.price) }},-</small></span>
                                </div>
                            </div>
                        </div>
                    </dir>
                </div>
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form :action="actionUrl" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h4 class="modal-title">@yield('title')</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                                    <div class="form-group">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" :value="book.isbn" placeholder="Input ISBN" id="isbn">
                                        @error('isbn')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" :value="book.title" placeholder="Input Book Title" id="title">
                                        @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Tahun</label>
                                        <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" :value="book.year" placeholder="Input Year" id="year">
                                        @error('year')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="author_id">Author</label>
                                        <select name="author_id" id="author_id" class="form-control">
                                            @foreach ($authors as $author)
                                            <option :selected="book.author_id == {{ $author->id }}" value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('author_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="publisher_id">Publisher</label>
                                        <select name="publisher_id" id="publisher_id" class="form-control">
                                            @foreach ($publishers as $publisher)
                                            <option :selected="book.publisher_id == {{ $publisher->id }}" value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('publisher_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="catalog_id">Catalog</label>
                                        <select name="catalog_id" id="catalog_id" class="form-control">
                                            @foreach ($catalogs as $catalog)
                                            <option :selected="book.catalog_id == {{ $catalog->id }}" value="{{ $catalog->id }}">{{ $catalog->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('catalog_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Quantity</label>
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" :value="book.qty" placeholder="Input Quantity Stock" id="qty">
                                        @error('qty')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Loan Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" :value="book.price" placeholder="Input Loan Price" id="price">
                                        @error('price')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary my-2"><i class="fas fa-save"></i> Save</button>
                                    <button type="submit" class="btn btn-danger my-2" v-if="editStatus" v-on:click="deleteData(book.id)"><i class="fas fa-trash"></i> Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('js')
<script type="text/javascript">
    var actionUrl = '{{ url('books') }}';
    var apiUrl = '{{ url('api/books') }}';

    var app = new Vue({
        el: '#controller',
        data: {
            books: [],
            search: '',
            book: {},
            editStatus: false
        },
        mounted: function() {
            this.get_books();
        },
        methods: {
            get_books() {
                const _this = this;
                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    success: function(data) {
                        _this.books = JSON.parse(data);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            },
            addData() {
                this.book = {};
                this.editStatus = false;
                $('#modal-lg').modal();
            },
            editData(book) {
                this.book = book;
                this.editStatus = true;
                $('#modal-lg').modal();
            },
            deleteData(id) {

            },
            numberWithSpaces(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        },
        computed: {
            filteredList() {
                return this.books.filter(book => {
                    return book.title.toLowerCase().includes(this.search.toLowerCase());
                });
            }
        }
    });
</script>
@endsection
