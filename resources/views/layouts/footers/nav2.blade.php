<div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted text-primary">
          Copyright &copy; {{ now()->year }} <a href="{{ config('app.url') }}" class="text-primary font-weight-bold ml-1">{{ config('app.name') }}</a>. All Right Reserved
        </div>
    </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="{{ config('app.aepp_url') }}/pay" class="nav-link text-primary" target="_blank">Pay</a>
            </li>
            <li class="nav-item">
              <a href="{{ config('app.aepp_url') }}/trade" class="nav-link text-primary" target="_blank">Trade</a>
            </li>
        </ul>
    </div>
</div>