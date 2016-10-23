@extends('master')

@push('head')
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
    ]); ?>
  </script>
@endpush

@section('body')
  
  @include('dashboard::layouts.parts.navbar')
  
  <div class="container">
    <div class="row">
      @yield('content')
    </div>
  </div>

@endsection