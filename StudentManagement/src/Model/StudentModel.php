<?php

namespace Beso\StudentManagement\Model;
use Beso\StudentManagement\Core\Crud;
use Beso\StudentManagement\Core\Database;

class StudentModel extends Database implements Crud {

    public $id;
    public $name;
    public $year_level;
    public $course;
    public $section;

    public function __construct()
    {
        parent::__construct();
        $this->id = "";
        $this->name = "";
        $this->year_level = "";
        $this->course = "";
        $this->section = "";
    }

    public function displayInfo()
    {
        echo "id : ".$this->id."\n";
        echo "name : ".$this->name."\n";  
        echo "yearLevel : ".$this->year_level."\n"; 
        echo "course : ".$this->course."\n"; 
        echo "section : ".$this->section."\n"; 
    }

    public function create() 
    {
       try {
        $sql = "INSERT INTO students (`name`, `yearLevel`, `course`, `section`) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([
            $this->name,
            $this->year_level,
            $this->course,
            $this->section
        ]);
        if ($stmt->affected_rows > 0) {
            echo "Student successfully added!";
        } else {
            echo "Failed to add student.";
        }
        $stmt->close();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
    
    public function read(){
        try {
            $sql = "SELECT * FROM students";
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        }catch(\Exception $e){
            echo $e->getMessage();
        } 
    }
    public function update()
    {
        try {
            $stmt = $this->conn->prepare("UPDATE students SET fullname = ?, yearLevel = ?, course = ?, section = ? WHERE id = ?");
            $stmt->bind_param("sissi", $this->name, $this->year_level, $this->course, $this->section, $this->id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    
    
    public function delete()
    {
        try {
            $stmt = $this->conn->prepare("DELETE FROM students WHERE id = ?");
            $stmt->bind_param("i", $this->id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    
} 