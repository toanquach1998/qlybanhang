<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table        = 'products';
    protected $fillable     = ['product_name', 'image', 'description', 'standard_cost', 'list_price', 'quantity_per_unit', 
    'discountined', 'discount','category_id','supplier_id'];
    protected $guarded      = ['id'];
    protected $primaryKey   = 'id';
   // protected $dates        = ['l_taoMoi', 'l_capNhat'];
  //  protected $dateFormat   = 'Y-m-d H:i:s';public function loaisanpham()
  
    public function category(){
    return $this->belongsTo('App\Category', 'category_id', 'id');
}
public function supplier(){
    return $this->belongsTo('App\Supplier', 'supplier_id', 'id');
}

}
