<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class PerfomersBidStack extends Eloquent {
    public function bid()
    {
        return $this->hasOne('Bid');
    }
    public function performer()
    {
        return $this->hasOne('Performer');
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'performersbidstacks';
}