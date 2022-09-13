<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    protected $table = 'disposisis';
    protected $fillable = [
        'no_urut',
        'no_agenda',
        'dari',
        'no_surat',
        'ttd',
        'nip',
        'image',
        'tanggal_disposisi',
        'diterima_tanggal',
        'perihal',
        'sifat',
    ];

    public function scopeFilter($query, array $filters){
        // $search pada closure akan menangkap apapun yang ada pada $filters['search]
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('no_urut', 'like', '%' . $search . '%');
        });
    }

}
