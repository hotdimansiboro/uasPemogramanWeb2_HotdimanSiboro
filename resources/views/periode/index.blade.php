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
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped nowrap" id="dt-user">
                      <thead class="text-center bg-red-cybershoot">
                        <th width="5%">NO</th>
                        <th>TAHUN AKADEMIK</th>
                        <th>SEMESTER</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                      </thead>
                      <tbody class="text-center">
                        @foreach ($result as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>
                              @if ($item->status == 1)
                                <span class="badge badge-success badge-lg">Aktif</span>
                              @else
                                <span class="badge badge-danger badge-lg">Tidak Aktif</span>
                              @endif
                            </td>
                            <td>
                              <a href="{{ route('periode.edit', $item->id) }}" class="btn btn-sm btn-outline-warning">
                                <i class="fa fa-edit"></i> Edit
                              </a>
                              &nbsp; &nbsp; &nbsp;
                              <a href="#" class="btn btn-sm btn-outline-danger"
                                onclick="deletePeriode({{ $item->id }})">
                                <i class="fa fa-trash"></i> Hapus
                              </a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
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
    function deletePeriode(id) {
      if (confirm('Yakin ingin menghapus?')) {
        fetch(`{{ url('periode') }}/${id}`, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        }).then(response => location.reload());
      }
    }
  </script>
@endpush
