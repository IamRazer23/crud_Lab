@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Editar producto</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('products.update', $product) }}">
          @method('PUT')
          @include('products._form')
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
