@if (Session::has('flash_message'))

<div class="alert alert-warning fade show {{ Session::has('flash_message_important') ? 'alert-dismissible' : '' }}"
  role="alert">
  @if (Session::has('flash_message_important'))
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">&times;</span></button>
  @endif
  {{ session('flash_message') }}
</div>

@endif

@if (Session::has('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif
