<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Client;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Testmonial;
use App\Traits\FileImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Str;

class ServiceController extends Controller
{
    use FileImportTrait;

    public function serviceList(){
        $services =Service::latest()->get();
        return view('backend.website.service_list',compact('services'));
    }

    public function testmonialList(){
        $testmonials =Testmonial::latest()->get();
        return view('backend.website.testmonial_list',compact('testmonials'));
    }

    public function brandList(){
        $brands =Brand::latest()->get();
        return view('backend.website.brand_list',compact('brands'));
    }

    public function faqList(){
        $faqs =Faq::latest()->get();
        return view('backend.website.faq_list',compact('faqs'));
    }

    public function countriesList(){
        $countries =Country::latest()->get();
        return view('backend.website.countries_list',compact('countries'));
    }

    public function clientList(){
        $clients =Client::latest()->get();
        return view('backend.website.clients_list',compact('clients'));
    }

    public function testmonialCreate(){
       // $services =Service::latest()->get();
        return view('backend.website.testmonial_add');
    }

    public function serviceCreate(){
        return view('backend.website.service_add');
    }

    public function brandCreate(){
        return view('backend.website.brand_add');
    }

    public function faqCreate(){
        return view('backend.website.faq_add');
    }

    public function clientCreate(){
        return view('backend.website.client_add');
    }

    public function countrierCreate(){
        $continents =Continent::orderBy('name','ASC')->get();
        return view('backend.website.country_add',compact('continents'));
    }

    public function serviceStore(Request $request){

        $valid =$request->validate([
            'name'        =>'required',
            'caption'     =>'required',
            'description' =>'required',
            'image'       =>'required',
        ]);

        try {
            DB::transaction(function() use ($valid,$request){
                $service =Service::create([
                    'name'        =>$valid['name'],
                    'caption'     =>$valid['caption'],
                    'description' =>$valid['description'],
                    'uuid'        =>(string)Str::orderedUuid(),
                    'created_by'  =>Auth::user()->id,
                ]);

                if ($request->hasFile('image')) {
                    $service->image =$this->importFile($request->file('image'),$service->name.'_'.$service->uuid);
                    $service->save();
                }

            });
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'success' =>true,
                'errors'  =>$th->getMessage()
            ],500);
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function testmonialStore(Request $request){
        $valid =$request->validate([
            'name'          =>['required'],
            'designation'   =>'required',
            'description'   =>'required',
            'image'         =>'required',
        ]);

        $slider =Testmonial::create([
            'name'          =>$valid['name'],
            'designation'   =>$valid['designation'],
            'description'   =>$valid['description'],
            'uuid'          =>(string)Str::orderedUuid(),
            'created_by'    =>Auth::user()->id,
        ]);

        if ($request->hasFile('image')) {
            $slider->image =$this->importFile($request->file('image'),$slider->title.'_'.$slider->uuid);
            $slider->save();
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function brandStore(Request $request){
        $valid =$request->validate([
            'name'          =>['required'],
            'description'   =>'required',
            'image'         =>'required',
        ]);

        $slider =Brand::create([
            'name'          =>$valid['name'],
            'description'   =>$valid['description'],
            'uuid'          =>(string)Str::orderedUuid(),
            'created_by'    =>Auth::user()->id,
        ]);

        if ($request->hasFile('image')) {
            $slider->image =$this->importFile($request->file('image'),$slider->title.'_'.$slider->uuid);
            $slider->save();
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function faqStore(Request $request){
        $valid =$request->validate([
            'name'          =>['required'],
            'description'   =>'required',
        ]);

        $slider =Faq::create([
            'name'          =>$valid['name'],
            'description'   =>$valid['description'],
            'uuid'          =>(string)Str::orderedUuid(),
            'created_by'    =>Auth::user()->id,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function countrierStore(Request $request){
        $valid =$request->validate([
            'name'           =>['required'],
            'continent_id'   =>'required',
            'country_attribute' =>'required',
            'description'       =>'required',
            'image'             =>'required',
            'cover_image'       =>'required',
        ]);
        $slider =Country::create([
            'name'          =>$valid['name'],
            'continent_id'   =>$valid['continent_id'],
            'description'   =>$valid['description'],
            'uuid'          =>(string)Str::orderedUuid(),
            'country_attribute' =>json_encode(implode(',',$valid['country_attribute'])),
            'created_by'    =>Auth::user()->id,
        ]);

        if ($request->hasFile('image')) {
            $slider->image =$this->importFile($request->file('image'),$slider->title.'_'.(string)Str::orderedUuid());
            $slider->save();
        }

        if ($request->hasFile('cover_image')) {
            $slider->cover_image =$this->importFile($request->file('cover_image'),$slider->title.'_'.(string)Str::orderedUuid());
            $slider->save();
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function clientStore(Request $request){
        $valid =$request->validate([
            'icon'          =>['required'],
            'name'          =>['required'],
            'description'   =>'required',
        ]);

        $slider =Client::create([
            'icon'          =>$valid['icon'],
            'name'          =>$valid['name'],
            'description'   =>$valid['description'],
            'uuid'          =>(string)Str::orderedUuid(),
            'created_by'    =>Auth::user()->id,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200); 
    }
}
