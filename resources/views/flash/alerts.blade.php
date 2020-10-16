
@if(session('success'))
    <div class="alert_success">
        <p class="success_parag">{{session('success')}}</p>
    </div>
@endif


@if(session('warning'))
    <div class="alert_warning">
        <p class="warning_parag">{{session('warning')}}</p>
    </div>
@endif

