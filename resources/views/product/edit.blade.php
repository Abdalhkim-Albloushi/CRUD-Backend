<h2>Edit Page</h2>



<form action="{{ route('product.update',$edit1->id) }}" method="POST">
    <div>
        @csrf


<input type="text" name="title" placeholder="enter title" value="{{ $edit1->title }}">
<br>
<br>

<input type="text" name="price" placeholder="enter price" value="{{ $edit1->price }}">
<br>
<br>
<input type="text" name="details" placeholder="details" value="{{ $edit1->details }}">
</div>
<br>
<br>

<button  type="submit", >Create</button>

</form>