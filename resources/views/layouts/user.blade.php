<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark  border-bottom">
      <div class="container-fluid">
       
@if($user->role == 'minero')

  @include('user.userMinero')

@elseif($user->role == 'alianza')

  @include('user.userAlianza')

@else

<h1>Administrador</h1>

@endif
          
          
        </div>
      </div>
    </nav>  