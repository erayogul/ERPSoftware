<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use App\Models\Departments;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd( User::latest()->paginate(100));
        return Employee::latest()->paginate(100);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return['message'=>'I have data'];
        //return $request->all();

       /* $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6'
        ]);*/

        User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Employee::create([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
            'employee_id' => rand(10000, 99999),
        ]);

        return "ok";
    }


    public function profile()
    {
        return auth('api')->user(); 

    }

    public function updateprofile(Request $request)
    {
        

        $user = Employee::where('employee_id', $request->employee_id)->firstOrFail();
        //$user = auth('api')->user(); 
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|required|min:6'
        ]);
        $currentPhoto = $user->photo;
        if($request->photo != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];

            \Image::make($request->photo)->save(public_path('/img/profile/').$name);
            $request->merge(['photo' => $name]);

            $userPhoto = public_path('img/profile/').$currentPhoto;
            if(file_exists($userPhoto)){
                @unlink($userPhoto);
            }

        }

        if(!empty($request->password)){
            $request->merge(['password'=> Hash::make($request['password'])]);
        }

        $user->update($request->all());
        return ['message' => "Success"];
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {/*        
        $user = Employee::findOrFail($id);
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|min:6'
        ]);

        if(!empty($request->password)){
            $request->merge(['password'=> Hash::make($request['password'])]);
        }

        $user->update($request->all());

        return ['message' => 'update'];*/
    }

    public function getProfile(Request $request)
    {

        $user = Employee::where('employee_id', $request->employee_id)->firstOrFail();
        //dd($user);
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$this->authorize('isadmin');
        $user = Employee::findOrFail($id);
        $user->delete();
        return['message' => 'User Deleted'];
    }

    public function getAllUsers()
    {
        $users = DB::table('roles')
        ->join('employees', 'roles.employee_id', '=', 'employees.employee_id')
        ->select('roles.*', 'employees.name','employees.surname','employees.photo')
        ->get();
        return $users;

        //return Roles::latest()->paginate(100);
    }
    public function updateRole(Request $request)
    {
        $columName = $request->columName;
        $newRolestatus = $request->newRolestatus;
        $user = Roles::where('employee_id', $request->employee_id)->firstOrFail();
        $user->update([$columName => $newRolestatus]);
        return ['message' => "Success"];
    }
    public function getProfilPhoto(Request $request)
    {
        $user = Employee::where('employee_id', $request->employee_id)->firstOrFail();
        return $user->photo;
    }
    public function getEmployeeName(Request $request)
    {
        $user = Employee::where('employee_id', $request->employee_id)->firstOrFail();
        $name_surname= $user->name . ' ' . $user->surname;
        return $name_surname;
    }

    public function createDepartment(Request $request)
    {
        dd($request);
    }

    public function updateDepartment(Request $request)
    {
        dd($request);
    }

    public function deleteDepartment(Request $request)
    {
        dd($request);
    }

    public function getDepartment(Request $request)
    {
         return Departments::latest()->paginate(100);
    }

    public function getEmployeeId(Request $request)
    {
        $employeeIds = Employee::select('employee_id')->get();
        return $employeeIds;
    }



    
}
