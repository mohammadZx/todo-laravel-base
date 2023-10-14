<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To List</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
</head>

<body>
    <section class="main-section bg-light py-4 d-flex flex-column align-items-center">
        <h1 class="text-center text-uppercase fw-bold mb-4">ToDo List</h1>

        <main class="todo-container mx-inline">
            <div class="todo-input-block bg-white shadow-lg rounded p-3 mb-4">
                <label for="todo_entry" class="form-label fw-semibold">Enter your ToDo Heading</label>
                <form action="" method="post" class="d-flex gap-2 align-items-start">
                    <div class="d-flex flex-column w-100">
                        <input type="text" name="todo" id="todo_entry" class="form-control" placeholder="Enter your ToDo Item..." />
                        <small class="error-message text-danger fw-semibold" style="display: none;"></small>
                    </div>
                    <button id="submit_button" class="btn btn-primary col-4 px-1">
                        <i class="fa fa-plus me-2 "></i>
                        <span class="__text">Add ToDo Item</span>
                    </button>
                </form>
            </div>
            <ul class="todo-list">

                <li class="todo-list__item shadow">
                    <div class="__heading fs-5 fw-bold">محل قرار گیری تودو</div>
                    <div class="__buttons flex-shrink-0 d-flex gap-1">
                        <a class="__delete"><i class="fa pe-none fa-trash"></i></a>
                        <a class="__complete"><i class="fa pe-none fa-check-square"></i></a>
                    </div>
                </li>

            </ul>
        </main>
    </section>

</body>

</html>
