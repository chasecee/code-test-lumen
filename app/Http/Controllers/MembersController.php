<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Subscription;

class MembersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function membersList(){
        $members = Member::all()->toArray();
        $combinedSubs = 0;
        $index = 0;

        // go through members

        foreach($members as $key=>$member){
            $sub = Subscription::find($member['subscription_id']);

            $members[$key]['sub_name'] = $sub['name'];
            $members[$key]['sub_price'] = $sub['price'];

            $combinedSubs += $sub['price'];
            $index++;
        }

        // sort by sub price

        usort($members, function($up, $down) {
            return $down['sub_price'] - $up['sub_price'];
        });

        //get average of subscriptions

            $averageSubs = $combinedSubs / $index;

        return view('memberDisplay',['members'=>$members,'average'=>$averageSubs]);
    }
}
