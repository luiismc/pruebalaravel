<table class="table table-light">
<thead class="thead-light">
<tr>
<th>#</th>
<th>Codigo</th>
<th>Razon Social</th>
<th>Nombre</th>
<th>Pais</th>
<th>Tipo Moneda</th>
<th>Estado</th>
<th>Ciudad</th>
<th>Telefono</th>
<th>Correo</th>
<th>Activo</th>
<th>Acciones</th>
</tr>
</thead>



<tbody>
    @foreach($empresarios as $empresario)
<tr>
<td> {{$empresario->id}} </td>
<td> {{$empresario->codigo}} </td>
<td> {{$empresario->razonsocial}} </td>
<td> {{$empresario->nombre}} </td>
<td> {{$empresario->pais}} </td>
<td> {{$empresario->tipomoneda}} </td>
<td> {{$empresario->estado}} </td>
<td> {{$empresario->ciudad}} </td>
<td> {{$empresario->telefono}} </td>
<td> {{$empresario->correo}} </td>
<td> {{$empresario->activo}} </td>
<td> 
<a href="{{url('/empresario/'.$empresario->id.'/edit')}}"> editar</a>| 
    <form action="{{url('/empresario/'.$empresario->id)}}" method="post"></form>
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" onclick="return confirm()" value="Borrar"> </td>
</tr>
@endforeach
</tbody>
</table>