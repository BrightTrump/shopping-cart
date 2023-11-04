<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    {{-- @vite(['resources/css/app.css']) --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary" data-toggle='dropdown'><i class="fa fa-shopping"
                            aria-hidden="true"></i>Cart <span
                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></button>

                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            @php $total = 0 @endphp
                            @foreach ((array) session('cart') as $id => $details )
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach

                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Total: <span class="text-info">${{$total}}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="" class="btn btn-primary btn-block"> View all</a>
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

</body>

</html>
