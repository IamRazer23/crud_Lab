@csrf
<div class="row g-3">
  <div class="col-12">
    <label class="form-label">Descripción</label>
    <input type="text" name="description" class="form-control"
           value="{{ old('description', $product->description ?? '') }}" required maxlength="255">
    @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Precio</label>
    <input type="number" step="0.01" min="0" name="price" class="form-control"
           value="{{ old('price', $product->price ?? '') }}" required>
    @error('price') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Stock</label>
    <input type="number" min="0" name="stock" class="form-control"
           value="{{ old('stock', $product->stock ?? '') }}" required>
    @error('stock') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>
</div>

<div class="mt-4 d-flex gap-2">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Cancelar</a>
</div>
