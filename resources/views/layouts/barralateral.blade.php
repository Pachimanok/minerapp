<style>
    .modal-backdrop.show {
        opacity: 0;
        z-index: -1;
    }

    i {
        color: #1f538a;
        margin-right: 8px;
    }

</style>
<div class="offcanvas offcanvas-start ml-2" tabindex="-1" style="height:auto !important; margin-top: 23% !important;"
    tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-white">
        <a href="/home" class="dropdown-item">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
        </a>
        <a href="/perfil" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>Tu Perfil</span>
        </a>
        <a href="#!" class="dropdown-item">
            <i class="fas fa-bullhorn"></i>
            <span>Notificaciones</span>
            <span class="badge rounded-pill bg-success algin-end">{{ $qnot }}</span>
        </a>
        <a href="#!" class="dropdown-item">
            <i class="ni ni-support-16"></i>
            <span>Ayuda</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#!" class="dropdown-item">
            <i class="fas fa-wallet"></i>
            <span>Mi Billetera</span>
        </a>
        <a href="/minar" class="dropdown-item">
            <i class="far fa-handshake"></i>
            <span>Alianzas</span>
        </a>
        <a href="/minado" class="dropdown-item">
            <i class="far fa-gem"></i>
            <span>Minar</span>
        </a>
        <a href="#!" class="dropdown-item">
            <i class="fas fa-trophy"></i>
            <span>Desadios y Premios</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#!" class="dropdown-item">
            <i class="far fa-question-circle"></i>
            <span>¿Cómo funciona MinerApp?</span>
        </a>
        <a href="#!" class="dropdown-item">
            <i class="far fa-question-circle"></i>
            <span>¿Cómo gestionar y utilizar minas?</span>
        </a>
        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>