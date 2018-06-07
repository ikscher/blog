<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class BidInfo extends Model
{
    //
    protected $table = 'transfer_borrow_info';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = ['borrow_uid','borrow_money'];


    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // static::addGlobalScope('borrow_name', function (Builder $builder) {
        //     $builder->where('id', '>', 3600);
        // });
    }
}
