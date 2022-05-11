<?php
namespace App\Models;
use App\Models\Model;
class Dist extends Model{
  protected $table = 'auth_dist';
  use \Traits\insertDist;
}