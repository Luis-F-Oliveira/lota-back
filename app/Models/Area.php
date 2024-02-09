<?php

namespace App\Models;

use App\Models\Staffing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    public function staffing()
    {
        return $this->belongsTo(staffing::class);
    }
}
