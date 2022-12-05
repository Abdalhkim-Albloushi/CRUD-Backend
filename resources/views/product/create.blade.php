<p>Create Product</p>


<form action="{{ route('product.insert') }}" method="POST">
    <div>
        @csrf

        <input type="text" name="title" placeholder="enter title">
        <br>
        <br>

        <input type="text" name="price" placeholder="enter price">
        <br>
        <br>
        <input type="text" name="details" placeholder="details">
    </div>
    <br>

    <button  type="submit", >Create</button>
</form>