@extends('dashboard')
@section('title')
    Edit Order
@endsection
@section('content')
    <div class="container mt-5">
        <h1>Edit Order</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.order.update', ['id' => $order->id]) }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="items">Order Items</label>
                <div id="items">
                    @foreach($order->items as $index => $item)
                        <div class="item mb-3" data-index="{{ $index }}">
                            <select name="items[{{ $index }}][product_id]" class="form-control product-select">
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" data-price="{{ $product->Price }}" {{ $item->product_id == $product->id ? 'selected' : '' }}>{{ $product->ProductName }}</option>
                                @endforeach
                            </select>
                            <input type="number" name="items[{{ $index }}][quantity]" class="form-control quantity-input" placeholder="Quantity" value="{{ $item->quantity }}">
                            <input type="number" name="items[{{ $index }}][price]" class="form-control price-input" readonly placeholder="Price" value="{{ $item->price }}">
                            <button type="button" class="btn btn-danger btn-sm remove-item">Remove</button>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="addItem" class="btn btn-secondary mt-2">Add Item</button>
            </div>

            <div class="form-group mb-3">
                <label for="total_price">Total Price</label>
                <input type="number" id="total_price" class="form-control" readonly value="{{ $order->total_price }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
    </div>

    <script>
        document.getElementById('addItem').addEventListener('click', function () {
            var items = document.getElementById('items');
            var itemIndex = items.children.length;
            var itemDiv = document.createElement('div');
            itemDiv.className = 'item mb-3';
            itemDiv.dataset.index = itemIndex;

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

            var removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'btn btn-danger btn-sm remove-item';
            removeButton.textContent = 'Remove';

            itemDiv.appendChild(productSelect);
            itemDiv.appendChild(quantityInput);
            itemDiv.appendChild(priceInput);
            itemDiv.appendChild(removeButton);
            items.appendChild(itemDiv);

            attachEventListeners(productSelect, quantityInput, priceInput);
            attachRemoveListener(removeButton, itemDiv);
            calculateTotalPrice();
        });

        function attachEventListeners(productSelect, quantityInput, priceInput) {
            productSelect.addEventListener('change', function () {
                var selectedOption = productSelect.options[productSelect.selectedIndex];
                var price = selectedOption.dataset.price;
                priceInput.value = price * quantityInput.value;
                calculateTotalPrice();
            });

            quantityInput.addEventListener('input', function () {
                var price = productSelect.options[productSelect.selectedIndex].dataset.price;
                var quantity = quantityInput.value;
                priceInput.value = price * quantity;
                calculateTotalPrice();
            });
        }

        function attachRemoveListener(removeButton, itemDiv) {
            removeButton.addEventListener('click', function () {
                itemDiv.remove();
                calculateTotalPrice();
            });
        }

        document.querySelectorAll('.product-select').forEach(function (select) {
            var priceInput = select.parentElement.querySelector('.price-input');
            var quantityInput = select.parentElement.querySelector('.quantity-input');
            attachEventListeners(select, quantityInput, priceInput);
        });

        document.querySelectorAll('.remove-item').forEach(function (button) {
            var itemDiv = button.parentElement;
            attachRemoveListener(button, itemDiv);
        });

        function calculateTotalPrice() {
            var totalPrice = 0;
            document.querySelectorAll('.item').forEach(function (item) {
                var priceInput = item.querySelector('.price-input');
                totalPrice += parseFloat(priceInput.value || 0);
            });
            document.getElementById('total_price').value = totalPrice;
        }
    </script>
@endsection
