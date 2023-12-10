<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function agent(){
        return $this->belongsTo(Agent::class,'agent_id');
    }
    public function queqe(){
        return $this->belongsTo(Queue::class,'queue_id');
    }
    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }
}
