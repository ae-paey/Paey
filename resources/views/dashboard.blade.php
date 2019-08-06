@if (auth()->user()->id === 1)
  @include('dashboard.admin')
@else
  @include('dashboard.user')
@endif