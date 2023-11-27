@extends('layouts.admin')
@section('header', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $total_buku }}</h3>

                    <p>Total Buku</p>
                </div>
                <div class="icon">
                    <i class="ion ion-book"></i>
                </div>
                <a href="{{ url('books') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $total_member }}</h3>

                    <p>Total Member</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ url('members') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $total_publisher }}</h3>

                    <p>Data Publisher</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ url('publishers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $total_peminjaman }}</h3>

                    <p>Data Peminjaman</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ url('peminjaman') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection

@section('js')
<script type="text/javascript">

    var label_donut = '{!! json_encode($label_donut) !!}';
    var data_donut = '{!! json_encode($data_donut) !!}';

    $(function(){
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: JSON.parse(label_donut),
            datasets: [
                {
                    data: JSON.parse(data_donut),
                    backgroundColor: ['#f56954','#00a65a','#f39c12','#00c0ef','#3c8dbc','#d2d6de']
                }
            ]
        }
        var donutOptions = {
            maintainAspectRatio : false,
            responsive : true,
        }
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    })
</script>
@endsection
