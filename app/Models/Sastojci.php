<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Sastojci extends Model
{
    use Translatable;

    public $translatedAttributes = ['naziv'];

    protected $fillable = ['naziv'];
}
class SastojciTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['naziv'];
}
