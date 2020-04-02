<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $item->email }}</td>
    </tr>
    <tr>
        <th>Nomor</th>
        <td>{{ $item->number }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $item->address }}</td>
    </tr>
    <tr>
        <th>Total Transaksi</th>
        <td>{{ $item->transaction_total }}</td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>
    <tr>
        <th>Pembelian Product</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <td>Name</td>
                    <td>Type</td>
                    <td>Harga</td>
                </tr>
                @foreach($item->details as $details)
                    <tr>
                        <td>{{ $details->product->name }}</td>
                        <td>{{ $details->product->type }}</td>
                        <td>${{ $details->product->price }}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>

<div class="row">
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id)}}?status=SUCCESS" class="btn btn-success btn-block">
        <i class="fa fa-check"></i>Set Success
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id)}}?status=FAILED" class="btn btn-warning btn-block">
        <i class="fa fa-times"></i>Set Gagal
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id)}}?status=PENDING" class="btn btn-info btn-block">
        <i class="fa fa-spinner"></i>Set Pending
        </a>
    </div>
</div>