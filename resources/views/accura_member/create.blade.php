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
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="section">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div class="from-grp">
        <form method="POST" action="{{url('store')}}">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="first_name" id="form6Example1" class="form-control"/>
                        <label class="form-label" for="form6Example1">First name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="last_name" id="form6Example2" class="form-control"/>
                        <label class="form-label" for="form6Example2">Last name</label>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        {{--                        <select name="ds_division" class="form-control">--}}
                        {{--                            <option value="volvo">Volvo</option>--}}
                        {{--                            <option value="saab">Saab</option>--}}
                        {{--                            <option value="opel">Opel</option>--}}
                        {{--                            <option value="audi">Audi</option>--}}
                        {{--                        </select>--}}
                        <select class="form-select" name="ds_division" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            @isset($ds_divisions)
                                @foreach($ds_divisions as $ds_division)
                                    <option value="{{$ds_division->id}}">{{$ds_division->division_name}}</option>
                                @endforeach
                            @endisset

                        </select>
                        {{--                        <input type="text" id="form6Example3" name="ds_division" class="form-control" />--}}
                        {{--                        <label class="form-label" for="form6Example3">DS Division</label>--}}
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="date" id="form6Example4" class="form-control" name="date_of_birth">
                        <label class="form-label" for="form6Example4">DOB</label>
                    </div>
                </div>

            </div>


            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4" name="summery"></textarea>
                <label class="form-label" for="form6Example7">Summery</label>
            </div>

            <!-- Submit button -->
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" class="btn btn-secondary">Save</button>
        </form>
    </div>
</section>

<style>
    .from-grp {
        width: 80%;
        margin: auto;
    }
</style>


<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>

<script src="index.js"></script>
</body>
</html>
