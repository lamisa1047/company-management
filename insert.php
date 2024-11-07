<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_name = $_POST['employee_name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $hire_date = $_POST['hire_date'];

    $sql = "INSERT INTO employee (employee_name, position, salary, hire_date) 
            VALUES ('$employee_name', '$position', '$salary', '$hire_date')";

    if ($db->query($sql) === TRUE) {
        header("Location: insert.php");
    } else {
        echo "Error: " . $db->error;
    }

    $db->close();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Employee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6">Add Employee</h1>
        <form action="insert.php" method="POST" class="space-y-4">
            
            <div>
                <label for="employee_name" class="block text-sm font-medium text-gray-700">Employee Name</label>
                <input
                    type="text"
                    id="employee_name"
                    name="employee_name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Enter employee name"
                    required>
            </div>

          
            <div>
                <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                <input
                    type="text"
                    id="position"
                    name="position"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Enter position"
                    required>
            </div>

           
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input
                    type="number"
                    id="salary"
                    name="salary"
                    step="0.01"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Enter salary"
                    required>
            </div>

            <div>
                <label for="hire_date" class="block text-sm font-medium text-gray-700">Hire Date</label>
                <input
                    type="date"
                    id="hire_date"
                    name="hire_date"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required>
            </div>

        
            <div>
                <button
                    type="submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Employee
                </button>
            </div>
        </form>
    </div>

</body>

</html>