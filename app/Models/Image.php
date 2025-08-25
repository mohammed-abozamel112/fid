<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'path_url',
        'image',
        'alt_text_ar',
        'alt_text_en',
        'caption_ar',
        'caption_en',
        'type',
    ];
    public function getNameAttribute()
    {
        $locale = app()->getLocale();
        $column = 'name_' . $locale;
        return $this->{$column} ?? $this->name_en;
    }
    public function getAltTextAttribute()
    {
        $locale = app()->getLocale();
        $column = 'alt_text_' . $locale;
        return $this->{$column} ?? $this->alt_text_en;
    }
    public function getCaptionAttribute()
    {
        $locale = app()->getLocale();
        $column = 'caption_' . $locale;
        return $this->{$column} ?? $this->caption_en;
    }
}
