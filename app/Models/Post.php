<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this -> belongsToMany(Tag::class);
    }

    protected function sizes(): Attribute
    {
        return Attribute::make(
            get: function () {
                $arabic = explode('original',$this->thumbnail);
                $english = explode('original',$this->thumbnail_en);
                $french = explode('original',$this->thumbnail_fr);
                $deutch = explode('original',$this->thumbnail_de);
                return [
                    'original_arabic' => $this->thumbnail,
                    'small_arabic' => $arabic[0] . 'small' . $arabic[1],
                    'medium_arabic' => $arabic[0] . 'medium' . $arabic[1],
                    'large_arabic' => $arabic[0] . 'large' . $arabic[1],
//                    'original_english' => $this->thumbnail_en ?? "",
//                    'small_english' => $english[0] . 'small' . $english[1] ?? "",
//                    'medium_english' => $english[0] . 'medium' . $english[1] ?? "",
//                    'large_english' => $english[0] . 'large' . $english[1] ?? "",
//                    'original_french' => $this->thumbnail_fr ?? "",
//                    'small_arabic' => $french[0] . 'small' . $french[1]  ?? "",
//                    'medium_arabic' => $french[0] . 'medium' . $french[1] ?? "",
//                    'large_arabic' => $french[0] . 'large' . $french[1] ?? "",
//                    'original_deutch' => $this->thumbnail_de ?? "",
//                    'small_deutch' => $deutch[0] . 'small' . $deutch[1] ?? "",
//                    'medium_deutch' => $deutch[0] . 'medium' . $deutch[1] ?? "",
//                    'large_deutch' => $deutch[0] . 'large' . $deutch[1] ?? "",
                ];
            }
        );

    }

    public function title()
    {
       $lang = App::getLocale();
       if($lang == 'en') return $this->title_en;
       else if($lang == 'fr') return $this->title_fr;
       else if($lang == 'de') return $this->title_de;
       return $this->title;
    }

    public function slug()
    {
        $lang = App::getLocale();
        if($lang == 'en') return $this->slug_en;
        else if($lang == 'fr') return $this->slug_fr;
        else if($lang == 'de') return $this->slug_de;
        return $this->slug;
    }

    public function content()
    {
        $lang = App::getLocale();
        if($lang == 'en') return $this->content_en;
        else if($lang == 'fr') return $this->content_fr;
        else if($lang == 'de') return $this->content_de;
        return $this->content;
    }

    public function thumbnail()
    {
        $lang = App::getLocale();
        if($lang == 'en') return $this->thumbnail_en;
        else if($lang == 'fr') return $this->thumbnail_fr;
        else if($lang == 'de') return $this->thumbnail_de;
        return $this->thumbnail;
    }

}
