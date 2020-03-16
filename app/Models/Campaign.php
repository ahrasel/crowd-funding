<?php

namespace App\Models;

use App\Models\CampaignCategory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function category()
    {
        return $this->belongsTo(CampaignCategory::class, 'campaign_category_id');
    }
}
