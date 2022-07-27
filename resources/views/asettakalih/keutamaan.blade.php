@if($data_rosak->keutamaan_id == 1)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">Umum</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Segera</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Kecemasan</label>
    </div>
    @elseif($data_rosak->keutamaan_id == 2)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Umum</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">Segera</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Kecemasan</label>
    </div>
    @elseif($data_rosak->keutamaan_id == 3)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Umum</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Segera</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">Kecemasan</label>
    </div>
    @endif