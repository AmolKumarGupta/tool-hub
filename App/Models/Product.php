<?php
namespace App\Models;
use App\Models\Model;
class Product extends Model{
  protected $table='products';
  use \Traits\productsOrderBy;
  use \Traits\insertProduct;
  use \Traits\Model\pageLimit;
}
?>