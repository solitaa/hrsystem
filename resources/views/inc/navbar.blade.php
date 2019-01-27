<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" id="subnav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/calendar">Calendar</a></li>
            <li class="nav-item"><a class="nav-link" href="/employees">Employees</a></li>
            <li class="nav-item"><a class="nav-link" href="/resources">Resources</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('company.details')}}">Company</a></li>
            <li class="nav-item"><a class="nav-link" href="/settings">Settings</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('user.details')}}">Profile</a></li>
        </ul>
    </div>
</nav>