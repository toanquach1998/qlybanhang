<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table        = 'suppliers';
    protected $fillable     = ['supplier_name', 'description', 'image'];
    protected $guarded      = ['id'];
    protected $primaryKey   = 'id';
    public function products()
{
    return $this->hasMany('App\Product', 'supplier_id', 'id');
}
}
