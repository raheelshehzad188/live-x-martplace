
@extends('layout.app2')
<?php
use App\Models\Catagorie;
use App\Models\Subcatagorie;
use App\Models\Childcatagorie;
use App\Models\Admins\Product;
use App\Models\Gallerie;
use Illuminate\Support\Facades\Session;
use App\Models\Admins\Setting;
use App\Models\Admins\Rating;
use App\Models\Admins\Slider;
  ?>
  @section('content')
  <?php $setting = DB::table('setting')
    ->where('id', '=', '1')
    ->first();
?>
  <style>
      .blog-posts-wrap {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.post-link {
  margin: 20px 20px 20px 20px;
}

.post-wrap {
  display: flex;
  flex-direction: column;
  position: relative;
  width: 400px;
  background-color: #fff;
  box-shadow: 0px 2px 20px rgba(0,0,0,.25);
  transition: all .25s;
  top: 0;
  border-radius: 10px;
  overflow: hidden;
}

.post-wrap:hover {
  top: 2px;
  box-shadow: 0px 0px 10px rgba(0,0,0,.25);
}

.post-image {
  height: 200px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.post-body {
  width: 300px;
  padding: 10px;
  margin: 0 auto;
}

.post-body-primary {
  margin: 40px 0 40px 0;
}

.post-meta {
  color: #7B7B7B;
}

.post-meta b {
  font-weight: 500;
}

.post-title {
  color: #444;
  font-size: 20px;
  padding: 5px 0 10px 0;
}

.post-text {
  color: #7B7B7B;
}

.post-body-secondary {
  border-top: 1px solid #ECECEC;
}

.post-category {
  color: #7B7B7B;
  padding: 15px 0 10px 0;
}

/* Button Styling */
.button-wrap {
  display: flex;
  justify-content: center;
  margin: 20px 0 20px 0;
}

.button {
  position: relative;
  background-color: #3089DB;
  padding: 20px 60px 20px 60px;
  box-shadow: 0px 6px 20px rgba(48,137,219,.60);
  transition: all .25s;
  top: 0;  
  border-radius: 10px;
  
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.button:hover {
  border-radius: 10px;
  box-shadow: 0px 2px 10px rgba(48,137,219,.60);
  top: 2px;
}
  </style>

      @include('includes/parts/home_slider')
      @include('includes/parts/home_categoy')
      @include('includes/parts/home_fproduct')
      @include('includes/parts/home_offer')
      @include('includes/parts/home_rproduct')
      @include('includes/parts/home_offer2')



     @endsection