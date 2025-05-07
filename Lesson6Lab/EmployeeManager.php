<?php
    require("Employee.php");
    class EmployeeManager {
        private $employees = [];

        public function addEmployee(Employee $employee) {
            $this->employees[] = $employee;
        }

        public function removeEmployeeByName($name) {
            foreach ($this->employees as $key => $emp) {
                if ($emp->getName() == $name) {
                    unset($this->employees[$key]);
                    echo "Đã xoá nhân viên tên: $name<br>";
                    return;
                }
            }
            echo "Không tìm thấy nhân viên tên: $name<br>";
        }

        public function displayAll() {
            foreach ($this->employees as $emp) {
                $emp->showInfo();
            }
        }
        public function getEmployees() {
            return $this->employees;
        }
    }

    $emp1 = new Employee("Nguyễn Văn A", "1990-01-01", "HN", "0123456789", "Kế toán", "Trưởng phòng", 10000000, 2000000, 1000000, 1500000);
    $emp2 = new Employee("Trần Thị B", "1992-02-02", "HCM", "0987654321", "Kỹ thuật", "Nhân viên", 8000000, 1000000, 500000, 1000000);

    $manager = new EmployeeManager();
    $manager->addEmployee($emp1);
    $manager->addEmployee($emp2);

    echo "<h3>Danh sách nhân viên:</h3>";
    $manager->displayAll();

    echo "<h3>Xoá nhân viên tên 'Nguyễn Văn A':</h3>";
    $manager->removeEmployeeByName("Nguyễn Văn A");

    echo "<h3>Danh sách còn lại:</h3>";
    $manager->displayAll();
?>
