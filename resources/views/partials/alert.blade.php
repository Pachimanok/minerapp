@if(Session::get('mensaje'))
    <div class="row">
        <div class="col-sm-5 mx-auto m-2">
            <div class="alert alert-{{ Session::get('tipo') }} alert-dismissible fade show" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        </div>
    </div>
    @endif  