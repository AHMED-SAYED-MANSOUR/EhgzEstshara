<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Physiorevive</title>
    <link rel="icon" href="{{ asset('images/Icons/IMG_2837.PNG') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/cart.css') }}">
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/aos.js') }}"></script>
    <script src="{{ asset('front/js/all.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
</head>

<body>

@include('navbar')

<div class="container">
    <h1>Your Cart</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Remove Product</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $item)
            <tr data-id="{{ $item->id }}" data-price="{{ $item->product->Price }}">
                <td>{{ $item->product->ProductName }}</td>
                <td>${{ $item->product->Price }}</td>
                <td>
                    <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" min="1" placeholder=""
                               aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>
                </td>

{{--                <td class="subtotal">${{ $item->product->Price * $item->Quantity }}</td>--}}
                <td>
                    <form method="post" action="{{route('cart.delete',['cartId'=>$item->id])}}" class="remove-form" data-id="{{ $item->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm remove-btn">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-right">
        <h4>Total: $<span id="total">{{ $cartItems->sum(function($item) { return $item->product->Price * $item->Quantity; }) }}</span></h4>
        <form action="{{ url('/payment') }}" method="POST">
            @csrf
            <input type="hidden" name="total_price" >
            <button type="submit" class="btn btn-primary">Checkout</button>
        </form>
    </div>
{{--        <button href="{{url('/payment')}}}" type="submit" class="btn btn-primary">Checkout</button>--}}

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.remove-btn').on('click', function() {
            var form = $(this).closest('form');
            var itemId = form.data('id');
            var row = $('#cart-item-' + itemId);

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: form.serialize(),
                success: function(response) {
                    row.remove(); // Remove the row from the table
                    // Optionally, you can update the total price here
                },
                error: function(response) {
                    alert('Error removing item.');
                }
            });
        });
    });
</script>

<script>
    var sitePlusMinus = function() {
        $('.js-btn-minus').on('click', function(e){
            e.preventDefault();
            var input = $(this).closest('.input-group').find('.form-control');
            var newValue = parseInt(input.val()) - 1;
            if (newValue >= 0) {
                input.val(newValue);
                updateTotal();
            }
        });

        $('.js-btn-plus').on('click', function(e){
            e.preventDefault();
            var input = $(this).closest('.input-group').find('.form-control');
            var newValue = parseInt(input.val()) + 1;
            input.val(newValue);
            updateTotal();
        });

        function updateTotal() {
            var total = 0;
            $('tbody tr').each(function() {
                var price = parseFloat($(this).attr('data-price'));
                var quantity = parseInt($(this).find('.form-control').val());
                total += price * quantity;
            });
            $('#total').text(total.toFixed(2));
        }
        $('.remove-btn').on('click', function(e){
            e.preventDefault();
            var cartItemId = $(this).closest('.remove-form').data('id');
            $.ajax({
                url: '/cart/delete/' + cartItemId,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        // Remove the row from the table
                        $(this).closest('tr').remove();
                        // Update the total count
                        updateTotal();
                    }
                }.bind(this),
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // Function to update total
        function updateTotal() {
            var total = 0;
            $('tbody tr').each(function() {
                var price = parseFloat($(this).attr('data-price'));
                var quantity = parseInt($(this).find('.form-control').val());
                total += price * quantity;
            });
            $('#total').text(total.toFixed(2));
        }
    };

    sitePlusMinus();
</script>



@include('footer')

</body>
</html>
