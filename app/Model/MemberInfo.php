<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemberInfo extends Model
{
    //
    public $table='member_info';//

    /**
     * Get the user that owns the phone.
     */
    public function member()
    {
        return $this->belongsTo('App\Model\Member','uid');
    }
}
