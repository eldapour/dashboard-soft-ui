<?php


namespace App\Http\Helper;


use App\Models\Site;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Auth;

class GlobalSelection
{
    public function availableRows($site_type)
    {
        // استبعاد الاعلانات
        $preventedSites  = Site::PreventedRows()->get();
        $sites  = Site::AvailableRows()->get();
        // استبعاد الاعلانات اللي اليوزر شافها قبل كدا
        $info   = SiteInfo::where('user_id',Auth::guard('user')->id())->pluck('site_id')->toArray();
        $info = array_merge($preventedSites->pluck('id')->toArray(),$info);
        // استبعاد الاعلانات اللي وصلت للحد اليومي للمشاهدة
        foreach ($sites as $row){
            $countOfViews = SiteInfo::whereDate('created_at',date('Y-m-d'))
                ->where('site_id',$row->id)
                ->count();
            if($row->daily_clicks_limit <= $countOfViews){
                array_push($info,$row->id);
            }
        }
        $preventedSitesIds =  collect($info)->unique();
        return Site::whereNotIn('id',$preventedSitesIds)
            ->where('site_type', $site_type)
            ->orderBy('id','DESC')
            ->paginate(5);
    }

}
