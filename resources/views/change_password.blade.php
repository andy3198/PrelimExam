@extends('index')

@section('form')
<div class="card mt-5 col-md-4 offset-md-4">

    <div class="card-header bg-primary text-white">
        <h3 class="card-tittle d-flex justify-content-center">Enter Your Email</h3>
    </div>

    <div class="card-body">

        <form action="{{ url('/login') }}" method="post">

            {{ csrf_field() }}

            <div class="mb-3">
                <label for="email"> E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>


        </form>

    </div>

</div>
@endsection
