<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" name="button" name="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">TodoList</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{Request::is('todo/create') ? 'active' : ''}}"><a href="/about">Create Todo</a></li>
      </ul>
    </div>
  </div>
</nav>