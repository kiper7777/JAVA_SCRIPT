//create a promise to pass the object of employee and display the employee
// Define the employee object
const employee = {
    name: "John Smith",
    id: 101,
    position: "Software Engineer",
    department: "IT",
  };
  
  function displayEmployee(employee) {
    return new Promise((resolve, reject) => {
     
      if (employee && employee.name) {
        resolve(employee); 
      } else {
        reject("Employee data is invalid"); 
      }
    });
  }
  

  displayEmployee(employee)
    .then((emp) => {
     
      console.log(`Employee Name: ${emp.name}`);
      console.log(`Employee ID: ${emp.id}`);
      console.log(`Position: ${emp.position}`);
      console.log(`Department: ${emp.department}`);
    })
    .catch((error) => {
     
      console.log(error);
    });
  