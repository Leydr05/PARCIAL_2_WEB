@extends('tema.app')

@section('title', 'Lista de clientes')

@section('contenido')
    <h3>
        Lista de Clientes
    </h3>

    <div class="col-sm-10">
        <form action="{{ route('clientes.index') }}" method="GET">
            <div class="form-row">
                <div class="col-sm-4 my-1">
                     <input type="text" class="form-control" name="texto" value="">
                </div>
                <div class="col-sm-4 my-11">
                    <input type="submit" class="btn btn-primary" value="Buscar">

                </div>
            </div>
        </form>

    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    Primer Nombre
                </th>
                <th>
                    Segundo Nombre
                </th>
                <th>
                    Primer Apellido
                </th>
                <th>
                    Segundo Apellido
                </th>
                <th>
                    Direccion
                </th>
                <th>
                    Telefono
                </th>
            </tr>

        </thead>

        <tbody>
            @foreach ($cliente as $clientes)
                <tr>
                    <td>
                        {{ $clientes->Pnombre }}
                    </td>
                    <td>
                        {{ $clientes->Snombre }}
                    </td>
                    <td>
                        {{ $clientes->Spellido }}
                    </td>
                    <td>
                        {{ $clientes->Sapellido }}
                    </td>
                    <td>
                        {{ $clientes->Direccion }}
                    </td>
                    <td>
                        {{ $clientes->Telefono }}
                    </td>
                </tr>
            @endforeach
        </tbody>



    </table>

@endsection
