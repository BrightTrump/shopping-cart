<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/js/jquery.min.js"></script>

    {{-- @vite(['resources/css/app.css']) --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">

                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle='dropdown'><i
                            class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span
                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </button>

                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            @php
                                $total = 0;
                            @endphp
                            @foreach ((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach

                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Total: <span class="text-info">${{ $total }}</span></p>
                            </div>
                        </div>

                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4col-sm-4col-4cart-detail-img">
                                        <img src="img/{{ $details['photo'] }}" alt="">
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['product_name'] }}</p>
                                        <span class="price text-info">${{ $details['price'] }}</span>
                                        <span class="count">Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="/cart" class="btn btn-primary btn-block"> View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
@yield('scripts')
</body>

</html>
