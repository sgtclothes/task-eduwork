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
  <style>
    html, body {
        background-color: rgb(233, 236, 239)
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    @yield('content')
 
@include('includes.script')
</body>
</html>
