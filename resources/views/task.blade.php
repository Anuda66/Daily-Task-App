
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <div class='text-center'>
            <h2>Daily Tasks</h2>
            <div class='row'>
                <div class='col-md-12'>
                
                <!-- Catch error of data inputs -->
                @foreach($errors->all() as $error)
                    <div class='alert alert-danger' role='alert'>
                        {{ $error }}
                    </div>
                @endforeach

                <form action="/saveTask" method="post">
                {{csrf_field()}}
                     <!-- craete route of action -->
                     <!-- Security methode -->
                    <input type='text' class='form-control' name='task' placeholder='Enter task'><br>
                    <input type='submit' class='btn btn-primary' value='SAVE'>
                    <input type='button' class='btn btn-warning' value='CLEAR'>
                </form>
                <br>
                <table class='table table-dark'>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    <tr>
                        <td>1</td>
                        <td>I have lern Laravel</td>
                        <td>Not yet</td>
                    </tr>
                </table>
                <br>
                
                </div>
            </div>

        </div>
    </div>
</body>
</html>
