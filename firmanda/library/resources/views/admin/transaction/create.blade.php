@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('tittle', 'transactionPage')
@section('header')
    Create Transaction
@endsection
@section('content')
    <form action="{{ url('catalogs') }}" method="POST">
        @csrf
        <div class="card-body">

            {{-- yang dipinjam --}}
            <!-- /.row -->
            <label for="username"> Nama Member</label>
            <input type="text" class="form-control mb-2" placeholder="Username" aria-label="Username" id="username"
                id="username" aria-describedby="addon-wrapping" value="">
            <input type="hidden" id="user_id" name="user_id">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><label for="exampleInputEmail1">Daftar yang Dipilih</label></h3>
                        </div>
                        <!-- ./card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="borrowedBooksTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>id</th>
                                        <th>Judul Buku</th>
                                        <th>Harga Pinjam</th>
                                        <th>Katalog</th>
                                        <th>Kuantitas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td>Approved</td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr class="expandable-body">
                                        <td colspan="5">
                                            <p>
                                                Author
                                                Publisher
                                                tahun terbit
                                                ISBN
                                            </p>
                                        </td>
                                    </tr> --}}

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary btn-submit">Submit</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            {{-- search book --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><label for="exampleInputEmail1">Daftar Buku</label></h3>

                            <div class="card-tools">

                                <input type="text" name="cari" id="cari" class="form-control float-right"
                                    placeholder="Search" value="">
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" id="booksTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Judul Buku</th>
                                            <th>Harga Buku</th>
                                            <th>Kuantitas</th>
                                            <th>Katalog</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $key => $book)
                                            <tr>
                                                <td>
                                                    {{ $books->firstItem() + $key }}
                                                </td>
                                                <td>
                                                    {{ $book->id }}
                                                </td>
                                                <td>
                                                    {{ $book->title }}
                                                </td>
                                                <td>
                                                    {{ $book->price }}
                                                </td>
                                                <td>
                                                    {{ $book->qty }}
                                                </td>
                                                <td>
                                                    {{ $book->catalog->name ?? 'N/A' }}
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-primary  btn-pinjam">Pinjam</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {{ $books->links('pagination::bootstrap-4') }}
                                    {{-- <li class="page-item"><a class="page-link" href="#"></a></li> --}}

                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

    </form>
    <div class="data"></div>
