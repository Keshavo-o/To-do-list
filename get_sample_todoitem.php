<?php
// print_r($_GET);
$id = $_GET['i_d'];
// echo $id;
?>
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




<br>





<div action="" method="" name="f1" class="p-4 bg-dark text-white rounded">
    <h3 class="mb-4">To-Do Item Edit</h3>

    <div class="form-row mb-3">
        <div class="col-md-2">
            <label for="i_d">ID</label>
            <input type="number" min="0" class="form-control" name="id" id="i_d" value="<?php echo $id; ?>" placeholder="Enter ID" readonly>
        </div>
        <div class="col-md-5">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
        </div>
        <div class="col-md-5">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
        </div>
    </div>

    <div class="form-row mb-3">
        <div class="col-md-6">
            <label for="date">Due Date</label>
            <input type="date" class="form-control" name="due-date" id="date">
        </div>
        <div class="col-md-6">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <!-- You can add more status options later -->
            </select>
        </div>
    </div>

    <button style="width: 50%; margin-left:25%  " onclick="edit_the_item()" class="btn btn-success mt-3">Submit</button>
</div>





<script>
    let _title = document.getElementById("title");
    let _description = document.getElementById("description");
    let _date = document.getElementById("date");
    let _status = document.getElementById("status");
    console.log(localStorage.getItem("todoItem-"+<?php echo $id; ?>));
    let _todoItem = JSON.parse(localStorage.getItem("todoItem-"+<?php echo $id; ?>));
    _title.value = _todoItem.title;
    _description.value = _todoItem.description;
    _date.value = _todoItem.dueDate;
    _status.value = _todoItem.status;

function edit_the_item()
{
    console.log("Editing the item with ID: " + <?php echo $id; ?>);
    let id = document.getElementById("i_d").value;
    let title = _title.value;
    let description = _description.value;
    let dueDate = _date.value;
    let status = _status.value;

    let todoItem = {
        id: id,
        title: title,
        description: description,
        dueDate: dueDate,
        status: status
    };
    localStorage.setItem("todoItem-" + id, JSON.stringify(todoItem));//we can simply update the existing item in localStorage
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>

