@extends('layout.main')

@section('container')

<link rel="stylesheet" href="css/style.css">

<main class="form-signin w-100 m-auto">
    <form>
      <img class="mb-4" src="https://static.thenounproject.com/png/2486994-200.png" alt="" width="57" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <label for="floatingInput">Email address</label>
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        
      </div>

      <p></p>
      <div class="form-floating">
        <label for="floatingPassword">Password</label>
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        
      </div>
  
      
      <button class="mt-3 btn btn-primary w-100 py-2" type="submit">Sign in</button>

      <small class="d-block text-center mt-3">
        Don't have an account? <a href="/register">Register</a>
     </small>
      <p class="mt-3 mb-3 text-body-secondary">&copy; 2024</p>
    </form>

    

  </main>

@endsection