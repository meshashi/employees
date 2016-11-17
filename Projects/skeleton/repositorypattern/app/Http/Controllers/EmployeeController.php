<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repository\EmployeeInterface as EmployeeInterface;

class EmployeeController extends Controller
{

    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;
    }
    
    public function create()
    {
         return view('create');
    }
    
    public function insert(Request $request)
    {   
        $this->validate($request, [
        'name' => 'bail|required|max:255',
        'designation' => 'required',
        ]);
        
        $this->employee->insert($request);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
    }
    
    public function view()
    {
         $employees = $this->employee->getAll();
         return view('view',compact('employees'));
    }
    
    public function search(){
        return view('search');
    }
    
    public function show(Request $request){
        $this->validate($request, [
        'id' => 'bail|required|max:255',
        ]);
        
        $id = $request->input('id');
        $employees = $this->employee->search($id);
        return view('show',compact('employees'));
    }
    
    public function delete($id){
        $this->employee->delete($id);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
    }
    
    public function update($id){
        $data = $this->employee->search($id);
        return view('update',compact('data'));
    }
    
    public function edit(Request $request,$id){
        
        $this->validate($request, [
        'name' => 'bail|required|max:255',
        'designation' => 'required',
        ]);
        
        $this->employee->update($request,$id);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
    }
}
