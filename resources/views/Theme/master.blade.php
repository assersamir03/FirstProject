<!DOCTYPE html>
<html lang="en">


@include('Theme.partials.head')


<body>
  
  @include('Theme.partials.header')
  
  
  @yield('content')

  @include('Theme.partials.footer')

  @include('Theme.partials.scripts')
</body>
</html>