<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service.
 *
 * @author  The scaffold-interface created at 2017-02-15 04:30:43pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Service extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'services';

	

	/**
     * production_unit.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function production_units()
    {
        return $this->belongsToMany('App\Production_unit');
    }

    /**
     * Assign a production_unit.
     *
     * @param  $production_unit
     * @return  mixed
     */
    public function assignProduction_unit($production_unit)
    {
        return $this->production_units()->attach($production_unit);
    }
    /**
     * Remove a production_unit.
     *
     * @param  $production_unit
     * @return  mixed
     */
    public function removeProduction_unit($production_unit)
    {
        return $this->production_units()->detach($production_unit);
    }

}
