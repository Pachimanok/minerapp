<div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand fixed-top border-bottom bg-white" style="height: 6rem;">
        <div class="container-fluid">
            @if ($user->role == 'minero')
                @include('user.userMinero')
            @elseif($user->role == 'alianza')
                @include('user.userAlianza')
            @else
                <h1>Administrador</h1>
            @endif
        </div>
    </nav>
</div>