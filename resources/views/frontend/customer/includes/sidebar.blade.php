<div class="col-30">
    <aside class="services__sidebar">
        <div class="sidebar__widget sidebar__widget-two">
            <div class="sidebar__cat-list-two">
                <ul class="list-wrap">
                    <li><a href="{{ route('customer.dashboard')}}"> Dashboard<i class="flaticon-arrow-button"></i> </a></li>
                    <li class="{{ Route::is('customer.application') ? "custom-active": ""}}"><a href="{{ route('customer.application')}}">Applications<i class="flaticon-arrow-button"></i> </a></li>
                    <li><a href="{{ route('customer.payments')}}">Payments<i class="flaticon-arrow-button"></i> </a></li>
                </ul>
            </div>
        </div>
    </aside>
</div>