<div class="row g-4" id="productsList">
    @foreach($products as $product)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative rounded overflow-hidden">
                <div class="overflow-hidden">
                    <img class="img-fluid fixed-size" src="{{ asset('products images/'.$product->img) }}" alt="">
                </div>
                <div class="team-text bg-light text-center p-4">
                    <h5>{{ $product->ProductName }}</h5>
                    @if($product->offer)
                            <?php
                            $newPrice = $product->Price - ($product->Price * $product->offer / 100);
                            ?>
                        <p>
                            <span>{{ $newPrice }} LE</span>
                            <span style="text-decoration: line-through; color: red;">{{ $product->Price }} LE</span>
{{--                            <span>{{ $product->offer }}% Discount</span>--}}
                        </p>

                    @else
                        <p>{{ $product->Price }} LE</p>
                    @endif

                    @if(Auth::check())
                        <form method="post" action="{{ route('cart.add', ['productId' => $product->id]) }}">
                            @csrf
                            <button type="submit" class="addtocart">Add to Cart</button>
                        </form>
                    @endif

                    <div class="team-item">
                        <!-- Product content -->
                        <div class="team-offer">
                            <a>
                                @if($product->offer)
                                    <span class="btn-not-square">{{ $product->offer }}% Discount</span>
                                @endif
                            </a>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square" href="{{ Auth::check() ? route('cart.index') : route('sign') }}">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                            <a class="btn btn-square" href="{{ Auth::check() ? route('cart.index') : route('sign') }}">
                                <i class="fa fa-heart"></i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    @endforeach
</div>
