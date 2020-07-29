@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Laravel
            <p>{{ $unit->id }} | {{ $unit->tanggal }} | {{ $unit->nama_barang }}</p>
        </div>
    </div>
</div>
@endsection
