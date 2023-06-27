<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory, CustomTimestamps;

    protected $fillable = [
        'type',
        'title',
        'slug',
        'directed_by',
        'produced_by',
        'main_cast',
        'release_date',
        'logo',
        'youtube_trailer_link',
        'poster_landscape',
        'poster_potrait',
        'gallery',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'netflix',
        'amazon_prime',
        'zee5',
        'alt_balaji',
        'hotstar',
        'eros_now',
        'mx_player',
        'status',
        'is_recent',
        'is_clickable',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public function getReleaseDateFormattedAttribute()
    {
        if(!empty($this->release_date)){
            return Carbon::parse($this->release_date)->format('d-m-Y');
        } else {
            return '';
        }
    }

    public function getReleaseDateFrontFormattedAttribute()
    {
        if(!empty($this->release_date)){
            return Carbon::parse($this->release_date)->format('d F Y');
        } else {
            return '';
        }
    }

    public function getLogoUrlAttribute()
    {
        return config('constants.MOVIE_DOC_URL') . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $this->logo;
    }

    public function getPosterLandscapeUrlAttribute()
    {
        return config('constants.MOVIE_DOC_URL') . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $this->poster_landscape;
    }

    public function getPosterPotraitUrlAttribute()
    {
        return config('constants.MOVIE_DOC_URL') . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $this->poster_potrait;
    }
    public function getGalleryUrlAttribute()
    {
        $images = [];
        $all_images = json_decode($this->gallery, true);

        if(!empty($all_images)){
            foreach ($all_images as $key => $value) {
                $images[] = config('constants.MOVIE_DOC_URL') . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $value;
            }
        }
        return $images;
    }
}
