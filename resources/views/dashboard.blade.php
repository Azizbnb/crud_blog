@if(Auth::user()->role->libelle =='Admin');
    @include('roles.admin')
@elseif(Auth::user()->role->libelle =='Trainer');
    @include('roles.trainer')
@elseif(Auth::user()->role->libelle =='User');
    @include('roles.user')
@endif


