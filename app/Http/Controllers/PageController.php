<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Item;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function mainfun($value=''){
        $categories=Category::All();
         $subcategories=Subcategory::All();
         $items=Item::All();

    	return view('main',compact('categories','subcategories','items'));
    }
     public function brandfun($value=''){
    	return view('brand');
    }
     public function itemdetailfun($value=''){
    	return view('itemdetail');
    }
     public function loginfun($value=''){
    	return view('login');
    }
     public function promotionfun($value=''){
    	return view('promotion');
    }
     public function registerfun($value=''){
    	return view('register');
    }
     public function shoppingcartfun($value=''){
         $categories=Category::All();
         $subcategories=Subcategory::All();
         $items=Item::All();

        return view('shoppingcart',compact('categories','subcategories','items'));
    
    }
     public function subcategoryfun($value=''){
    	return view('subcategory');
    }

 //    public function brandfun($value=''){
		
		
	// 	return view('brand');
	// }
}
