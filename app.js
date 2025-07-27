// console.log("Hello, World!");
{
// console.log(localStorage.maxId);
 // Initialize maxId if it doesn't exist
 let maxId = localStorage.getItem("maxId") || 0; // Default to 1 if not set
 maxId = parseInt(maxId) + 1; // Ensure maxId is a number
document.getElementById("i_d").value = maxId; // Set the ID input to the next available ID
}
function create_todo_Item(id, title, description, dueDate, priority) {
    let todoItem = {
        id: id,
        title: title,
        description: description,
        dueDate: dueDate,
        status: priority, // Assuming 'unfinished' is a predefined constant or variable
    };// This is a simple function to create a todo item object - now storing in local storage
    localStorage.setItem(`todoItem-${id}`, JSON.stringify(todoItem));
    localStorage.setItem("maxId", id); // Store the maximum ID used
    // console.log(todoItem);
}
// create_todo_Item(1, "Buy groceries", "Milk, Bread, Eggs", "2025-01-01", "High");

// var hello = 10;



function get_todo_item() 
{
    console.log("get_todo_item function called");
    // f1.submit();
    let _id = document.getElementById("i_d").value;
    let _title = document.getElementById("title").value;
    let _description = document.getElementById("description").value;
    let _date = document.getElementById("date").value;
    let_date = new Date(_date);
    let _status = document.getElementById("status").value;
    console.log(_status);
    // console.log(_id+ _title+ _description+ _date+ _status);
    create_todo_Item(_id, _title, _description, _date, _status);
    location.reload();


}

function empty_local_storage()
{
    console.log("empty_local_storage function called");
    let result = confirm("Clearing all local storage items");
    
    if(result)
    localStorage.clear();
    location.reload();

}
// console.log(JSON.parse(localStorage.getItem("todoItem-1"))); // This will log the todo item with id 1 if it exists


{
    let todoList = document.getElementById("todo-list");
    // console.log(todoList.innerHTML);
    todoList.innerHTML = ""; // Clear the existing list
    for (let i = 1; i <= localStorage.length; i++) {
        let todoItem = JSON.parse(localStorage.getItem(`todoItem-${i}`));
        if (todoItem) {
            todoList.innerHTML += `
            <tr>
                <td>${todoItem.id}</td>
                <td>${todoItem.title}</td>
                <td>${todoItem.description}</td>
                <td>${todoItem.dueDate}</td>
                <td>${todoItem.status}</td>
                <td>
                    <button class="btn btn-danger" onclick="delete_todo_item(${todoItem.id})">Delete</button>
                    <button class="btn btn-primary" onclick="edit_todo_item(${todoItem.id})">Edit</button>
                </td>`
        }
    }


}

function delete_todo_item(id) {
    console.log("delete_todo_item function called for ID:", id);
    localStorage.removeItem("todoItem-"+id);
    location.reload();
}
function edit_todo_item(id) {
    console.log("edit_todo_item function called for ID:", id);
    // header("Location: get_sample_todoitem.php"?id=" + id);
    window.location.href = "get_sample_todoitem.php?i_d=" + id;
    // we cannot pass query parameters using header in JavaScript, so we use window.location.href
    // This will redirect to get_sample_todoitem.php with the id as a query parameter
    // rest functioning is same as php method using headers
    // in get_sample_todoitem.php, we will retrieve the id using $_GET['i_d'] and then populate the form fields with the existing data
}
