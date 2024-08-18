<?php

namespace App\Traits;

use App\Models\TaskTrack;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Str;

trait TaskTrackTrait
{
    public function createTrack($inputs){
        $data =TaskTrack::create([
            'user_id' =>$inputs['user_id'],
            'resource_id' =>$inputs['resource_id'],
            'resource_type' =>$inputs['resource_type'],
            'status' =>$inputs['status'],
            'comment' =>$inputs['comment'],
            'received_date' =>Carbon::now(),
            'forward_date' =>$inputs['status'] == 1 ? Carbon::now() : null,
            'uuid' =>(string)Str::orderedUuid(),
        ]);
    }
}
