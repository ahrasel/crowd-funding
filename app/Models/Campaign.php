<?php

namespace App\Models;

use App\Models\CampaignCategory;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function category()
    {
        return $this->belongsTo(CampaignCategory::class, 'campaign_category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
