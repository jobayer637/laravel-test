<div class="user-info">
    <div class="image">
        <img src="{{asset('assets/backend/images/user.png')}}" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
        <div class="email">{{Auth::user()->email}}</div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                <li role="separator" class="divider"></li>
                <li>
                    <a onclick="handleLogout()">
                        <i class="material-icons">input</i>
                        Sign Out
                    </a>
                    <form class="d-none" id="logoutFormId" action="{{route('logout')}}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('js')
<script>
    const handleLogout = () => {
        $("#logoutFormId").submit()
    }
</script>
@endpush