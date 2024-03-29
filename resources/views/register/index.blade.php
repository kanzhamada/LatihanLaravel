@extends('layout.main')

@section('container')

<link rel="stylesheet" href="css/style.css">

<main class="form-register w-100 m-auto">
    <form>
      <img class="mb-4" src="https://static.thenounproject.com/png/2486994-200.png" alt="" width="57" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
        
      </div>
      <p></p>

      <div class="form-floating">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" name="name" placeholder="Your Name">
        
      </div>
      <p></p>

      <div class="form-floating">
        <label for="username">Username</label>
        <input type="username" class="form-control" id="username" name="username" placeholder="username">
        
      </div>
      <p></p>

      <div class="form-floating">
        <label for="passowrd">Password</label>
        <input type="password" class="form-control" id="passowrd" name="password" placeholder="Password">
        
      </div>
  
      
      <button class="mt-3 btn btn-primary w-100 py-2" type="submit">Sign in</button>


      <small class="d-block text-center mt-3">
        Have an account? <a href="/login">Login</a>
     </small>
      <p class="mt-3 mb-3 text-body-secondary text-center">&copy; 2024</p>
    </form>

    

  </main>

@endsection