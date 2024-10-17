<form action="{{ route('addProduct') }}" method="post">
@csrf
Product Name: <input type="text" name="name"><br>
Product Type: <input type="text" name="type"><br>
Product Volume: <input type="text" name="volume"><br>
Product Price: <input type="text" name="price"><br>
Product Quantity: <input type="text" name="quantity"><br>
<button> Submit </button>
</form>