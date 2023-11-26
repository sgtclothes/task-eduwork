@extends('layouts.admin')
@section('header','Dashboard')

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
        <a href="{{ url('Book')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $total_anggota }}</h3>
            <p>Total Anggota</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ url('Member') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $total_penerbit }}</h3>
            <p>Data Penerbit</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ url('Publisher') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
        <a href="{{ url('Transaction') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- DONUT CHART -->
    <div class="col-lg-6">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Grafik Penerbit</h3>

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
            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        <!-- /.card-body -->
        </div>
    </div>
      <!-- /.card -->
    <!-- ./col -->

    <!-- BAR CHART -->
    <div class="col-lg-6">
        <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Grafik Peminjaman</h3>

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
            <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
        </div>
        <!-- /.card-body -->
        </div>
    </div>

    <!-- AREA CHART -->
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Area Chart</h3>

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
            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

</div>
@endsection
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
{{-- <script src="{{ asset('assets/dist/js/demo.js') }}"></script> --}}
<script type="text/javascript">

    var label_donut = '{!! json_encode($label_donut) !!}';
    var data_donut = '{!! json_encode($data_donut) !!}';
    var data_bar = '{!! json_encode($data_bar) !!}';
    var labels = '{!! json_encode($labels) !!}';
    var data = '{!! json_encode($data) !!}';

$(function ()  {

  //DONUT CHART//
  //Get context with jquery - using  jquery get() method
  var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
  var donutData        = {
    labels: JSON.parse(label_donut),
    datasets: [
      {
        data: JSON.parse(data_donut),
        backgroundColor : ['#f56954','#00a65a','#f39c12','#00c0ef','#3c8dbc','#d2d6de'],
      }
    ]
  }
    var donutOptions = {
    maintainAspecRatio : false,
    responsive : true,
    }
    //create pie or douhnut chart
    // you can switch between pie and douhnut using the method below:
    new Chart(donutChartCanvas,{
    type: 'doughnut',
    data: donutData,
    options: donutOptions
    })

    // BAR CHART

    var areaChartData = {
    labels  : ['January','Febuary','March','April','Juny','July','Agustus','September','Oktober','November','Desember'],
    datasets: JSON.parse(data_bar)
    }
    console.log(data_bar)

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData  = $.extend(true, {}, areaChartData)
    //   var temp0 = areaChartData.datasets[0]
    //   var temp1 = areaChartData.datasets[1]
    //   barChartData.datasets[0] = temp1
    //   barChartData.datasets[1] = temp0

    var barChartOptions = {
    responsive             : true,
    maintainAspecRatio     : false,
    datasetfill            : false
    }

    new Chart(barChartCanvas, {
    type:'bar',
    data: barChartData,
    options: barChartOptions
    })

    //stacked bar chart

//     var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
//     var stackedBarChartData = $.extend(true, {}, barChartData)

//     var stackedBarChartOptions = {
//     responsive              : true,
//     maintainAspecRatio  : false,
//     scales: {
//       xAxes: [{
//         stacked: true,
//       }],
//       yAxes: [{
//         stacked:true
//       }]
//     }
//   }

//     new Chart(stackedBarChartCanvas, {
//         type: 'bar',
//         data: stackedBarChartData,
//         options: stackedBarChartOptions
//     })

    //Area chart
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    console.log(labels);
    console.log(data);

    var areaChartData2 = {
    //   labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    labels  : JSON.parse(labels),
    datasets: [
        {
          label: "Price",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data:data
        }
      ]
    }

      var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
      display: false
      },
      scales: {
      xAxes: [{
        gridLines : {
          display : true,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }


    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
    type: 'line',
    data: areaChartData2,
    options: areaChartOptions
    })
})
</script>

