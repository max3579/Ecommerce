@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">

  <div class="col-md-8 col-md-offset-2">

    <div class="card">

      <div class="card-header">Edit product: {{ $product->Name}}</div>

      <div class="card-body">

          <form action="{{ route('products.update', ['id' => $product->id ]) }}" method="post">

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">

              <label for="name">Name</label>

              <input type="text" name="name" value="{{ $product->name }}" class="form-control">

            </div>

            <div class="form-group">

              <label for="image">Price</label>

              <input type="text" name="price" value="{{ $product->price }}" class="form-control">

            </div>
            <div class="form-group">

              <label for="description">Description</label>
              <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>

            </div>

            <div class="form-group">
                <button class="btn btn-success"`>

                  Update product

                </button>
            </div>

          </form>

        </div>

      </div>

    </div>

  </div>

</div>

@endsection
