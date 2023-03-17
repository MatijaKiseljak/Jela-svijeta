<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagovi extends Model
{
    use Translatable;

    public $translatedAttributes = ['naziv'];

    protected $fillable = ['naziv'];
}
class TagoviTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['naziv'];
}