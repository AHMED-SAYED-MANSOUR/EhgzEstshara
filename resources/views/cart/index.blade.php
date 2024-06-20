<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>phsyiorevive</title>
    <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/cart.css')}}">
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/js/aos.js')}}"></script>
    <script src="{{asset('front/js/all.js')}}"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
</head>

<body>

@include('navbar')



        <h1>Your Cart</h1>
        <ul>
            @foreach($cartItems as $item)
                <li>
                    <div>{{ $item->product->ProductName }}</div>
                    <div>Price: ${{ $item->product->Price }}</div>
                    <div>
                        Quantity:
                        <button class="quantity-decrement" data-id="{{ $item->id }}">-</button>
                        <span>{{ $item->Quantity }}</span>
                        <button class="quantity-increment" data-id="{{ $item->id }}">+</button>
                    </div>
                    <div>Subtotal: ${{ $item->product->Price * $item->Quantity }}</div>
                    <form action="{{ route('cart.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>


        <div>Total: ${{ $cartItems->sum(function($item) { return $item->product->Price * $item->Quantity; }) }}</div>
        <form action="{{ route('orders.create') }}" method="POST">
            @csrf
            <button type="submit">Checkout</button>
        </form>
    </div>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.quantity-increment').forEach(button => {
                button.addEventListener('click', function() {
                    const cartId = this.getAttribute('data-id');
                    fetch(`/cart/update/${cartId}`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ quantity: parseInt(this.nextElementSibling.textContent) + 1 })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                location.reload();
                            }
                        });
                });
            });

            document.querySelectorAll('.quantity-decrement').forEach(button => {
                button.addEventListener('click', function() {
                    const cartId = this.getAttribute('data-id');
                    const currentQuantity = parseInt(this.previousElementSibling.textContent);
                    if (currentQuantity > 1) {
                        fetch(`/cart/update/${cartId}`, {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ quantity: currentQuantity - 1 })
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    location.reload();
                                }
                            });
                    }
                });
            });
        });
    </script>
@endsection


@include('footer')

</body>
</html>
