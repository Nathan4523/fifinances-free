<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon-->
  <link rel="icon" href="{{asset('images/logo/logo-ff.png')}}" type="image/x-icon">

  <title>Fifinances</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

  <!-- Bootstrap Core Css -->
  <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Waves Effect Css -->
  <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

  <!-- Calender -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />

  <!-- Data table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css" />
  <link href="{{asset('plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet" />

  <!-- Effect the select -->
  <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

  <!-- Custom Css -->
  <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/all-themes.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/main.min.css')}}" rel="stylesheet">
</head>

<body>

  @include('layouts.navbar') @yield('content')


  <!--Button float -->
  <div id="btn_floating">
    <a href="#" class="float" id="menu-share">
      <i class="material-icons">
        edit
      </i>
    </a>
    <ul>
      {{-- <li>
        <a href="#" onclick="embreve();">
          <i class="material-icons">trending_up</i>
        </a>
      </li> --}}
      <li>
        <a href="{{url('anotacoes-adicionar')}}">
          <i class="material-icons">description</i>
        </a>
      </li>
      <li>
        <a href="{{url('rendimento-adicionar')}}">
          <i class="material-icons">
            attach_money
            </i>
        </a>
      </li>

      <li>
        <a href="{{url('gastos-adicionar')}}">
          <i class="material-icons">shopping_cart</i>
        </a>
      </li>
    </ul>
  </div>
  <!--End Button Float -->

  <!-- Jquery Core Js -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

  <!-- Bootstrap Core Js -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

  <!-- Select Plugin Js -->
  <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="{{asset('plugins/node-waves/waves.js')}}"></script>

  <!-- Validation Plugin Js -->
  <script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>

  <!-- Sparkline Chart Plugin Js -->
  <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>

  <!-- Custom Js -->
  <script src="{{asset('js/admin.js')}}"></script>

  <!-- Calender -->
  <script src="{{asset('plugins/moment/moment.js')}}"></script>
  <script src="{{asset('plugins/fullcalender/fullcalender.min.js')}}"></script>
  <script src="{{asset('plugins/fullcalender/gcal.min.js')}}"></script>

  <!-- Data table -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('plugins/datatable/js/dataTables.responsive.min.js')}}"></script>

  <!-- Mask -->
  <script src="{{asset('plugins/mask-inputs/jquery.mask.min.js')}}"></script>
  <script src="{{asset('js/main.min.js')}}"></script>

</body>

</html>