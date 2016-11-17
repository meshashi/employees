<?php
namespace App\Repository;
 
interface EmployeeInterface {
	
	public function getAll();
        
        public function search($id);
        
        public function delete($id);
	
}