<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory,CustomTimestamps;

    protected $fillable = [
        'title',
        'slug',
        'link',
        'order',
        'photo',
        'month',
        'year',
        'is_active',
        'is_published',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public function getPhotoUrlAttribute()
    {
        return config('constants.NEWS_DOC_URL') . DIRECTORY_SEPARATOR . $this->photo;
    }
}
