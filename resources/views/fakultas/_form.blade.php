<div class="form-row justify-content-center">
  <div class="col-6">
    <div class="form-group">
      <label for="periode">Tahun Akademik</label>
      <select name="periode" id="periode" class="form-control select2 @error('periode') is-invalid @enderror">
        <option value="" disabled selected>Pilih Tahun Akademik</option>
        @foreach($periode as $id => $nama)
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
</div>

<div class="form-row justify-content-center">
  <div class="col-6">
    <div class="form-group">
      <label>Fakultas</label>
      <input name="fakultas" class="form-control @error('fakultas') is-invalid @enderror"
        value="{{ isset($fakultas->fakultas) ? $fakultas->fakultas : old('fakultas') }}" placeholder="Input Nama Fakultas">
      @error('fakultas')
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