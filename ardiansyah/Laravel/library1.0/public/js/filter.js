var app = new Vue({
    el: '#controller',
    data: {
        books: [],
        search: '',
        book: {},
        editStatus: false,
    },
    mounted: function () {
        this.get_books();
    },
    methods: {
        get_books() {
            const _this = this;
            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function (data) {
                    _this.books = JSON.parse(data);
                },
                error: function (error) {
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
                axios.post(this.actionUrl, {
                    _method: 'DELETE'
                }).then(response => {
                    location.reload();
                })
            }
        },
        numberWithSpaces(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        },
        submitForm(event, id) {
            event.preventDefault();
            const _this = this;
            var actionUrl = ! this.editStatus ? this.actionUrl : this.actionUrl+'/'+id;
            axios.post(actionUrl,new FormData($(event.target)[0])).then(response => {
                $('#modal-default').modal('hide');
                _this.table.ajax.reload();
            });
        },
    },
    computed: {
        filteredList() {
            return this.books.filter(book => {
                return book.title.toLowerCase().includes(this.search.toLowerCase())
            })
        }
    }
});
