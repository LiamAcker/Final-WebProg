@extends('Component.welcomenavbar')

@section('document_title', 'Sign In')

@section('body')
    <div class="p-5 m-5">
        <div class="border col-3 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold">Sign In</p>
            <form>
                @csrf
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputEmail2">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="form-group mb-3 w-100">
                  <label for="exampleInputPassword2">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword2" placeholder="5-20 characters">
                </div>
                <div class="mb-3 w-100 form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <div class="form-group mb-3 w-100 text-center">
                    <button type="submit" class="btn btn-primary mb-1 w-100">Submit</button>
                    <small id="" class="form-text text-muted">Not Registered Yet? <a href="/sign-up">Register here</a></small>
                </div>
              </form>
        </div>
    </div>

@endsection
