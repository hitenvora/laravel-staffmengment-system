<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactUsModel;
use App\Mail\EmailSend;
use Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            "name"=>"required",
            "firstname"=>"required",
            "lastname"=>"required",
            "email"=>"required|email",
            "mobile"=>"required|min:10|max:10",
            "message"=>"required"
        ]);
        $data=array(

            "name"=>$request->name,
            "fname"=>$request->firstname,
            "lname"=>$request->lastname,
            "email"=>$request->email,
            "phone"=>$request->mobile,
            "message"=>$request->message,
        );
        // elequent query builder
        ContactUsModel::create($data);
        // return view('contactus');
        Mail::to('bkpandey.pandey@gmail.com')->send(new EmailSend($data));
        return redirect("/contact-us")->with("success","Thanks for contact with us we get your email we will contact with you Soon!");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // elequent query builder

        $data=ContactUsModel::all();
        return view('admin.managecontact',["data"=>$data]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // elequent query bulider
        ContactUsModel::where('id',$id)->delete();
        return redirect('admin-login/managecontacts/')->with('del','Your data successfully deleted');

    }
}
