<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="#">KANZ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{($title === "Home") ? 'active' : ''}}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{($title === "Saya") ? 'active' : ''}}">
          <a class="nav-link" href="inisaya">Saya</a>
        </li>
        <li class="nav-item {{($title === "Test") ? 'active' : ''}}">
          <a class="nav-link" href="test">Test</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
