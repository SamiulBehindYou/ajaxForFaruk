<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Dropdown</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card mt-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">Data showing</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <select name="dropdown" id="dropdown" class="form-control"></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){


            $.ajax({
                type:"get",
                url:"{{ route('get.data') }}",
                success:function(data){
                    console.log(data.data);
                    console.log(data.status);
                    let users = data.data;
                    users.forEach(function(user){
                        $('#dropdown').append(`<option value="`+user.id+`">`+user.name+`</option>`);

                    });

                },
            });


        });
    </script>

</body>
</html>
