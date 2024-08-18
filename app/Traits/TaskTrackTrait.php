<?php

namespace App\Traits;

use App\Models\SchengenPersonalInformation;
use App\Models\TaskTrack;
use App\Models\UsaPersonalInformation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Str;

trait TaskTrackTrait
{
    public function createTrack($inputs){
        $data =TaskTrack::create([
            'user_id' =>$inputs['user_id'],
            'action' =>$inputs['action'],
            'resource_id' =>$inputs['resource_id'],
            'resource_type' =>$inputs['resource_type'],
            'status' =>$inputs['status'],
            'comment' =>$inputs['comment'],
            'received_date' =>Carbon::now(),
            'forward_date' =>$inputs['status'] == 1 ? Carbon::now() : null,
            'uuid' =>(string)Str::orderedUuid(),
        ]);
    }

    public function resourceData($track){
        if ($track->resource_type == 1 ) {
            $data =UsaPersonalInformation::find($track->id);
        } else {
            $data =SchengenPersonalInformation::find($track->resource_id);
        }
        return $data;
    }

  
}
