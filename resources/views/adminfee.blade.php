@extends('headfoot') @section('content')
<style>
    button {
        margin-left: 200px;
    }
</style>

<div class="row" style="padding-top: 50px;">
    <div class="col-lg-4">
        <button class="btn btn-primary" style="margin-left: 10px;" id="btn1">Admission Fee</button>
    </div>
    <div class="col-lg-4">
        <button class="btn btn-primary" style="margin-left: 10px;" id="btn2">Semester Fee </button>
    </div>
    <div class="col-lg-4">
        <button class="btn btn-primary" style="margin-left: 10px;" id="btn3">For Office </button>
    </div>
</div>
<div class="row" style="padding-top: 50px;">
    <div class="col-lg-4">
        <table class="table table-bordered" style="display: none;" id="tab1">
            <thead>
                <tr>
                    <th scope="col" colspan="4" style="text-align: center;">Admission Fees</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td colspan="2"> Admission fee</td>
                    <td>2000</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td colspan="2"> Bulding Fund</td>
                    <td>10,000</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2"> Education Fund</td>
                    <td>500</td>

                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td colspan="2"> Security(Refundable)</td>
                    <td>10,0000</td>

                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td colspan="2"> Total Annnual Expences</td>
                    <td>22,500</td>

                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-4">
        <table class="table table-bordered" id="tab2" style="display: none;">
            <thead>
                <tr>
                    <th scope="col" colspan="4" style="text-align: center;">Semester fees</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td colspan="2">Sem fee</td>
                    <td>7000</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td colspan="2">Exam fee</td>
                    <td>2000</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Registration fee</td>
                    <td>500</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Total</td>
                    <td>9500</td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="col-lg-4">
        <table class="table table-bordered" style="background-color:transparent; display: none;" id="tab3">
            <thead>
                <tr>
                    <th scope="col" colspan="4" style="text-align: center;">Students List</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" colspan="2">Department</th>
                    <td style="color: darkgreen;"><b> Paid</b></td>
                    <td style="color: darkred;"><b> Unpaid</b></td>

                </tr>
                <tr>
                    <th scope="row" colspan="2"></th>
                    <td>Jacob</td>
                    <td>Thornton</td>

                </tr>
                <tr>
                    <th scope="row"></th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    $("#btn1").click(function() {
        $("#tab1").show();

    })
    $("#btn2").click(function() {
        $('#tab2').show();
    })
    $("#btn3").click(function() {
        $('#tab3').show();
    })
</script>
<div class="row" style="height: 200px;"></div>
@endsection