<form action="/xu_ly_calulation" method="post">
    @csrf
    <div>
        <label for="">Product Description</label>
        <input type="text" name="product_description" >
    </div>
    <div>
        <label for="">List Price</label>
        <input type="text" name="list_price" >
    </div>
    <div>
        <label for="">Discount Percent</label>
        <input type="text" name="discount_percent" >
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>