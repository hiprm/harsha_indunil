<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accura Exam</title>
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>

<section class="section">
    <div>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Last Name" title="Type in a last name">
            <a href="/create" type="button" class="btn btn-success">Add New</a>

            <table id="myTable" class="accura-table table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date Of Birth</th>
                <th>DS Division</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @isset($accura_members)
                @foreach($accura_members as $accura_member)
                    <tr>
                        <td>{{$accura_member->first_name}}</td>
                        <td>{{$accura_member->last_name}}
                            @if( ctype_upper($accura_member->summery) === true)
                                {{$accura_member->summery}}
                            @endif
                        </td>
                        <td>{{$accura_member->dob}}</td>
                        <td>{{$accura_member['ds_divisions']['division_name']}}</td>
                        <td>
                            <a type="button" href="{{ route('edit',$accura_member->id) }}" class="btn btn-success">Edit</a>
                            <a type="button" href="{{ route('delete',$accura_member->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endisset

            <!-- and so on... -->
            </tbody>
        </table>
    </div>
</section>




<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<script src="index.js"></script>
</body>
</html>
