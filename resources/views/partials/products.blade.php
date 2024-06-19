<div class="row g-4" id="productsList">
    @foreach($products as $product)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative rounded overflow-hidden">
                <div class="overflow-hidden">
                    <img class="img-fluid fixed-size" src="{{ asset('products images/'.$product->img) }}" alt="">
                </div>
                <div class="team-text bg-light text-center p-4">
                    <h5>{{ $product->ProductName }}</h5>
                    <p class="text-primary">{{ $product->Category }}</p>
                    <div class="team-social text-center">
                        <a style="padding-right: 10px" class="btn btn-square" href=""><i class="fa-solid fa-cart-shopping"></i></a>
                        <a class="btn btn-square" href=""><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
