@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 col-md-8">
            <x-h1_title>NOMBRE EMPRESA</x-h1_title>
        </div>

        <div class="col-12 col-md-4 text-md-end">
            <a href="#" class="btn btn-black">Editar <i class="fa-regular fa-pen-to-square"></i></a>
        </div>
    </div>

    <div class="row mb-4 d-flex align-items-center">
        <div class="col-12 col-md-3">
            <img src="{{ asset('img/Logos_Cintegran.png') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="col-12 col-md-9">
            <table class="table">
                <tbody>
                    <tr>
                        <th>RFC</th>
                        <td>XXAX010101000</td>
                    </tr>
                    <tr>
                        <th>Proyectos</th>
                        <td>21</td>
                    </tr>
                    <tr>
                        <th>Estaciones</th>
                        <td>45</td>
                    </tr>
                    <tr>
                        <th>Almacenes</th>
                        <td>61</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <div class="accordion" id="accordion-balbek">
                <x-dash.accordion-obras acordeon="accordion-balbek" nombreObra="Proyecto 1" numeroObra="123">
                    <div class="row g-4 g-lg-5">
                        <div class="col-12 col-md-6">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5>Estaciones</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#">Crear estación</a>
                                </div>
                            </div>

                            <div class="list-group">
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#741 - Toluca</a>
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#852 - Metepec</a>
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#963 - Zinacantepec</a>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5>Almacenes</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#">Crear almacén</a>
                                </div>
                            </div>

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">#741 - Toluca</a>
                                <a href="#" class="list-group-item list-group-item-action">#852 - Metepec</a>
                                <a href="#" class="list-group-item list-group-item-action">#963 - Zinacantepec</a>
                            </div>
                        </div>
                    </div>
                </x-dash.accordion-obras>
                
                <x-dash.accordion-obras acordeon="accordion-balbek" nombreObra="Proyecto 2" numeroObra="456">
                    <div class="row g-4 g-lg-5">
                        <div class="col-12 col-md-6">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5>Estaciones</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#">Crear estación</a>
                                </div>
                            </div>

                            <div class="list-group">
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#741 - Toluca</a>
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#852 - Metepec</a>
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#963 - Zinacantepec</a>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5>Almacenes</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#">Crear almacén</a>
                                </div>
                            </div>

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">#741 - Toluca</a>
                                <a href="#" class="list-group-item list-group-item-action">#852 - Metepec</a>
                                <a href="#" class="list-group-item list-group-item-action">#963 - Zinacantepec</a>
                            </div>
                        </div>
                    </div>
                </x-dash.accordion-obras>
                
                <x-dash.accordion-obras acordeon="accordion-balbek" nombreObra="Proyecto 3" numeroObra="789">
                    <div class="row g-4 g-lg-5">
                        <div class="col-12 col-md-6">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5>Estaciones</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#">Crear estación</a>
                                </div>
                            </div>

                            <div class="list-group">
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#741 - Toluca</a>
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#852 - Metepec</a>
                                <a href="{{ route('estacion') }}" class="list-group-item list-group-item-action">#963 - Zinacantepec</a>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5>Almacenes</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#">Crear almacén</a>
                                </div>
                            </div>

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">#741 - Toluca</a>
                                <a href="#" class="list-group-item list-group-item-action">#852 - Metepec</a>
                                <a href="#" class="list-group-item list-group-item-action">#963 - Zinacantepec</a>
                            </div>
                        </div>
                    </div>
                </x-dash.accordion-obras>
            </div>
        </div>
    </div>
</div>
@endsection