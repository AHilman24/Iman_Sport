<div class="cart clearfix animate-effect">
    <div class="action">
        <ul class="list-unstyled">
            {{-- <li class="add-cart-button btn-group">
        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
        <form action="/cart/{produk}" method="post">
          @csrf
          <button class="btn btn-primary cart-btn" type="submit">Add to cart</button>
          
        </form>
      </li> --}}
            <li class="lnk">
                <form action="/cart" method="post">
                    @csrf
                    {{-- <input type="hidden" name="id_produk" value="{{  }}"> --}}
                    <a href="/cart/{produk}" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                </form>
            </li>
            <li class="lnk wishlist"> <a class="add-to-cart" href="/cart/{produk}" title="Wishlist"> <i
                        class="icon fa fa-heart"></i> </a> </li>
            <li class="lnk"> <a class="add-to-cart" href="/cart" title="Compare"> <i class="fa fa-signal"
                        aria-hidden="true"></i> </a> </li>
        </ul>
    </div>
</div>
