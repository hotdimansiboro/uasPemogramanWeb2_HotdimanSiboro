@extends('layouts.admin')

@section('title', $page_title)

@section('content')


<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header text-center bg-red-cybershoot">
            <h2><b>{{ strtoupper($mahasiswa->nama) }}</b></h2>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-12">
                <table class="table">
                  <tr>
                    <td width="15%">NIM</td>
                    <td width="5%">:</td>
                    <td>{{ $mahasiswa->nim }}</td>
                  </tr>
                  <tr>
                    <td>No. Telepon</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->telp }}</td>
                  </tr>
                  <tr>
                    <td>EMAIL</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->email }}</td>
                  </tr>
                  <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                  </tr>
                  <tr>
                    <td>FAKULTAS</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->fakultas->fakultas }}</td>
                  </tr>
                  <tr>
                    <td>DOSEN</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->dosen->nama }}</td>
                  </tr>
                  <tr>
                    <td>MATA KULIAH</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->matkul->nama }}</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-2">
                <button class="btn btn-sm btn-outline-info" onclick="goBack()">
                  <i class="fas fa-undo">&nbsp;&nbsp; Kembali</i>
                </button>
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
  function goBack() {
    window.history.back();
  }
</script>
@endpush