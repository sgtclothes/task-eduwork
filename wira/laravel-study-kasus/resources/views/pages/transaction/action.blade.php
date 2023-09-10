<a href="{{ route('transactions.edit', $id) }}" class="edit btn btn-success btn-sm">Edit</a> 
<a href="javascript:void(0)" class="detail btn btn-warning btn-sm">detail</a>

<form action="{{ route('transactions.destroy', $id) }}" method="POST">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm" onclick="alert('are you sure')">delete</button>

</form>