<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Car;
use App\Models\Company;
use App\Models\Package;
use App\Models\blog;
use App\Models\Testimonial;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Redirect;





class HomeController extends Controller
{
    Public function slider(){
        $testimonial=Testimonial::select()->orderBy('created_at', 'ASC')->get();
        $blogs=blog::select('blogs.id', 'blogs.name',  'short_description', 'blogs.banner', 'date', 'blog_categories.name as category')
        ->join('blog_categories', 'blogs.cat_id', 'blog_categories.id')
        ->orderBy('blogs.created_at', 'ASC')->limit(4)->get();
        $chdpackages =Package::select()->orderBy('created_at', 'ASC')->where('packages.from','=','Chandigarh')->get();
        $delpackages =Package::select()->orderBy('created_at', 'ASC')->where('packages.from','=','Delhi')->get();
        $cars = car::select()->orderBy('created_at', 'ASC')->get();
        $lcars = car::select()->orderBy('created_at', 'ASC')->where('cars.type','=','1')->get();
        $data= Slider::select()->orderBy('created_at', 'ASC')->get();
        // dd($blogs);
        return view('welcome',compact('data','cars','chdpackages','delpackages','lcars','blogs','testimonial'));
    }
    Public function about(){
        $data= Team::select()->orderBy('created_at', 'ASC')->get();
        return view('about',compact('data'));
        
    }
    Public function allcabs($id){
        $package =Package::find($id);
        $data= Car::select()->orderBy('created_at', 'ASC')->get();
        return view('allcabs',compact('data','package'));
        
    }
    public function allpackages(){
        $packages = Package::all();
        return view('allpakages',compact('packages'));
    }
    Public function whatsppmes($id,$name){
        // dd($name);
        $car=$name;
        $package =Package::find($id);
        $c_data = Company::find(1);
        return view('whatsappm',compact('package','car'));

        // $url = "https://wa.me/" . $phonenumber . "?text=". json_encode($data);
        // dd($package);
        // $url = "https://wa.me/" . $c_data->c_mobile . "?text=". 
        // "Pickup Location:".$package->from.'%2C%0A'.
        // "Drop Location:".$package->to.'%2C%0A'.
        // "Cars:".$name
        
        // ;
        // return Redirect::to($url)->header('Content-Type', 'text/html; charset=utf-8')->header('target', '_blank');
        
    }
    public function sendmessgae(Request $request) {

        $c_data = Company::find(1);

        $url = "https://wa.me/" . $c_data->c_mobile . "?text=". 
        "Name :". $request->name.'%2C%0A'.
        "Mobile Number :". $request->number.'%2C%0A'.
        "Email :". $request->email.'%2C%0A'.
        "Pickup Location:".$request->from.'%2C%0A'.
        "Drop Location:".$request->to.'%2C%0A'.
        "Cars:".$request->car.'%2C%0A'.
        "Message:".$request->message
        
        ;
        // return Redirect::to($url)->header('Content-Type', 'text/html; charset=utf-8')->header('target', '_blank');
        $html = '<html><head><script>window.open("' . $url . '", "_blank");</script></head><body></body></html>';

        return response($html)->header('Content-Type', 'text/html; charset=utf-8');
    }
    Public function contact(){
        // $data= Slider::select()->orderBy('created_at', 'ASC')->get();
        return view('contact');
        
    }
    public function services(){
       $packages = Package::select()->orderBy('created_at', 'ASC')->get();
       $cars = Car::select()->orderBy('created_at', 'ASC')->get();
       return view('services',compact('cars','packages'));

    }
    public function blogcat($id){
        $category= BlogCategory::all();
        $blogbycat=blog::select('blogs.id', 'blogs.name',  'short_description', 'blogs.banner', 'date', 'blog_categories.name as category')
        ->join('blog_categories', 'blogs.cat_id', 'blog_categories.id')
        ->orderBy('blogs.created_at', 'ASC')->where('blog_categories.id', $id)->get();;
        return view('blogsbycat',compact('blogbycat','category'));
    }
    public function blogdetails($id){
        $category= BlogCategory::all();
        $blogsdetails=blog::select('blogs.id', 'blogs.name',  'description', 'blogs.banner', 'date', 'blog_categories.name as category')
        ->join('blog_categories', 'blogs.cat_id', 'blog_categories.id')
        ->orderBy('blogs.created_at', 'ASC')->where('blogs.id', $id)->first();;
        return view('blogdetails',compact('blogsdetails','category'));
    }
    Public function blogs(){
        $blogs=blog::select('blogs.id', 'blogs.name',  'short_description', 'blogs.banner', 'date', 'blog_categories.name as category')
        ->join('blog_categories', 'blogs.cat_id', 'blog_categories.id')
        ->orderBy('blogs.created_at', 'ASC')->get();
        return view('blogs',compact('blogs'));
        
    }

    
    public function logout(){
        auth()->logout();
        Session()->flush();
        return redirect('/login');
    }
    public function sendmail( Request $request){
     ////Owner mail Send
    //  $c_data = Company::find(1);
    //  $email_data1 = [
    //      'name' => $c_data['name'],
    //      'c_name' => $c_data['c_name'],
    //      'to' => $c_data['c_email'],
    //      'c_logo' => $c_data['c_logo'],
    //      'c_address' => $c_data['c_address'],
    //      'name' => $request->name,
    //     //  'mobile_no' => $mobile_no,
    //      'email' => $request->email,
    //     //  'location' => $location,
    //      'from' => $request->email,
    //      'heading' => $request->message,
    //      'subject' => $request->subject,
    //  ];
    //  Mail::send('mail.BusinessEnquiry', ['email_data1' => $email_data1], function ($message) use ($email_data1) {
    //      $message->to('singhjaggi77340@gmail.com')->subject($email_data1['subject']);
    //      $message->from($email_data1['from'], $email_data1['name']);
    //  });
    }
}
