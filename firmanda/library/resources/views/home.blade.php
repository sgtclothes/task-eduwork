@extends('layouts.admin')
@section('tittle', 'homePage')
@section('header')
    home
@endsection
@section('css')
@endsection
@section('content')
    <div id="controller">
        <div class="container-fluid">
            <div class="row">
                {{-- box 1 --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                {{ $member_total }}
                            </h3>

                            <p>total anggota</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{-- box 2 --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                {{ $book_total }}
                            </h3>

                            <p>total buku</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                {{-- box 3 --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                {{ $author_total }}
                            </h3>

                            <p>total penerbit</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                {{-- box 4 --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                {{ $transaction_total }}
                            </h3>

                            <p>total peminjaman</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

            <!-- DONUT CHART -->
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Donut Chart</h3>

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
                    <canvas id="donutChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- BAR CHART -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Bar Chart</h3>

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
                        <canvas id="barChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>

    </div>
@endsection
@section('js')
    <!-- jQuery -->
    <script src={{ asset('assets/plugins/jquery/jquery.min.js') }}></script>
    <!-- ChartJS -->
    <script src={{ asset('assets/plugins/chart.js/Chart.min.js') }}></script>
    <script>
        // fungsi untuk menghasilkan warna acak
        function generateColors(numColors) {
            const colors = [];
            for (let i = 0; i < numColors; i++) {

                const color = `hsl(${Math.floor(Math.random() * 360)}, 70%, 60%)`;
                colors.push(color);
            }
            return colors;
        }
        var label_donut = `{!! json_encode($label_donut) !!}`;
        var data_donut = `{!! json_encode($data_donut) !!}`;
        $(function() {


            //-------------
            //- DONUT CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
            var donutData = {
                labels: JSON.parse(label_donut),
                datasets: [{
                    data: JSON.parse(data_donut),
                    backgroundColor: generateColors(JSON.parse(label_donut).length),
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

            var data_bar = '{!! json_encode ($data_bar) !!}';

            //-------------
            //- BAR CHART -
            //-------------
            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', "October", "November", "December"],
                datasets: JSON.parse(data_bar),
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
@endsection
