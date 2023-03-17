<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorije extends Model
{
    use Translatable;

    public $translatedAttributes = ['naziv'];

    protected $fillable = ['naziv'];
}
class KategorijeTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['naziv'];
}
