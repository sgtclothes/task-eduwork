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
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  @include('includes.navbar')

  @include('includes.sidebar')

  <div class="content-wrapper">
    {{-- @include('includes.content') --}}
    @yield('content')
  </div>

  @include('includes.footer')

</div>

@include('includes.script')
@stack('script')
</body>
</html>
