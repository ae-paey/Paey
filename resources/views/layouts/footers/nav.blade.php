<div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted text-white">
          &copy; {{ now()->year }} <a href="{{ config('app.url') }}" class="text-white font-weight-bold ml-1">{{ config('app.name') }}</a> | <a href="https://docs.google.com/document/d/1KFZBIPrK3xLY96s2BI6RbPt3N_fmT244aqR2mQZ4ETM/edit?usp=sharing" target="_blank" class="text-white font-weight-bold ml-1">Terms of Service</a> | <a href="https://docs.google.com/document/d/1q7_-cH3s3lbPo0-20CjObyyClylVHTYsrl2ys9F9tHc/edit?usp=sharing" target="_blank" class="text-white font-weight-bold ml-1">Privacy Policy</a> | All Right Reserved
        </div>
    </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="{{ config('app.aepp_url') }}/pay" class="nav-link text-white" target="_blank">Pay</a>
            </li>
            <li class="nav-item">
              <a href="{{ config('app.aepp_url') }}/trade" class="nav-link text-white" target="_blank">Trade</a>
            </li>
        </ul>
    </div>
</div>