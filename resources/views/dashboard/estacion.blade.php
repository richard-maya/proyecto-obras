@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 col-md-8">
            <x-h1_title>Nombre Estación</x-h1_title>
        </div>

        <div class="col-12 col-md-4 text-md-end">
            <a href="#" class="btn btn-black">Editar <i class="fa-regular fa-pen-to-square"></i></a>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Empresa</th>
                        <td><a href="{{ route('empresa') }}">Cintegran</a></td>
                    </tr>
                    <tr>
                        <th>Ubicación</th>
                        <td>Toluca, Estado de México</td>
                    </tr>
                    <tr>
                        <th>Lider de proyecto</th>
                        <td>Nombre Apellido</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>55 4567 8912</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row g-4 g-lg-5">
        <div class="col-12 col-md-6">
            <x-dash.table-title title="Requisiciones" rutaVer="#" rutaCrear="#" />

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Almacén</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>#785</td>
                        <td><a href="#">Inatek</a></td>
                        <td>Pago contra entrega</td>
                    </tr>
                    <tr>
                        <td>#785</td>
                        <td><a href="#">Inatek</a></td>
                        <td>Pago contra entrega</td>
                    </tr>
                    <tr>
                        <td>#785</td>
                        <td><a href="#">Inatek</a></td>
                        <td>Pago contra entrega</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-12 col-md-6">
            <x-dash.table-title title="Almacenes" rutaVer="#" rutaCrear="#" />

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ubicación</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>#785</td>
                        <td>Toluca, Estado de México</td>
                    </tr>
                    <tr>
                        <td>#785</td>
                        <td>Toluca, Estado de México</td>
                    </tr>
                    <tr>
                        <td>#785</td>
                        <td>Toluca, Estado de México</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection