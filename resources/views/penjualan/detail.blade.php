@extends('layouts.app')

@section('content')

<div class="container">

    <h3 class="mb-4">Detail Penjualan</h3>

    <div class="card mb-3">
        <div class="card-body">

            <table class="table table-borderless">

                <tr>
                    <td width="200">ID Transaksi</td>
                    <td>: {{ $penjualan->id }}</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>: Rp. {{ number_format($penjualan->total_harga) }}</td>
                </tr>

                <tr>
                    <td>Pembayaran</td>
                    <td>: {{ $penjualan->metode_pembayaran }}</td>
                </tr>

                <tr>
                    <td>Tanggal</td>
                    <td>: {{ $penjualan->created_at }}</td>
                </tr>

            </table>

        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Item Produk
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($penjualan->detailPenjualans as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->produk->nama }}</td>

                        <td>
                            Rp. {{ number_format($item->harga) }}
                        </td>

                        <td>{{ $item->qty }}</td>

                        <td>
                            Rp. {{ number_format($item->subtotal) }}
                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection