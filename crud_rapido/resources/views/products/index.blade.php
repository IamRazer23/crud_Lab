@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h3 mb-0">Productos</h1>
  <a href="{{ route('products.create') }}" class="btn btn-primary">Crear producto</a>
</div>

@if($products->count())
  <div class="card">
    <div class="table-responsive">
      <table class="table table-striped mb-0 align-middle">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th class="text-end">Precio</th>
            <th class="text-end">Stock</th>
            <th class="text-end">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $p)
            <tr>
              <td>{{ $p->id }}</td>
              <td>
                <a href="{{ route('products.show', $p) }}" class="link-primary text-decoration-none">
                  {{ $p->description }}
                </a>
              </td>
              <td class="text-end">{{ number_format($p->price, 2) }}</td>
              <td class="text-end">{{ $p->stock }}</td>
              <td class="text-end">
                <a href="{{ route('products.edit', $p) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                <form action="{{ route('products.destroy', $p) }}" method="POST" class="d-inline">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger"
                          onclick="return confirm('¿Eliminar este producto?')">
                    Eliminar
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      {{ $products->links() }}
    </div>
  </div>
@else
  <div class="alert alert-info">No hay productos aún. Crea el primero.</div>
@endif
@endsection
