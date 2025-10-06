@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Detalle del producto</h5>
        <div class="d-flex gap-2">
          <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
          <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-primary">Volver</a>
        </div>
      </div>
      <div class="card-body">
        <dl class="row mb-0">
          <dt class="col-sm-3">ID</dt>
          <dd class="col-sm-9">{{ $product->id }}</dd>

          <dt class="col-sm-3">Descripción</dt>
          <dd class="col-sm-9">{{ $product->description }}</dd>

          <dt class="col-sm-3">Precio</dt>
          <dd class="col-sm-9">{{ number_format($product->price, 2) }}</dd>

          <dt class="col-sm-3">Stock</dt>
          <dd class="col-sm-9">{{ $product->stock }}</dd>

          <dt class="col-sm-3">Creado</dt>
          <dd class="col-sm-9">{{ $product->created_at?->format('Y-m-d H:i') }}</dd>

          <dt class="col-sm-3">Actualizado</dt>
          <dd class="col-sm-9">{{ $product->updated_at?->format('Y-m-d H:i') }}</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
@endsection
