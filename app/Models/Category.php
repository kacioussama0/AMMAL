<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

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
    public function posts() {
        return $this->hasMany(Post::class);
    }


}
