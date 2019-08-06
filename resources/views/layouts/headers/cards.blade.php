@if (auth()->user()->id === 1)
  @include('layouts.headers.cards.admin')
@else
  @include('layouts.headers.cards.user')
@endif