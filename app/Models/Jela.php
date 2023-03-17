<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Jela extends Model
{
    use Translatable;

    public $translatedAttributes = ['naziv', 'opis'];

    protected $fillable = ['naziv', 'opis'];
}
class JelaTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['naziv', 'opis'];
}