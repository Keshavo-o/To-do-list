<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>






    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>







<hr style="border: 2px solid black;">

    <h3 align="center">ENTER A TO-DO ITEM</h3>
    <hr style="border: 2px solid black;">

<form action="get_sample_todoitem.php" method="post" name="f1">
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Due Date</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody id="todo-list-input">
        <!-- To-do items will be dynamically inserted here -->
         <tr>
            <td><input type="number" min="0" name="id" id="i_d"></td>

            <td><input type="text" placeholder="Enter title" name="title" id="title"></td>
                
            <td><input type="text" placeholder="Enter description" name="description" id="description"></td>

            <td><input type="date"  name="due-date" id="date"></td>

            <td>
                <select name="status" id="status">
                    <option value="pending">Pending</option>
                </select>
            </td>
        </tr>
    </tbody>
</table>
</form>






<br>



<button style="width:49%;"  class="btn btn-dark" onclick="get_todo_item()"> Submit </button>
<button style="width:49%;"  class="btn btn-danger" onclick="empty_local_storage()"> Delete all tasks </button>



<br>
<br>
<br>
<br>

<hr style="border: 2px solid black;">
<h3 align="center">TO DO LIST</h3>

<hr style="border: 2px solid black;">



<table class="table table-striped table-dark">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Title</th>
    <th scope="col">Description</th>
    <th scope="col">Due Date</th>
    <th scope="col">Status</th>
    <th  scope="col">Actions</th>
  </tr>
  <tbody id="todo-list">
    <!-- To-do items will be dynamically inserted here -->
     <!-- a sample input -->
      <tr>
        <td>1</td>
        <td>Sample Task</td>
        <td>This is a sample task description.</td>
        <td>2023-10-01</td>
        <td>Pending</td>
        <td>
            <button class="btn btn-success" onclick="edit_todo_item(1)">Edit</button>
            <button class="btn btn-danger" onclick="delete_todo_item(1)">Delete</button>
        </td>
      </tr>
  </tbody>
  <!-- \end{code} -->
</table>


<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>