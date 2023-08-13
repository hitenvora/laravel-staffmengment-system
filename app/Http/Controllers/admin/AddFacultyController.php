<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddFaculty;
use DB;

class AddFacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch dropdownliast of collegename and department
        $collegname=DB::table('addcolleges')->get();
        $depnm=DB::table('adddepartments')->get();
        return view('admin.addfaculty',["collegname"=>$collegname,"depnm"=>$depnm]);
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

            "photo"=>"required|image|mimes:png,jpeg,jpg,gif|max:2024",
            "name"=>"required",
            "departmentname"=>"required",
            "collegename"=>"required",
            "subject"=>"required",
            "age"=>"required",
            "mobile"=>"required|min:10|max:10",
            "address"=>"required"
        ]);

        // upload photo or file or image
        $path=rand().''.$request->photo->extension();
        $request->photo->move(public_path('uploads/faculty'),$path);   
           
        $data=array(

            "photo"=>$path,
            "name"=>$request->name,
            "department_id"=>$request->departmentname,
            "college_id"=>$request->collegename,
            "subject"=>$request->subject,
            "age"=>$request->age,
            "mobile"=>$request->mobile,
            "address"=>$request->address,
        );
        // elequent query builder
        AddFaculty::create($data);
        return redirect("/admin-login/addfaculty")->with("success","Faculty successfully added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // manage faculty join departments and college
        $data=DB::table("addfaculties")->join('adddepartments', 'addfaculties.department_id', '=', 'adddepartments.id')->join('addcolleges', 'addfaculties.college_id', '=', 'addcolleges.id')->select('addfaculties.*', 'adddepartments.departmentname', 'addcolleges.collegname')->get();

        return view('admin.managefaculty',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $editdata=DB::table("addfaculties")->join('adddepartments', 'addfaculties.department_id', '=', 'adddepartments.id')->join('addcolleges', 'addfaculties.college_id', '=', 'addcolleges.id')->select('addfaculties.*', 'adddepartments.departmentname', 'addcolleges.collegname')->get()->where('id',$id)->first();
         $collegname=DB::table('addcolleges')->get();
        $depnm=DB::table('adddepartments')->get();

        return view('admin.editfaculty',['editdata'=>$editdata,'collegname'=>$collegname,'depnm'=>$depnm]);

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
        //   update data
        // upload photo or file or image
        $path=rand().''.$request->photo->extension();
        $request->photo->move(public_path('uploads/faculty'),$path);      
        $data=array(

            "photo"=>$path,
            "name"=>$request->name,
            "department_id"=>$request->departmentname,
            "college_id"=>$request->collegename,
            "subject"=>$request->subject,
            "age"=>$request->age,
            "mobile"=>$request->mobile,
            "address"=>$request->address,
        );
        // elequent query builder
        AddFaculty::where('id',$id)->update($data);
        return redirect("/admin-login/managefaculty")->with("success","Faculty successfully Updated!");
   
        


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
          AddFaculty::where('id',$id)->delete();
          return redirect('/admin-login/managefaculty')->with('del','Your data successfully deleted');
  
    }
}
