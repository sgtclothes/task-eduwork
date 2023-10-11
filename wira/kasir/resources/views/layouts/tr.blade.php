<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  @include('includes.style')
  @stack('style')
  
  
  @livewireStyles
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  @include('includes.navbar')

  @include('includes.sidebar')

  <div class="content-wrapper">
    @if (request()->is('transaction-product'))
    <livewire:transaction /> 
    @else
    
    <livewire:transaction-detail /> 
    @endif

  </div>
  
  @include('includes.footer')

</div>

@include('includes.script')
@stack('script')
@livewireScripts
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script>
       $(document).ready( function () {
            $('#datatable').DataTable({
                "columnDefs": [
                { "width": "25%", "targets": 0 },
                { "width": "25%", "targets": 1 },
                { "width": "25%", "targets": 2 },
              
            ]
            });
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('showModal', () => {
          $('#showModal').modal('show')
        });

    </script>
</body>
</html>