@endsection
@section('js')
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        let memberID
        // find data
        $('#cari').on('keyup', function() {
            let query = $(this).val();
            console.log(query);
            $.ajax({
                url: "{{ route('transactions.cari') }}",
                type: "GET",
                data: {
                    cari: query
                },
                success: function(data) {
                    console.log(data);
                    let rows = '';
                    data.data.forEach((book, index) => {
                        rows += `
                            <tr>
                                <td>${data.from + index}</td>
                                <td>${book.id}</td>
                                <td>${book.title}</td>
                                <td>${book.price}</td>
                                <td>${book.qty}</td>
                                <td>${book.catalog ? book.catalog.name : 'N/A'}</td>
                                <td><button type="button" class="btn btn-primary  btn-pinjam">Pinjam</button></td>
                            </tr>
                        `;
                        console.log(rows);
                    });
                    $('#booksTable tbody').html(rows);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // add data local storage
        $('#booksTable').on('click', '.btn-pinjam', function() {
            // Ambil data dari baris yang dipilih
            let row = $(this).closest('tr');
            let id = row.find('td').eq(1).text().trim();
            let title = row.find('td').eq(2).text().trim();
            let price = row.find('td').eq(3).text().trim();
            let qty = 1;
            let catalog = row.find('td').eq(5).text().trim();
            // Ambil data yang sudah ada di Local Storage atau inisialisasi array kosong
            let borrowedBooks = JSON.parse(localStorage.getItem('borrowedBooks')) || [];
            let bookEsxists = borrowedBooks.find(book => book.id === id);
            if (bookEsxists) {
                console.log(bookEsxists)
                bookEsxists.qty += 1;
                localStorage.setItem('borrowedBooks', JSON.stringify(borrowedBooks));
            } else {
                // Tambahkan buku ke array borrowedBooks

                borrowedBooks.push({
                    id: id,
                    title: title,
                    price: price,
                    qty: qty,
                    catalog: catalog
                });

                // Simpan kembali array ke Local Storage
                localStorage.setItem('borrowedBooks', JSON.stringify(borrowedBooks));
            }

            console.log(borrowedBooks); // Tampilkan isi array di console
            loadBorrowedBooks();
        });
        // show data local storage
        function loadBorrowedBooks() {
            // Ambil data dari Local Storage
            let borrowedBooks = JSON.parse(localStorage.getItem('borrowedBooks')) || [];
            let rows = '';
            console.log(borrowedBooks);
            // Loop melalui setiap buku dan buat baris tabel untuk setiap buku
            borrowedBooks.forEach((book, index) => {
                if (book.qty > 1) {
                    rows += `
                        <tr>
                            <td>${index + 1}</td> <!-- Nomor urut -->
                            <td>${book.id}</td> <!-- ID Buku -->
                            <td>${book.title}</td> <!-- Judul Buku -->
                            <td>${book.price}</td> <!-- Harga Buku -->
                            <td>${book.catalog}</td> <!-- katalog Buku -->
                            <td>${book.qty}</td> <!-- Kuantitas Buku -->
                            <td><button type="button" class="btn btn-primary btn-remove">Hapus</button> <button type="button" class="btn btn-primary mt-1 btn-remove-some">kurangi</button> </td>  <!-- Tombol Hapus -->
                        </tr>
                    `;

                } else {
                    rows += `
                    <tr>
                        <td>${index + 1}</td> <!-- Nomor urut -->
                        <td>${book.id}</td> <!-- ID Buku -->
                        <td>${book.title}</td> <!-- Judul Buku -->
                        <td>${book.price}</td> <!-- Harga Buku -->
                        <td>${book.catalog}</td> <!-- katalog Buku -->
                        <td>${book.qty}</td> <!-- Kuantitas Buku -->
                        <td><button type="button" class="btn btn-primary btn-remove">Hapus</button></td> <!-- Tombol Hapus -->
                    </tr>
                    `;

                }

            });
            // Masukkan baris-baris ini ke dalam tbody dari tabel
            $('#borrowedBooksTable tbody').html(rows);
            let formData = JSON.parse(localStorage.getItem('formData'));
            if (formData != null) {

                $('#user_id').val(formData.id || '');
                console.log(formData.id || '');
                $('#username').val(formData.name || '');
            }
        }




        // delete data local storage
        $(document).on('click', '.btn-remove', function() {
            let row = $(this).closest('tr');
            let bookId = row.find('td').eq(1).text().trim();

            // Ambil data dari Local Storage
            let borrowedBooks = JSON.parse(localStorage.getItem('borrowedBooks')) || [];

            // Hapus buku yang sesuai dari array
            borrowedBooks = borrowedBooks.filter(book => book.id != bookId);

            // Simpan kembali ke Local Storage
            localStorage.setItem('borrowedBooks', JSON.stringify(borrowedBooks));

            // Hapus baris dari tabel
            row.remove();
            loadBorrowedBooks()
        });
        // decrease data local storage
        $(document).on('click', '.btn-remove-some', function() {
            let row = $(this).closest('tr');
            let bookId = row.find('td').eq(1).text().trim();

            // Ambil data dari Local Storage
            let borrowedBooks = JSON.parse(localStorage.getItem('borrowedBooks')) || [];

            // Hapus buku yang sesuai dari array
            existing = borrowedBooks.find(book => book.id === bookId);
            console.log(existing);
            if (existing) {
                console.log(borrowedBooks)
                existing.qty -= 1;
                localStorage.setItem('borrowedBooks', JSON.stringify(borrowedBooks));
            }
            loadBorrowedBooks()
        });

        // submit data
        $(document).on('click', '.btn-submit', function() {
            let borrowedBooks = JSON.parse(localStorage.getItem('borrowedBooks')) || [];
            
            let bookIds = borrowedBooks.map(book => book.id);
            let bookQty = borrowedBooks.map(book => book.qty);
            let userID = $('#user_id').val();
            $.ajax({
                url: "/transactions", // URL endpoint Laravel untuk menyimpan data
                type: "POST",
                data: {
                    // books: borrowedBooks,
                    user_id: userID,
                    book_id: bookIds,
                    book_qty: bookQty,
                    _token: '{{ csrf_token() }}' // Token CSRF untuk keamanan
                },
                success: function(response) {
                    // console.log("Data berhasil disimpan ke database:", response);
                    // Hapus data dari Local Storage setelah berhasil disimpan
                    localStorage.removeItem('borrowedBooks');
                    localStorage.removeItem('formData');
                    window.location.href = '/transactions';
                },
                error: function(xhr, status, error) {
                    console.error("Terjadi kesalahan saat mengirim data:", xhr.responseText);
                    
                }
            });
        });


        // Panggil fungsi loadBorrowedBooks untuk memuat data saat halaman dimuat
        $(document).ready(function() {

            loadBorrowedBooks();

            $("#username").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('findMember') }}",
                        type: 'GET',
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            response($.map(data, function(item) {
                                console.log(item.id)
                                return {
                                    label: item
                                        .name, // Nama yang akan ditampilkan
                                    value: item
                                        .name, // Nilai yang dimasukkan ke input
                                    id: item.id // ID yang terkait
                                };
                            }));
                            // response(data);
                            // console.log(data)
                        }
                    });
                },
                minLength: 2, // Mulai menampilkan hasil setelah 2 karakter
                select: function(event, ui) {
                    // Ketika item dipilih, ambil ID-nya
                    let userId = ui.item.id;
                    console.log(ui);
                    let formData = {
                        name: ui.item.value,
                        id: ui.item.id,
                    }
                    localStorage.setItem('formData', JSON.stringify(formData));
                    // Misalnya, simpan ID di input hidden atau field lain
                    $('#user_id').val(userId);
                }
            });
        });
    </script>
@endsection
