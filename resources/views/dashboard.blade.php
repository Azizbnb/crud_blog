@if(Auth::user()->role->libelle =='admin')
    @include('roles.admin')
@elsif(Auth::user()->role->libelle =='trainer')
    @include('roles.trainer')
@elsif(Auth::user()->role->libelle =='user')
    @include('roles.user')
@endif
