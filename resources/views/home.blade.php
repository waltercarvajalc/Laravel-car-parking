@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <h2>Lista de Vehículos</h2>

    </div>

    <div class="card">

        <div class="card-body">
            @include('vehicles.table')
        </div>
    </div>
</div>

@endsection
