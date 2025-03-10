let promises1=new Promise(function(resolve,reject)
{
    setTimeout(function()
    {
        console.log("Async task is completed")
        resolve();
    }
),4000})

promises1.then(function(){
    console.log("Task resolve")
})

//promises

new Promise(function(resolve,reject){
    setTimeout(function(){
        console.log("Async2 task is now completed")
    },5000)
}).then(function(){
    console.log("Task2 is resolve")
})

//promises3
//promises.then().catch().finally

new Promise(function(resolve,reject){
    let error=true;
    if(!error){
        setTimeout(function(){
            resolve(console.log("task is completed")) 
        },5000)
        
    }
    else {reject("error")}
}).then(function(){
    console.log("Task3 is resolve")
}).catch(function(){
    console.log("task is not executed sorry")
}).finally(()=>{
    console.log("The request will resolve or reject")
})

//how to pass the data

new Promise(function(resolve,reject)
{
    setTimeout(function(){
        let error=false;
        if(!error)
        resolve({name:"John",age:22})
    else{reject()}
    },2000)
}).then(function(userdata)
{
    return userdata.name
}).then(function(user)
{
    console.log(user)
}).catch(function(){
    console.log("error")
}).finally(function(){
    console.log("the request either resolve or rejected")
})

//create a promise to pass the object of employee and display the employee
// const employee = {
//     name: "John Smith",
//     id: 101,
//     position: "Software Engineer",
//     department: "IT",
//   };
// new Promise(function(resolve,reject){
//     setTimeout(function(){
//         let error=true;
//         if(!error) resolve({employee})
//             else{reject()}
//     },5000)
// }).then(function(employee){
//     return employee
// }).catch(function(){
//     console.log("error")
// }).finally(function(){
//     console.log("THE REQUEST EITHER RESOLVE OR REJECTER")
// })

