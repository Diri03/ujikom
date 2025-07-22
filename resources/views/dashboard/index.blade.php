@extends('app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title" align="center">Dashboard</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title" align="center">Data User</h3>
                                <div class="table-responsive">
                                    <table class="table table-stripped">
                                        <img src="{{ asset('assets/img/icon.jpg') }}" alt="profile" width="100%" class="img-fluid mb-3 rounded-circle">
                                        <tr>
                                            <th>Name</th>
                                            <td>:</td>
                                            <td>{{ auth()->user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Level</th>
                                            <td>:</td>
                                            <td>{{ auth()->user()->level->level_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td>{{ auth()->user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Login</th>
                                            <td>:</td>
                                            <td id="login"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title" align="center">Data Order</h3>
                                <div class="table-responsive">
                                    <table class="table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Customer</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $index => $order)
                                                <tr>
                                                    <td>{{ $order->order_code }}</td>
                                                    <td>{{ $order->customer->customer_name }}</td>
                                                    <td class="{{ $order->order_status == 0 ? 'text-info' : 'text-success' }}">{{ $order->status_text }}</td>
                                                    <td>Rp {{ number_format($order->total) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title" align="center">Data Customer</h3>
                                <h1 class="text-center">{{ $customers->count() }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title" align="center">Data Service</h3>
                                <h1 class="text-center">{{ $services->count() }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title" align="center">Data User</h3>
                                <h1 class="text-center">{{ $users->count() }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        const login = document.querySelector('#login');
        const now = new Date();
        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        const day = now.getDate();
        const month = monthNames[now.getMonth()];
        const year = now.getFullYear();

        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        const formattedTime = `${day} ${month} ${year} ${hours}:${minutes}:${seconds}`;
        login.textContent = formattedTime;
    });
</script>
@endsection
