<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\MissingData;
use Hash;
use App\Traits\Uuids;

class AsetTakAlih extends Model
{
    use Uuids;
    use HasFactory;
    protected $table = 'lapor_rosak_tak_alih';
    
    protected $fillable = [
       'id',
        'nama_pelapor_id',             
        'bahagian_unit_id',
        'keterangan_rosak',
        'keutamaan_id',
        'lokasi_id',
        'lokasi_lain',
        'status_id',       
        'pegawai_penerima_id',
        'jawatan_id',     
        'tindakan_pegawai_id',
        'muatturun',
        'created_at',
        'updated_at',
        'deleted_at'
        
    ];

    public function users()
    {
        //return $this->belongsTo('App\User', 'nama_pelapor_id','id');
       return $this->belongsTo(User::class, 'nama_pelapor_id');
    }
    public function status_aduan()
    {
        //return $this->belongsTo('App\Models\StatusAduan', 'status_id','id');
        return $this->belongsTo(StatusAduan::class, 'status_id');
    }
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class,'lokasi_id');
        
    }
    public function bhgn_unit()
    {
        return $this->belongsTo(BahagianUnit::class,'bahagian_unit_id');
        
    }
    public function keutamaan()
    {
        return $this->belongsTo(Keutamaan::class, 'keutamaan_id');
    }
    public function s_perkhidmatan()
    {
        return $this->belongsTo(SkopPerkhidmatan::class, 'skop_perkhidmatan_id');
    }
    public function m_aduan()
    {
        return $this->belongsTo(ModAduan::class, 'mod_aduan_id');
    }
    public function aras()
    {
        return $this->belongsTo(Aras::class, 'aras_id');
    }
    public function jeniskerja()
    {
        //return $this->belongsTo(JenisKerja::class, 'jenis_kerja_id');
        if ($this->jenis_kerja_id == null){
            return $this->belongsTo(User::class)->withDefault(
                MissingData::make(['id' => $this->jenis_kerja_id])->toArray()
            );
        }
        return $this->belongsTo(User::class, 'jenis_kerja_id');
    }
    public function getPegawaiterima()
    {

        if ($this->pegawai_penerima_id == null){
            return $this->belongsTo(User::class)->withDefault(
                MissingData::make(['id' => $this->pegawai_penerima_id])->toArray()
            );
        }
        return $this->belongsTo(User::class, 'pegawai_penerima_id');
    }
    public function getJawatan()
    {
        if ($this->jawatan_id == null){
            return $this->belongsTo(Jawatan::class)->withDefault(
                MissingData::make(['id' => $this->jawatan_id])->toArray()
            );
        }
        return $this->belongsTo(Jawatan::class, 'jawatan_id');
    }
    public function getGambar1(){

    if ($this->gambar_1 == null){
        return asset('public/aduanrosak/default.png');
    }
    return asset('public/storage/aduanrosak/' .$this->gambar_1);
    }
    public function pegawaipenerima()
    {
       // return $this->belongsTo(User::class, 'ditugaskan_id');
        if ($this->ditugaskan_id == null){
            return $this->belongsTo(User::class)->withDefault(
                MissingData::make(['id' => $this->ditugaskan_id])->toArray()
            );
        }
        return $this->belongsTo(User::class, 'ditugaskan_id');
    }
    public function tindakan()
    {
        if ($this->tindakan_id == null){
            return $this->belongsTo(Tindakan::class)->withDefault(
                MissingData::make(['id' => $this->tindakan_id])->toArray()
            );
        }
        return $this->belongsTo(Tindakan::class, 'tindakan_id');
    }

//generate report pdf
   
    public static function getAllOrder($id){
        return AsetTakAlih::findOrFail($id);
    }
//end generate report pdf
    
     /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
