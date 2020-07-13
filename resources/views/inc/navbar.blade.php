<nav class="navbar navbar-expand-md navbar-dark  bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ">

      <li class="{{Request::is('/') ? 'active' :'' }} " >
        <a  class="nav-link" href="/"> Home </a>
      </li>

      <li class="{{Request::is('/request/create') ? 'active' : '' }} ">
        <a class="nav-link " href="/request/create">Insert Item</a>
      </li>
    
    </ul>

  </div>
</nav>