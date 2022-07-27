@if($data_rosak->mod_aduan_id == 1)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">Telefon</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Faksimili</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">E-Mel</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Surat</label>
    </div>
   
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Lain-lain(Sila Sila Nyatakan):</label>
        <u class="form-check-label" style="margin-left: 70px;">{{$data_rosak->lain_mod}}</u>
    </div>
    <br>
    <br>
    <br><br><br>
@elseif($data_rosak->mod_aduan_id == 2)
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Telefon</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">Faksimili</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">E-Mel</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Surat</label>
    </div>
   
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Lain-lain(Sila Sila Nyatakan):</label>
        <u class="form-check-label" style="margin-left: 70px;">{{$data_rosak->lain_mod}}</u>
    </div>
    <br>
    <br>
    <br><br><br>
@elseif($data_rosak->mod_aduan_id == 3)
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Telefon</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Faksimili</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">E-Mel</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Surat</label>
    </div>
   
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Lain-lain(Sila Sila Nyatakan):</label>
        <u class="form-check-label" style="margin-left: 70px;">{{$data_rosak->lain_mod}}</u>
    </div>
    <br>
    <br>
    <br><br><br>
@elseif($data_rosak->mod_aduan_id == 4)
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Telefon</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Faksimili</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">E-Mel</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">Surat</label>
    </div>
   
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">Lain-lain(Sila Sila Nyatakan):</label>
        <u class="form-check-label" style="margin-left: 70px;">{{$data_rosak->lain_mod}}</u>
    </div>
    <br>
    <br>
    <br><br><br>
@elseif($data_rosak->mod_aduan_id == 5)
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Telefon</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Faksimili</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" >
        <label class="form-check-label">E-Mel</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Surat</label>
    </div>
   
    <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="">
        <label class="form-check-label">Lain-lain(Sila Sila Nyatakan):</label>
        <u class="form-check-label" style="margin-left: 70px;">{{$data_rosak->lain_mod}}</u>
    </div>
    <br>
    <br>
    <br><br><br>
@endif