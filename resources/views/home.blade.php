@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row g-2 text-center">
        <div class="col-3">
            <div class="p-3 border bg-success mt-3" style="color: white">10 Barang <i class="fa fa-boxes" style="color: white"></i></div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-success mt-3" style="color: white">10 Kategori <i class="fa fa-tag" style="color: white"></i></div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-success mt-3" style="color: white">10 Supplier <i class="fa fa-truck" style="color: white"></i></div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-success mt-3" style="color: white">10 Member <i class="fa fa-people-group" style="color: white"></i></div>
        </div>
    </div>
@endsection