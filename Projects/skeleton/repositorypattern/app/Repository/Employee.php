<?php
namespace App\Repository;

use Illuminate\Http\Request;
use App\EmployeeModel;
 
class Employee implements EmployeeInterface{
	
        public function insert(Request $request) {
                return EmployeeModel::create($request->all());
        }
        
	public function getAll(){
		return EmployeeModel::all();
	}
        
        public function search($id) {
                return EmployeeModel::findorfail($id);
        }
        
        public function delete($id) {
                return EmployeeModel::findorfail($id)->delete();
        }
        
        public function update(Request $request,$id){
                EmployeeModel::findorfail($id)->update($request->all());
        }
	
}