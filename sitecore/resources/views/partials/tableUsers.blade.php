<div class="row  text-center table-responsive">
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th class="text-center">
            </th>
            <th class="text-center">
                Titulo
            </th>
            <th class="text-center">
                Descripcion
            </th>
            <th class="text-center">
                Precio
            </th>
            <th class="text-center">
                Editar
            </th>
            <th class="text-center">
                Eliminar
            </th>
        </tr>
        </thead>
        <tbody class="tabla-resultados">
        <tr>
            <td>
                {{$users->id}}
            </td>
            <td>
                {{$users->name}}
            </td>
            <td>
                {{$users->email}}
            </td>
            <td>
                <button type="button" class="btn btn-sm  btn-info pull-right" \n\
                        data-toggle="modal" data-target="#myModal'+val.IdProducto+'edit">Información
                </button>
            </td>
            <td>
                <button type="button" class="btn btn-sm  btn-danger pull-right" \n\
                        data-toggle="modal" data-target="#myModal'+val.IdProducto+'edit">Información
                </button>

            </td>
        </tr>


        </tbody>
    </table>
</div>
