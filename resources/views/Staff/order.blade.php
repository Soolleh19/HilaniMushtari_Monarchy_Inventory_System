@if($products->count() > 0)
        <form action="selectProduct" method="POST"> <!-- Optional: Use the form to submit selected product -->
            @csrf
            <label for="product">Choose a product:</label>
            <select name="product" id="product">
                <option value="" disabled selected>Select a product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} - ${{ $product->price }} - Quantity{{ $product->quantity }}</option>
                @endforeach
            </select><br>
            <label for="quantity">quantity: </label>
            <input type="text" name="quantity"><br>


        <!-- Display error message for quantity -->
        @if($errors->has('quantity'))
            <div style="color: red;">
                {{ $errors->first('quantity') }}
            </div>
        @endif
            <button type="submit">Submit</button>
        </form>
    @else
        <p>No products found!</p>
    @endif