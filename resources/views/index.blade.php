<form action="/checkout" method="POST">
    <input name="_token" type="hidden" value="{{csrf_token()}}">
    <button type="submit">Checkout</button>
</form>
