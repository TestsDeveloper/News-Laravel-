@include('admin.body.header')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin.body.navbar')
@include("admin.body.sidebar")

  <div class="content-wrapper">
        @yield('content')
  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
@include("admin.body.footer")
