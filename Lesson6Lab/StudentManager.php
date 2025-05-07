<?php 
    class Student {
        private $id;
        private $name;
        private $gpa;
        
        public function __construct($id, $name, $gpa) {
            $this->id = $id;
            $this->name = $name;
            $this->gpa = $gpa;
        }
        
        public function getId() {
            return $this->id;
        }
        
        public function getName() {
            return $this->name;
        }
        
        public function getGpa() {
            return $this->gpa;
        }
    }

    class StudentManager {
        private $students = [];
        
        public function addStudent(Student $student) {
            $this->students[] = $student;
        }
        
        public function removeStudent($id) {
            foreach ($this->students as $key => $student) {
                if ($student->getId() == $id) {
                    unset($this->students[$key]);
                    echo "Student with ID $id removed.";
                    return;
                }
            }
            echo "Student with ID $id not found.";
        }
        
        public function displayStudents() {
            foreach ($this->students as $student) {
                echo "ID: " . $student->getId() . ", Name: " . $student->getName() . ", GPA: " . $student->getGpa() . "<br>";
            }
        }
    }

    $student1 = new Student(101, "John Doe", 3.8);
    $student2 = new Student(102, "Jane Smith", 3.5);

    $studentManager = new StudentManager();
    $studentManager->addStudent($student1);
    $studentManager->addStudent($student2);

    $studentManager->displayStudents();
?>