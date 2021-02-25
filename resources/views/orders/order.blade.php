<h1>{{$product->restaurants->restaurant_name}}</h1>
    <h2 class="ordertitle">Your order:</h2>
    <h3>{{$product->food_name}}</h3>
    <form method="GET" action="{{route('session')}}" class="orderoverlay" id="orderoverlay" name="orderoverlay">
      @csrf
      <div>
        <label for="Restaurant"></label>
      <input type="text" class="restaurant" name="restaurant" id="restaurant" value="{{$product->restaurants->restaurant_name}}" style="display: none;" required>
      </div>
      <div>
          <label for="Product"></label>
        <input type="text" class="product" name="product" id="product" value="{{$product->food_name}}" style="display: none;" required>
        </div>
        <div>
        </div>
        <div>
        <label for="price"></label>
        <input type="text" class="price" name="price" id="price" value="{{$product->price}}" style="display: none;" required>
        </div>
        <div id="input_div">
          <input type="number" value="1" name="quantity" id="quantity" max="25">
          
      </div>
      
      </div>
    
    <button class="button is-link" type="submit">Confirm</button>
  </form>