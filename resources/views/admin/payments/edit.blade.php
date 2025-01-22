@extends('admin.layoutAdmin')

@section('content')
    <h1>Edit Payment</h1>

    <form action="{{ route('admin.payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" value="{{ old('status', $payment->status) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
