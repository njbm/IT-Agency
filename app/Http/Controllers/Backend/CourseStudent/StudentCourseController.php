<?php
namespace App\Http\Controllers\Backend\CourseStudent;

use App\Http\Controllers\Controller;
use App\Models\CourseStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
class StudentCourseController extends Controller
{
    public function home()
    {
        $students = CourseStudent::latest()->get();
        return view('Backend.pages.Students.CourseStudent.All_CourseStudent', compact('students'));
        // return view('Backend.pages.CourseStudent.All_CourseStudent');
    }
    public function add_studentcourse(Request $request)
    {
        $rules = [
            'student_name' => 'required|string|max:255',
            'student_image' => 'required',
            'email' => 'required|string|email|max:255|unique:students',
            'phone_number' => 'required|unique:students',
            'gander' => 'required',
            'country' => 'required',
            'date_of_birth' => 'required|date',
            'city' => 'required',
            'post_code' => 'required',
            'nid_number' => 'required',
            'qualification' => 'required',
            'address' => 'required',
            'course_name' => 'required',
            'course_quantity' => 'required',
            'course_price' => 'required',

            
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return redirect()->back()->with('error', $firstError);
        }
        $student =new Student();
        $student->student_name = $request->input('student_name');
        $student->email = $request->input('email');
        $student->phone_number = $request->input('phone_number');
        $student->gender = $request->input('gender');
        $student->country = ucfirst($request->input('country'));
        $student->date_of_birth = $request->input('date_of_birth');
        $student->city = ucfirst($request->input('city'));
        $student->post_code = $request->input('post_code');
        $student->nid_number = $request->input('nid_number');
        $student->qualification = $request->input('qualification');
        $student->address = ucfirst($request->input('address'));
        $student->course_name = $request->input('course_name');
        $student->course_quantity = $request->input('course_quantity');
        $student->course_price = $request->input('course_price');

        
        if($request->hasFile('student_image')){
            $extension=$request->file('student_image')->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $request->file('student_image')->move(public_path('backend/Student_Image/'),$filename);
            $student->student_image = $filename;
        }
        $student->save();
        return redirect()->route('admin.student.home')->with('success', 'Student created successfully');
    }

    public function edit_student($id)
    {
        $student = Student::findOrFail($id);
       return view('Backend.pages.Students.CourseStudent.Update_Student', compact('student'));
    }

    public function update_student(Request $request)
    {
        $rules = [
            'student_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'date_of_birth' => 'required|date',
            'city' => 'required',
            'post_code' => 'required',
            'nid_number' => 'required',
            'qualification' => 'required',
            'address' => 'required',
            'course_name' => 'required',
            'course_quantity' => 'required',
            'course_price' => 'required',

        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            dd($firstError);
            return redirect()->back()->with('error', $firstError);
        }

        $student = Student::find($request->student_id);
        $student->student_name = $request->input('student_name');
        $student->email = $request->input('email');
        $student->phone_number = $request->input('phone_number');
        $student->gender = $request->input('gender');
        $student->country = $request->input('country');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->city = $request->input('city');
        $student->post_code = $request->input('post_code');
        $student->nid_number = $request->input('nid_number');
        $student->qualification = $request->input('qualification');
        $student->address = $request->input('address');
        $student->course_price = $request->input('course_price');
        $student->course_name = $request->input('course_name');
        $student->course_quantity = $request->input('course_quantity');
        $student->course_price = $request->input('course_price');
        
        if($request->hasFile('student_image')){
            $extension=$request->file('student_image')->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $request->file('student_image')->move(public_path('backend/Student_Image/'),$filename);
            $student->student_image = $filename;
            $image_path = public_path('backend/Student_Image/'.$request->old_student_image);
            unlink($image_path);
        }
        $student->update();

        return redirect()->route('admin.student.home')->with('success', 'Student updated successfully');
    }

    public function delete_student($id)
    {
        $student = Student::findOrFail($id);
        $image_path = public_path('backend/student_Image/'.$student->student_image);
        if(file_exists($image_path)) {
          unlink($image_path);
        }

        $student->delete();

        return redirect()->route('admin.student.home')->with('success', 'Student deleted successfully');
    }
}