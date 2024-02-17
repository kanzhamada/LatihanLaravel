<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="#">KANZ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{($active === "home") ? 'active' : ''}}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{($active === "saya") ? 'active' : ''}}">
          <a class="nav-link" href="/inisaya">Saya</a>
        </li>
        <li class="nav-item {{($active === "test") ? 'active' : ''}}">
          <a class="nav-link" href="/test">Test</a>
        </li>
        <li class="nav-item {{($active === "categories") ? 'active' : ''}}">
          <a class="nav-link" href="/categories">Category</a>
        </li>
        <li>
          <form class="form-inline" action="/test">
            @if(request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group">
              <div class="input-group-prepend">
                
                <button class="btn btn-dark" type="submit">Search</button>
                
              </div>
              <input type="text" class="form-control" placeholder="..." name="search" value="{{ request('search') }}">
            </div>
          </form>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{($active === "login") ? 'active' : ''}}">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
      
    </div>
    </div>
  </nav>
