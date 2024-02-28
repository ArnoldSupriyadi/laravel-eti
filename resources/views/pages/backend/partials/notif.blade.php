@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible bg-success mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Well done!</strong> {{ $message }}
    </div>
@elseif ($message = Session::get('success'))
    <div class="alert alert-danger alert-dismissible bg-danger mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Oh snap!</strong> {{ $message }}
    </div>
@else
@endif
