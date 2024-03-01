@extends('layouts.admin')
@section('tittle', 'bookPage')

@section('css')
@endsection

@section('header')
    book

@endsection
@section('content')
    <div id="controller">
        {{-- search --}}

        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" autocomplete="off" placeholder="search the tittle"
                        v-model="search">
                </div>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-primary" style="margin-left:10px;" @click="addData()">create new </a>
            </div>
        </div>

        {{-- searche dn --}}
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">


        {{-- box --}}
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12" v-for="book in filteredList">
                <div class="info-box" @click="editData(book)">
                    <div class="info-box-content">
                        <span class="info-box-text h3">
                            @{{ book.title }} | (@{{ book.qty }})
                        </span>

                        <span class="info-box-number">
                            <big>Rp.</big>
                            @{{ formatNumber(book.price) }} ,-
                        </span>
                    </div>
                </div>
            </div>
        </div>
        {{-- box end --}}

        {{-- modal --}}
        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <form :action="actionUrl" method="post" autocomplete="off" >
                        <div class="modal-header">
                            <h4 class="modal-title">Create new Author</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" v-if='editStatus'>
                            <div class="form-group">
                                <label>ISBN</label>
                                <input type="number" name="isbn" required="" :value="data.isbn"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="title" required="" :value="data.title"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>year</label>
                                <input type="number" name="year" required="" :value="data.year"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>publisher</label>
                                <select class="form-control" aria-label="Default select example" name="publisher_id">
                                    @foreach ($publishers as $publisher)
                                        <option :selected="data.publisher_id == {{ $publisher->id }}"
                                            value="{{ $publisher->id }}">
                                            {{ $publisher->name }};
                                        </option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label>author</label>
                                <select class="form-control" aria-label="Default select example" name="author_id">
                                    @foreach ($authors as $author)
                                        <option :selected="data.author_id == {{ $author->id }}"
                                            value="{{ $author->id }}">
                                            {{ $author->name }};
                                        </option>
                                    @endforeach


                                </select>

                            </div>
                            <div class="form-group">
                                <label>catalog</label>
                                <select class="form-control" aria-label="Default select example" name="catalog_id">
                                    @foreach ($catalogs as $catalog)
                                        <option :selected="data.catalog_id == {{ $catalog->id }}"
                                            value="{{ $catalog->id }}">
                                            {{ $catalog->name }};
                                        </option>
                                    @endforeach


                                </select>

                            </div>
                            <div class="form-group">
                                <label>quantity stock</label>
                                <input type="number" name="qty" required="" :value="data.qty"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" required="" :value="data.price"
                                    class="form-control">
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" v-if='editStatus'
                                @click="deleteData(data.id)">Delete</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- modal end --}}
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        var actionUrl = "{{ url('books') }}";
        var apiUrl = "{{ url('api/books') }}";
        var app = new Vue({
            el: "#controller",
            data: {
                actionUrl,
                apiUrl,
                books: [],
                search: '',
                data: {},
                editStatus: false,
            },
            mounted: function() {
                this.get_books();
            },
            methods: {
                get_books() {
                    const _this = this;
                    $.ajax({
                        url: apiUrl,
                        method: "GET",
                        success: function(data) {
                            _this.books = JSON.parse(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                },

                formatNumber(number) {
                    return number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                },
                addData() {
                    $("#modal-xl").modal();
                    this.data = {};
                    this.actionUrl = "{{ url('books') }}";
                    console.log(this.actionUrl);
                    this.editStatus = false;

                },
                editData(data) {
                    $("#modal-xl").modal();
                    this.actionUrl = "{{ url('books') }}" + "/" + data.id;
                    this.data = data;
                    console.log(this.actionUrl);
                    this.editStatus = true;
                },
                deleteData(id) {
                    this.actionUrl = "{{ url('books') }}" + "/" + id;
                    console.log(this.actionUrl);
                    this.editStatus = false;
                    if (confirm("wanna delete this data?")) {
                        axios.post(this.actionUrl, {
                            _method: 'DELETE'
                        }).then(response => {
                            location.reload();
                            // alert("Successfully deleted");
                        })

                    }
                },
                // submitForm(event) {
                //     event.preventDefault();
                //     const _this = this;
                //     var actionUrl = !this.editStatus ? this.actionUrl : this.actionUrl + '/' + id;
                //     axios.post(actionUrl, new FormData($(event.target)[0])).then(response => {
                //         $('#modal-xl').modal('hide');
                //         _this.books.ajax.reload();
                //     });

                // },

            },
            computed: {
                filteredList() {
                    return this.books.filter(book => {
                        return book.title.toLowerCase().includes(this.search.toLowerCase());
                    })
                },
            },
        })
    </script>
@endsection
