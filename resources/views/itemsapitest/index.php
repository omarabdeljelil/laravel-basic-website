<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend test for the items API</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Frontend test for the items API</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Home</a>
        <a class="p-2 text-dark" href="/api/items">Backend</a>
    </nav>
</div>
<div class="container">
    <h1>Add Item</h1>
    <form id="itemForm">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" id="body" class="form-control">
        </div>
        <input type="submit" value="Submit" class="btn btn-info">
    </form>
    <hr>
    <ul id="items" class="list-group"></ul>
</div>
<script
        src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        getItems();

        // Submit event
        $('#itemForm').on('submit', function (e) {
            e.preventDefault();

            let title = $('#title').val();
            let body = $('#body').val();
            addItem(title, body);
        })

        // delete item
        $('body').on('click','.delete-link',function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            deleteItem(id);
        })
        // delete using API
        function deleteItem(id) {
            $.ajax({
                method: 'DELETE',
                url: 'http://127.0.0.1:8000/api/items/'+id
            }).done(function (item) {
                //alert('item #' +id + ' deleted')
                $('#items').empty();
                getItems();
            })
        }
        // insert items using API
        function addItem(title, body) {
            $.ajax({
                method: 'POST',
                url: 'http://127.0.0.1:8000/api/items',
                data: {title: title, body: body}
            }).done(function (item) {
                alert('item #' + item.id + ' added')
                // location.reload();
                $('#items').empty();
                getItems();
            })
        }

        // get items from the API
        function getItems() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/items'
            }).done(function (items) {
                let output = "";
                $.each(items, function (key, item) {
                    output += `
                        <li class="list-group-item">
                            <strong>${item.title}: </strong> ${item.body} <a href="#" class="btn btn-danger float-right delete-link" data-id = "${item.id}"> delete</a>
                        </li>
                    `;
                })
                $('#items').append(output);
            });
        }
    })
</script>
</body>
</html>