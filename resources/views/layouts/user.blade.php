<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark  border-bottom">
      <div class="container-fluid">
       {{--  <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
          <!-- Search form -->
          {{-- <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form> --}}
         
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