<?php

namespace App\Http\Controllers;

use App\Models\Assessor;
use App\Models\Major;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Login(){
        return view('login');
    }
    public function authentikasi(Request $request){
        $validasi = $request->validate([
            'email' =>['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($validasi)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            }elseif(Auth::user()->role == 'student'){
                return redirect('/admin/student');
            }elseif (Auth::user()->role == 'assessor') {
                return redirect('/admin/assessor');
            }
            return redirect('admin')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan', 'login anda gagal');
    }
    public function dashboard(){
        return view('admin');
    }
    // public function show(){
    //     $data['user'] = User::orderby('name','desc')->get();
    //     return view('user', $data);
    // }
    public function show()
    {
        $data['students']=Student::all();
        $data['assessors']=Assessor::all();
        $data['admins']= User::where('role','admin')->get();

    return view('user', $data);
}

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function student(){
        return view('student');
    }
    public function assessor(){
        return view('assessor');
    }
    public function admincreate(){
        return view('admin-create');
    }


    public function create(){
        $majors = Major::all();
        return view('student-create', compact('majors'));
    }
    public function adduser(Request $request){
        // $validateData = $request->validate([
        //     'name' => ['required', 'min:3'],
        //     'email' => ['required', 'email'],
            // 'role' => 'required'
        // ]);
        // $filename ="";
        // $user = User::create([
        //     'name' =>$request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'phone_number' =>$request->phone_number,
        //     'password' => $request->password,
        //     'is_active' => 1,
        //     'role' => $request->role,
        // ]);
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role' => $request->role,
            'is_active' => 1,
        ]);

        // Tambahkan data ke tabel terkait
        if ($user->role == 'student') {
            Student::create([
                'user_id' => $user->id,
                'nisn' => $request->nisn,
                'grade_level' => $request->grade_level,
                'major_id' => $request->major_id,
            ]);
        } elseif ($user->role == 'assessor') {
            Assessor::create([
                'user_id' => $user->id,
                'assessor_type' => $request->assessor_type,
                'description' => $request->description,
            ]);
        }
        return redirect('/user');
    }
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        $majors = Major::all(); // Jika ada major untuk student
        return view('user-update', compact('user', 'majors'));
    }
    // public function edit(Request $request, $id)
    // {
    //     $user = User::findOrFail($id); // Lebih aman
    //     return view('student-update', compact('user'));
    // }
    // public function edita(Request $request, $id){
    //     $admin = User::findOrFail($id);
    //     return view('admin-update', compact('admin') );
    // }
    public function update(Request $request,$id){
        $user = User::findOrFail($id);

        // Validasi input
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'username' => 'required|string|max:255|unique:users,username,' . $id,
        //     'email' => 'required|email|max:255|unique:users,email,' . $id,
        //     'phone_number' => 'required|string|max:20',
        //     'password' => 'nullable|string|min:8|confirmed', // Password optional
        //     'role' => 'required|in:admin,student,assessor',
        //     'nisn' => 'nullable|string|max:20', // Untuk student
        //     'grade_level' => 'nullable|in:10,11,12',
        //     'major_id' => 'nullable|exists:majors,id',
        //     'assessor_type' => 'nullable|in:internal,external', // Untuk assessor
        //     'description' => 'nullable|string|max:1000',
        // ]);

        // Update data umum
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
            // Hanya ubah password jika diisi
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        // Update data student (jika role student)
        if ($request->role === 'student') {
            $user->student()->update( [
                'nisn' => $request->nisn,
                'grade_level' => $request->grade_level,
                'major_id' => $request->major_id,
            ]);
        }

        // Update data assessor (jika role assessor)
        if ($request->role === 'assessor') {
            $user->assessor()->update( [
                'assessor_type' => $request->assessor_type,
                'description' => $request->description,
            ]);
        }
        return redirect('/user');
    }
    public function deleteadmin(Request $request){
        $user = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();
        return redirect('/user');
    }

    // public function update(Request $request){
    //     $update = User::where('id', $request->id)->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->password? bcrypt($request->password) : DB ::raw('password'),
    //     ]);
    //     return redirect('user');
    // }
    public function delete(Request $request){
        $user = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();
        return redirect('user');
    }
    public function profil(){
        return view('profil');
    }
    public function profilcreate(){
        return view('profil-create');
    }



}



