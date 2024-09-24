@extends('layouts.admin')
@section('header', 'Dashboard')
@section('content')

<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-Warning">
            <div class="inner">
                <h3>{{ $total_buku }}</h3>
                <p>Total Buku</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="{{ url('book') }}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div> 
    <div class="col-lg-3 col-6">
        <div class="small-box bg-Success">
            <div class="inner">
                <h3>{{ $total_peminjaman }}</h3>
                <p>Total Peminjaman</p>
            </div>
            <div class="icon">
                <i class="fa fa-address-book"></i>
            </div>
            <a href="{{ url('book') }}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div> 
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $total_anggota }}</h3>
                <p>Total Anggota</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="{{ url('book') }}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div> 
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $total_penerbit }}</h3>
                <p>Total Penerbit</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="{{ url('book') }}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row mx-auto">
<div class="mr-1">
    <!-- PIE CHART -->
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Data Author</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <canvas id="pieChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 495px;"></canvas>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>

    <!-- DONUT CHART -->
    <div class="ml-1">
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Data Publisher</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <canvas id="donutChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 495px;"></canvas>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<div class="row ml-1 mr-1">
    <!-- BAR CHART -->
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data Transaction</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="barChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 495px;"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


</div>
@endsection
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript">

    var label_donut = {!! json_encode($label_donut) !!};
    var data_donut = {!! json_encode($data_donut) !!};
    var label_pie = {!! json_encode($label_pie) !!};
    var data_pie = {!! json_encode($data_pie) !!};
    var data_bar = {!! json_encode($data_bar) !!};
    
    $(function() {



        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: label_donut,
            datasets: [{
                data: data_donut,
                backgroundColor: [
    '#FF5733',
    '#33FF57',
    '#3357FF',
    '#F3FF33',
    '#FF33A8',
    '#33FFF8',
    '#FF8C33',
    '#8C33FF',
    '#FF3333',
    '#33FF8C',
    '#FFD833',
    '#FF3333',
    '#33BFFF',
    '#FF5733',
    '#8FFF33',
    '#33FF57'
],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: label_pie,
            datasets: [{
                data: data_pie,
                backgroundColor: [
    '#FF5733',
    '#33FF57',
    '#3357FF',
    '#F3FF33',
    '#FF33A8',
    '#33FFF8',
    '#FF8C33',
    '#8C33FF',
    '#FF3333',
    '#33FF8C',
    '#FFD833',
    '#FF3333',
    '#33BFFF',
    '#FF5733',
    '#8FFF33',
    '#33FF57'
],
            }]
        }
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus', 'September', 'October', 'November', 'December'],
            datasets: data_bar
        }

        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        // var temp0 = areaChartData.datasets[0]
        // var temp1 = areaChartData.datasets[1]
        // barChartData.datasets[0] = temp1
        // barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
    })
</script>