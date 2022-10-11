<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Arsip
 * @package App\Models
 * @version October 11, 2022, 12:30 pm UTC
 *
 * @property string $no_surat
 * @property string $kategori
 * @property string $judul
 * @property string $file
 */
class Arsip extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'arsips';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'no_surat',
        'kategori',
        'judul',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'no_surat' => 'string',
        'kategori' => 'string',
        'judul' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_surat' => 'required',
        'kategori' => 'required|in:Undangan,Pengumuman,Nota Dinas,Pemberitahuan',
        'judul' => 'required',
        'file' => 'required|file|mimes:pdf'
    ];
}
