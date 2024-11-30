<div class="form-row justify-content-center">
  <div class="col-6">
    <div class="form-group">
      <label>Tahun Akademik</label>
      <input name="periode" class="form-control @error('periode') is-invalid @enderror"
        value="{{ isset($periode->tahun) ? $periode->tahun : old('periode') }}" placeholder="Input Tahun Akademik">
      @error('periode')
        <span class="text-danger error">{{ $message }}</span>
      @enderror
    </div>
  </div>
</div>
<div class="form-row justify-content-center">
  <div class="col-2">
    <div class="form-group">
      <label>Semester</label>
      <div class="input-group">
        <input name="semester" class="form-control" id="sortOrderInput"
          value="{{ isset($periode->semester) ? $periode->semester : 0 }}" placeholder="Semester" required>
        <button type="button" class="btn btn-outline-secondary btn-up" onclick="moveUp()">
          <i class="fas fa-arrow-up"></i>
        </button>
        <button type="button" class="btn btn-outline-secondary btn-down" onclick="moveDown()">
          <i class="fas fa-arrow-down"></i>
        </button>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label>Status</label>
      <select name="status" id="status" class="form-control select2 @error('status') is-invalid @enderror">
        <option value="" disabled {{ old('status', $periode->status ?? '') == '' ? 'selected' : '' }}>Pilih Status
        </option>
  
        <!-- Opsi lainnya, gunakan old() untuk mempertahankan nilai jika validasi gagal atau value dari data jika sedang edit -->
        <option value="0" {{ old('status', $periode->status ?? '') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
        <option value="1" {{ old('status', $periode->status ?? '') == '1' ? 'selected' : '' }}>Aktif</option>
      </select>
      @error('status')
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