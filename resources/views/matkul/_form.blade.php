<div class="form-row justify-content-center">
  <div class="col-3">
    <div class="form-group">
      <label for="periode">Tahun Akademik</label>
      <select name="periode" id="periode" class="form-control select2 @error('periode') is-invalid @enderror">
        <option value="" disabled selected>Pilih Tahun Akademik</option>
        @foreach ($periode as $id => $nama)
          <option value="{{ $id }}"
            {{ (isset($selectedPeriode) && $selectedPeriode == $id) || old('periode') == $id ? 'selected' : '' }}>
            {{ $nama }}
          </option>
        @endforeach
      </select>
      @error('periode')
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
      <label>Kode Mata Kuliah</label>
      <input name="code" class="form-control @error('code') is-invalid @enderror"
        value="{{ isset($matkul->kode) ? $matkul->kode : old('code') }}" placeholder="Input Kode Mata Kuliah Max 6 Digits">
      @error('code')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div class="col-3">
    <div class="form-group">
      <label>Nama Mata Kuliah</label>
      <input name="nama" class="form-control @error('nama') is-invalid @enderror"
        value="{{ isset($matkul->nama) ? $matkul->nama : old('nama') }}" placeholder="Input Nama Mata Kuliah">
      @error('nama')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
</div>

<div class="form-row justify-content-center">
  <div class="col-3">
    <label for="sortOrderSks">Jumlah SKS</label>
    <div class="input-group">
      <input id="sortOrderSks" name="sort_order_sks" class="form-control" value="{{ isset($matkul->sks) ? $matkul->sks : old('sortOrderSks') }}">
      <button type="button" class="btn btn-outline-secondary" onclick="moveUp('sortOrderSks')">
        <i class="fas fa-arrow-up"></i>
      </button>
      <button type="button" class="btn btn-outline-secondary" onclick="moveDown('sortOrderSks')">
        <i class="fas fa-arrow-down"></i>
      </button>
    </div>
  </div>
  <div class="col-3">
    <label for="sortOrderSemester">Semester</label>
    <div class="input-group">
      <input id="sortOrderSemester" name="sort_order_semester" class="form-control" value="{{ isset($matkul->semester) ? $matkul->semester : old('sortOrderSemester') }}">
      <button type="button" class="btn btn-outline-secondary" onclick="moveUp('sortOrderSemester')">
        <i class="fas fa-arrow-up"></i>
      </button>
      <button type="button" class="btn btn-outline-secondary" onclick="moveDown('sortOrderSemester')">
        <i class="fas fa-arrow-down"></i>
      </button>
    </div>
  </div>
</div>


<div class="form-row justify-content-center pt-4">
  <div class="col-2">
    <button type="submit" class="btn btn-block btn-outline-success">Simpan</button>
  </div>
</div>
