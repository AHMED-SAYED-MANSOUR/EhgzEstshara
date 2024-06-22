@extends('dashboard')
@section('title')
Create New Order
@endsection
@section('content')
    <div class="container">
        <h1>Create Order</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.order.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="items">Order Items</label>
                <div id="items">
                    <div class="item">
                        <select name="items[0][product_id]" class="form-control product-select">
                            @foreach($products as $product)
                                <option value="{{ $product->id }}" data-price="{{ $product->Price }}">{{ $product->ProductName }}</option>
                            @endforeach
                        </select>
                        <input type="number" name="items[0][quantity]" class="form-control quantity-input" placeholder="Quantity">
                        <input type="number" name="items[0][price]" value="{{$product->Price}}" class="form-control price-input" readonly placeholder="Price">
                    </div>
                </div>
                <button type="button" id="addItem" class="btn btn-secondary mt-2">Add Item</button>
            </div>

            <button type="submit" class="btn btn-primary">Create Order</button>
        </form>
    </div>

    <script>
        document.getElementById('addItem').addEventListener('click', function () {
            var items = document.getElementById('items');
            var itemIndex = items.children.length;
            var itemDiv = document.createElement('div');
            itemDiv.className = 'item';

            var productSelect = document.createElement('select');
            productSelect.name = 'items[' + itemIndex + '][product_id]';
            productSelect.className = 'form-control product-select';
            @foreach($products as $product)
            var option = document.createElement('option');
            option.value = '{{ $product->id }}';
            option.textContent = '{{ $product->ProductName }}';
            option.dataset.price = '{{ $product->Price }}';
            productSelect.appendChild(option);
            @endforeach

            var quantityInput = document.createElement('input');
            quantityInput.type = 'number';
            quantityInput.name = 'items[' + itemIndex + '][quantity]';
            quantityInput.className = 'form-control quantity-input';
            quantityInput.placeholder = 'Quantity';

            var priceInput = document.createElement('input');
            priceInput.type = 'number';
            priceInput.name = 'items[' + itemIndex + '][price]';
            priceInput.className = 'form-control price-input';
            priceInput.placeholder = 'Price';
            priceInput.readOnly = true;

            itemDiv.appendChild(productSelect);
            itemDiv.appendChild(quantityInput);
            itemDiv.appendChild(priceInput);
            items.appendChild(itemDiv);

            attachEventListeners(productSelect, quantityInput, priceInput);
        });

        function attachEventListeners(productSelect, quantityInput, priceInput) {
            productSelect.addEventListener('change', function () {
                var selectedOption = productSelect.options[productSelect.selectedIndex];
                var price = selectedOption.dataset.price;
                priceInput.value = price;
            });

            quantityInput.addEventListener('input', function () {
                var price = productSelect.options[productSelect.selectedIndex].dataset.price;
                var quantity = quantityInput.value;
                priceInput.value = price * quantity;
            });
        }

        document.querySelectorAll('.product-select').forEach(function (select) {
            var priceInput = select.parentElement.querySelector('.price-input');
            var quantityInput = select.parentElement.querySelector('.quantity-input');
            attachEventListeners(select, quantityInput, priceInput);
        });
    </script>
@endsection
