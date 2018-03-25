@extends('layouts.default')

@section('content')

    <div class="container" mt-5">
    <div class="card">
        <div class="class-title"><h2>Contact </h2>
            <p class="lead">Please use this to contact the site owner.</p></div>


        <div class="card-body">
            <form action="/contact" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email </label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="email">Message</label>
                    <textarea name="body" class="form-control" id="email" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection