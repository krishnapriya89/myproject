<style>
    form {
        text-align: center;
        margin-top: 100px;
    }
</style>



@extends('headfoot') @section('content')
<h3>Let's signin.... </h3>
<form>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control" id="staticEmail" value="User Name" style="display: block;width: 70%;">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" style="display: block;width: 70%;" placeholder="Password"><br>

        </div>
    </div>
    <div class="form-group row">
        <a href="" style="color: black;padding-left: 40%;"><small>Forgot Password?</small></a>&nbsp;
        <button type="submit" class="btn btn-primary">Submit</button><br>
    </div>
</form>
<div class="form-group row">
    <label for="" style="padding-left: 40%;">New User?</label>
    <a href="" style="color: white;">Register Here</a>
</div>
<div class="row" style="height: 300px;"></div>
@endsection