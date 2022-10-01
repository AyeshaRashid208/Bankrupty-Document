<?php

namespace App\Http\Controllers;

use App\Faq;
use App\FaqCategory;
use App\Service;
use App\News;
use App\Brand;
use App\Chapter13;
use App\Chapter7;
use App\Contact;
use App\Days1Process;
use App\Days2Process;
use App\Days5Process;
use App\Membership;
use App\Newsletter;
use App\OrderProcedure;
use App\Review;
use App\Sector;
use App\Slider;
use App\Support;
use App\Team;
use App\User;
use App\WritingPoint;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }
    public function dashboard()
    {
        return view('client.home');
    }
    public function home()
    {
        
        $review = Review::where('permission',0)->orderBy('created_at','DESC')->get();
        $news = News::orderBy('created_at','DESC')->get();
        $service = Service::orderBy('created_at','ASC')->get();
        $team = Team::orderBy('created_at','ASC')->get();
        $faq = Faq::orderBy('created_at','ASC')->get();
        $slider = Slider::all();
        return view('welcome',compact('review','news','service','team','faq','slider'));
       
    }
    public function contact_us()
    {
        return view('contact');
       
    }
    public function contact_us_store(Request $request)
    {
        try{
            $admin = User::find(1);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->type = $request->type;
        $contact->message = $request->message;
        $contact->save();
        $details = [
            'Name' => $request->name,
            'Email' => $request->email,
            'Phone' => $request->phone,
            'Type' => $request->type,
            'Message' => $request->message
        ];
        \Mail::to('ajzindagi4@gmail.com')->send(new \App\Mail\ContactMail($details));
        return redirect('contact-us')->with('success','Your message send to Admin, Contact to soon!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }
    public function chapter7()
    {
        $chapter7 = Chapter7::orderBy('created_at','ASC')->get();
        return view('chapter7',compact('chapter7'));
       
    }
    public function chapter13()
    {
        $chapter13 = Chapter13::orderBy('created_at','ASC')->get();
        return view('chapter13',compact('chapter13'));
       
    }
    public function order_pro()
    {
        $order_pro = OrderProcedure::orderBy('created_at','ASC')->get();
        return view('order_procedure',compact('order_pro'));
       
    }
    public function day5()
    {
        $day5 = Days5Process::orderBy('created_at','ASC')->get();
        return view('day5',compact('day5'));
       
    }
    public function day2()
    {
        $day2 = Days2Process::orderBy('created_at','ASC')->get();
        return view('day2',compact('day2'));
       
    }
    public function day1()
    {
        $day1 = Days1Process::orderBy('created_at','ASC')->get();
        return view('day1',compact('day1'));
       
    }
    public function membership()
    {
        return view('member');
       
    }
    public function membership_store(Request $request)
    {
        $member = new Membership;
        $member->create($request->all());
        return redirect('membership')->with('success','Wellcome to Membership!');
       
    }
    
    public function newsletter(Request $request){
        $validation = $request->validate(
            [
                'email' => 'required|max:255|unique:newsletters'
            ]
        );
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();
        return back()->with('success','Thank you for subscribe!');
    }
    public function redirect()
    {
        if (auth()->user()->is_admin) {
        
            return redirect()->route('admin.home')->with('status', session('status'));
        }
      
        return redirect()->route('client.home')->with('status', session('status'));
    }
}
