@extends('layouts.main')
@section('content')
<x-table titulo="Clientes">
  @include('pages.clientes.form')
</x-table>
@endsection
@section('scripts')
<script>
  var dataLaravel = @json($list);
  var headings = ['ID', 'Nombre', 'Email', 'Teléfono', 'Empresa', 'Acciones']
  var data = dataLaravel.map(m => ([m.id, m.nombre, m.email, m.telefono, m.empresa, m.id]))
  var columnActionsNumber = 5
  var page = '/clientes'

  var formData = {
    id: null,
    nombre: '',
    email: '',
    telefono: '',
    empresa: ''
  }
</script>
<script src="/assets/js/table.js"></script>
@endsection