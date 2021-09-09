@extends('headfoot') @section('content')
<style>
    ul li:hover {
        color: red;
    }
</style>

<div class="row" style="padding-top: 50px;">
    <div class="col-lg-3">
        <img src="{{url('college images/look.png')}}" alt="" style="height: 200px;">
    </div>

    <div class="col-lg-8" id="div1" style="display: none;">

        <ul class="list-group">
            <li class="list-group-item" style="text-align: center;font-size: 20px;font-family: monospace;color: red;">Announcements</li>

            <li class="list-group-item list-group-item-primary">1st semester BCA exam will be commenced on 20 th january 2021</li>
            <li class="list-group-item list-group-item-secondary">Last semester BA english Examintion result published</li>
            <li class="list-group-item list-group-item-success">Last semester BBA graduation ceremony wii be conducted on 30th december 2021</li>
            <li class="list-group-item list-group-item-danger">3rd semester B.Sc computer science examination held on 4th july 2021</li>
            <li class="list-group-item list-group-item-warning">1 st semester BBA classes will be started on 1 st may 2021</li>
            <li class="list-group-item list-group-item-info">1st semester B A English classes will be started on 3rd may 2021</li>
            <li class="list-group-item list-group-item-light">4th sem BSc Computer science result will be published soon</li>
            <li class="list-group-item list-group-item-dark">5th semester BCA examination will be commenced on 30 th july 2021</li>
        </ul>
    </div>

</div>
<script>
    $(document).ready(function() {
        $('#div1').slideDown(3000);
    })
</script>
<div class="row" style="height: 200px;"></div>
@endsection