@extends('layouts.admin')

@section('title', $page_title)

@section('content')

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header text-center bg-red-cybershoot">
            <h2><b>{{ strtoupper($page_title) }}</b></h2>
          </div>
          <div class="card-body">
            <div class="row pt-3">
              <div class="col-12">
                <div class="box-body justify-content-center">
                  <form id="formUsers" action="{{ url('mata-kuliah/' . $matkul->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @include('matkul._form', [
                        'submitButtonText' => 'Lanjutkan' . ucfirst($page_title),
                    ])
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@push('scripts')
<script>
  function moveUp() {
    const input = document.getElementById('sortOrderInput');
    let value = parseInt(input.value) || 0;
    input.value = value + 1; // Tambah nilai
  }

  function moveDown() {
    const input = document.getElementById('sortOrderInput');
    let value = parseInt(input.value) || 0;
    if (value > 0) {
      input.value = value - 1; // Kurangi nilai (tidak kurang dari 0)
    }
  }
</script>

@endpush