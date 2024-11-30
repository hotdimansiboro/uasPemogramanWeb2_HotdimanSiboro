@extends('layouts.admin')

@section('title', $page_title)

@section('content')


  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header text-center bg-red-cybershoot">
              <h2><b>LIST {{ strtoupper($page_title) }}</b></h2>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped nowrap" id="dt-user">
                      <thead class="text-center bg-red-cybershoot">
                        <th width="5%">NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        {{-- <th>NO TELEPON</th>
                        <th>EMAIL</th>
                        <th>JENIS KELAMIN</th> --}}
                        <th>FAKULTAS</th>
                        <th>DOSEN</th>
                        <th>MATA KULIAH</th>
                        <th>ACTION</th>
                      </thead>
                      <tbody class="text-center">
                        @foreach ($result as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            {{-- <td>{{ $item->telp }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->jenis_kelamin }}</td> --}}
                            <td>{{ $item->fakultas->fakultas }}</td>
                            <td>{{ $item->dosen->nama ?? '-' }}</td>
                            <td>{{ $item->matkul->nama ?? '-' }}</td>
                            <td>
                              <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-sm btn-outline-success">
                                <i class="fa fa-edit"></i> Show
                              </a>&nbsp;
                              <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-sm btn-outline-warning">
                                <i class="fa fa-edit"></i> Edit
                              </a>
                              &nbsp;
                              <a href="#" class="btn btn-sm btn-outline-danger" onclick="deleteMahasiswa({{ $item->id }})">
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
    function deleteMahasiswa(id) {
      if (confirm('Yakin ingin menghapus?')) {
        fetch(`{{ url('mahasiswa') }}/${id}`, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        }).then(response => location.reload());
      }
    }
  </script>
@endpush
