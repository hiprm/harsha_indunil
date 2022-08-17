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
        <form method="POST" action="{{url('update')}}">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" value="{{$member[0]['first_name']}}" name="first_name" id="form6Example1" class="form-control"/>
                        <label class="form-label" for="form6Example1">First name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="last_name" value="{{$member[0]['last_name']}}" id="form6Example2" class="form-control"/>
                        <label class="form-label" for="form6Example2">Last name</label>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <select class="form-select" name="ds_division" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            @isset($ds_divisions)
                                @foreach($ds_divisions as $ds_division)
                                    @if((int)$ds_division->id=== (int)$member[0]['ds_division_id'])
                                        <option value="{{$ds_division->id}}" selected>{{$ds_division->division_name}}</option>

                                    @else
                                        <option value="{{$ds_division->id}}">{{$ds_division->division_name}}</option>

                                    @endif
                                @endforeach
                            @endisset

                        </select>
                        {{--                        <input type="text" id="form6Example3" name="ds_division" class="form-control" />--}}
                        {{--                        <label class="form-label" for="form6Example3">DS Division</label>--}}
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="" for="form6Example4">DOB</label>
                        <input type="date" id="form6Example4" value="{{$member[0]['dob']}}" class="" name="date_of_birth">
                        <input type="hidden" id="form6Example4" value="{{$member[0]['id']}}" class="" name="id">
                    </div>
                </div>

            </div>


            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4" name="summery">
                    {{$member[0]['summery']}}
                </textarea>
                <label class="form-label" for="form6Example7">Summery</label>
            </div>

            <!-- Submit button -->
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" class="btn btn-secondary">update</button>
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

</body>
</html>
