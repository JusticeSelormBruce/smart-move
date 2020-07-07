<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Images extends Model
{

    public function university()
    {
        return $this->belongsTo(University::class);
    }
    protected $guarded = [];



    public function validateLogoData()
    {
        return request()->validate([
            'path' => 'file|required',
        ]);
    }

    public function hasLogo($value)
    {
        if ($value == null) {
            return null;
        } else {
            return $value;
        }
    }

    public function getLogoPath($value)
    {
        if ($value == null) {
            return null;
        } else {
            $path = Storage::putFile('logos/'.Auth::user()->university->name , $value);
            return $value->storeAs("public", $path);
        }
    }

    public function LogoData()
    {

        $data = $this->validateLogoData();
        if (\request()->path == null) {
            return $data + ['university_id' => Auth::user()->university->id];
        } else {
            $result = $this->hasLogo($data['path']);
            $value = $this->getLogoPath($result);
            return   array('path' => $value, 'university_id' => Auth::user()->university->id);
        }


    }

    public function updatelogo($id, $path)
    {
        Images::whereId($id)->update(['path' => $path]);
    }

    // public function updateAnnouncement($id)
    // {
    //     $data = $this->validateAnnouncementData();
    //     Post::whereId($id)->update($data);
    // }
}
