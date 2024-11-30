<div class="form-row justify-content-center">
  <div class="col-3">
    <div class="form-group">
      <label>NIM</label>
      <input name="nim" class="form-control @error('nim') is-invalid @enderror"
        value="{{ isset($mahasiswa->nim) ? $mahasiswa->nim : old('nim') }}" placeholder="Input NIM">
      @error('nim')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div class="col-3">
    <div class="form-group">
      <label>Nama</label>
      <input name="nama" class="form-control @error('nama') is-invalid @enderror"
        value="{{ isset($mahasiswa->nama) ? $mahasiswa->nama : old('nama') }}" placeholder="Input Nama">
      @error('nama')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
</div>
<div class="form-row justify-content-center">
  <div class="col-3">
    <div class="form-group">
      <label>No Telepon</label>
      <input name="telp" class="form-control @error('telp') is-invalid @enderror"
        value="{{ isset($mahasiswa->telp) ? $mahasiswa->telp : old('telp') }}" placeholder="Input No Telepon">
      @error('telp')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div class="col-3">
    <div class="form-group">
      <label>Email</label>
      <input name="email" class="form-control @error('email') is-invalid @enderror"
        value="{{ isset($mahasiswa->email) ? $mahasiswa->email : old('email') }}" placeholder="Input Email">
      @error('email')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-3">
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select name="jenis_kelamin" id="jenis_kelamin"
        class="form-control select2 @error('jenis_kelamin') is-invalid @enderror">
        <option value="{{ isset($mahasiswa->jenis_kelamin) ? $mahasiswa->jenis_kelamin : old('jenis_kelamin') }}">Pilih Jenis Kelamin</option>
        <option value="Laki-Laki"
          {{ old('jenis_kelamin', $mahsiswa->jenis_kelamin ?? '') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
        <option value="Perempuan"
          {{ old('jenis_kelamin', $mahsiswa->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
      </select>
      @error('jenis_kelamin')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div class="col-3">
    <div class="form-group">
      <label for="fakultas">Fakultas</label>
      <select name="fakultas" id="fakultas" class="form-control select2 @error('fakultas') is-invalid @enderror">
        <option value="" disabled selected>Pilih Fakultas</option>
        @foreach ($fakultas as $id => $nama)
          <option value="{{ $id }}"
            {{ (isset($selectedFakultas) && $selectedFakultas == $id) || old('fakultas') == $id ? 'selected' : '' }}>
            {{ $nama }}
          </option>
        @endforeach
      </select>
      @error('fakultas')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
</div>
<div class="form-row justify-content-center">
  <div class="col-3">
    <div class="form-group">
      <label for="dosen">Dosen</label>
      <select name="dosen" id="dosen" class="form-control select2 @error('dosen') is-invalid @enderror">
        <option value="" disabled selected>Pilih Dosen</option>
        @foreach ($dosen as $id => $nama)
          <option value="{{ $id }}"
            {{ (isset($selectedDosen) && $selectedDosen == $id) || old('dosen') == $id ? 'selected' : '' }}>
            {{ $nama }}
          </option>
        @endforeach
      </select>
      @error('dosen')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div class="col-3">
    <div class="form-group">
      <label for="matkuls">Mata Kuliah</label>
      <select name="matkuls" id="matkuls" class="form-control select2 @error('matkuls') is-invalid @enderror">
        <option value="" disabled selected>Pilih Mata Kuliah</option>
        @foreach ($matkul as $id => $nama)
          <option value="{{ $id }}"
            {{ (isset($selectedMatkul) && $selectedMatkul == $id) || old('matkuls') == $id ? 'selected' : '' }}>
            {{ $nama }}
          </option>
        @endforeach
      </select>
      @error('matkuls')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>

</div>
<div class="form-row justify-content-center pt-3">
  <div class="col-2">
    <button type="submit" class="btn btn-block btn-outline-success">Simpan</button>
  </div>
</div>
