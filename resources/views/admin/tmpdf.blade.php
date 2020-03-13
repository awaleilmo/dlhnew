<html>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <form id="contact_us" method="post" action="{{url('/cpelap')}} " style="background-color: #0e2e42">
        @csrf
        <input name="dok" type="hidden" value="{{$s->dokling}}">
        <input name="userid" type="hidden" value="{{$s->userId}}">
        <input name="id" type="hidden" value="{{$s->id}}">
        <div class="container" >
            <div class="row">

            <br>
                <div class="col-md-2"><h1 style="color: white">{{$s->dokling}}</h1></div>
            <div class="col-md-6">
                <textarea style="width: 100%; height: 10%; border-radius: 5px" placeholder="Keterangan" name="ket" required></textarea>
                <br>
                <br>
            </div>
            <div class="col-md-4">
            <div class="btn-group">
                <input type="submit" name="sub" class="btn btn-success float-left" value="Setuju">
                <input type="submit" name="tol" class="btn btn-danger float-left" value="Tolak">
            </div>
            </div>
            </div>
        </div>

        <embed height="83%" width="100%" src="../upload/dokir/{{$s->file}}">
    </form>

</body>
</html>
