<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Production_unit.
 *
 * @author  The scaffold-interface created at 2017-02-16 07:45:09pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Production_unit extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'production_units';

	

	/**
     * service.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    /**
     * Assign a service.
     *
     * @param  $service
     * @return  mixed
     */
    public function assignService($service)
    {
        return $this->services()->attach($service);
    }
    /**
     * Remove a service.
     *
     * @param  $service
     * @return  mixed
     */
    public function removeService($service)
    {
        return $this->services()->detach($service);
    }

}
