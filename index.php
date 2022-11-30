<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TODO List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js" integrity="sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js" type="module" defer></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="app">
        <main id="site_main">
            <div class="container pt-5">
                <h1 class="text-center">TODO List</h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-5">
                        <ul class="tasks list-unstyled list-group list-group-flush my-3">
                            <li v-for="(task,i) in tasks" class="list-group-item fs-4 d-flex justify-content-between"> <span class="clickable" :class="task.completed ? 'completed' : ''" @click="completeTask(i)">{{task.title}}
                                </span>
                                <i class="clickable fa-solid fa-trash p-2 bg-danger text-white rounded-2" @click.stop="delTask(i)"></i>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <div class="mb-2 flex-grow-1">
                                <label for="" class="form-label fw-semibold">Add new Task</label>
                                <input type="text" name="newTask" id="newTask" class="form-control" placeholder="exampleTask" aria-describedby="helpId" v-model="newTask">
                                <small id="helpId" class="text-muted">*click on a task to complete it</small>
                            </div>
                            <button type="submit" class="btn ms_btn btn-primary flex-grow-1 ms-4" @click="addTask">Add</button>
                        </div>

                    </div>
                </div>

            </div>
        </main>
    </div>

</body>

</html>