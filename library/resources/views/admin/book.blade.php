@extends('layouts.main')
@section('header', 'Books')

@section('css')

@endsection

@section('content')
    <div id="app">
        <h2 class="text-center display-4">Search</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="simple-results.html">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here"
                            v-model="search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <button type="button" @click="addData()" class="btn btn-primary">Create new book</button>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3" v-for="book in filteredList">
                <div class="info-box" v-on:click="editData(book)">
                    <div class="info-box-content">
                        <span class="info-box-text">@{{ book.title }} (@{{ book.qty }})</span>
                        <span class="info-box-number">Rp. @{{ formatNumber(book.price) }},-</span>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form :action="actionUrl" method="POST" autocomplete="off" @submit="submitForm($event, data.id)">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">ISBN</label>
                                    <input type="number" class="form-control" name="isbn" id="isbn"
                                        placeholder="isbn.." required :value="book.isbn">
                                </div>
                                <div class="form-group">
                                    <label for="">title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="title.." required :value="book.title">
                                </div>
                                <div class="form-group">
                                    <label for="">year</label>
                                    <input type="number" class="form-control" name="year" id="year"
                                        placeholder="year.." required :value="book.year">
                                </div>
                                <div class="form-group">
                                    <label for="">publisher</label>
                                    <select name="publisher_id" id="publisher_id" class="form-control">
                                        @foreach ($publishers as $publisher)
                                            <option :selected="book.publisher_id == {{ $publisher->id }}"
                                                value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">author</label>
                                    <select name="author_id" id="author_id" class="form-control">
                                        @foreach ($authors as $author)
                                            <option :selected="book.author_id == {{ $author->id }}"
                                                value="{{ $author->id }}">
                                                {{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">catalog</label>
                                    <select name="catalog_id" id="catalog_id" class="form-control">
                                        @foreach ($catalogs as $catalog)
                                            <option :selected="book.catalog_id == {{ $catalog->id }}"
                                                value="{{ $catalog->id }}">
                                                {{ $catalog->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">qty</label>
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="qty.." required :value="book.qty">
                                </div>
                                <div class="form-group">
                                    <label for="">price</label>
                                    <input type="number" class="form-control" name="price" id="price"
                                        placeholder="price.." required :value="book.price">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default btn-danger" v-if="editStatus"
                                v-on:click="deleteData(book.id)">delete</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>



    </div>
@endsection

@section('js')

    <script type="text/javascript">
        var actionUrl = '{{ url('books') }}';
        var apiUrl = '{{ url('api/books') }}';

        var app = new Vue({
            el: '#app',
            data: {
                books: [],
                book: {},
                search: '',
                actionUrl,
                apiUrl,
                editStatus: false
            },
            mounted: function() {
                this.getBooks();
            },
            methods: {
                getBooks() {
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
                    $('#modal-default').modal();
                },
                editData(book) {
                    this.book = book;
                    this.editStatus = true;
                    $('#modal-default').modal();
                },
                deleteData(id) {
                    if (confirm("Are you sure?")) {
                        $(event.target).parents('tr').remove();
                        axios.post(this.actionUrl + '/' + id, {
                            _method: 'DELETE'
                        }).then(response => {
                            alert('Data has been remoed!');
                        });
                    }
                },
                formatNumber(number) {
                    return number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                },
                submitForm(event, id) {
                    event.preventDefault();
                    const _this = this;
                    var actionUrl = !this.editStatus ? this.actionUrl : this.actionUrl + '/' + id;
                    axios.post(actionUrl, new FormData($(event.target)[0])).then(response => {
                        $('#modal-default').modal('hide');
                        _this.table.ajax.reload();
                    });
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
