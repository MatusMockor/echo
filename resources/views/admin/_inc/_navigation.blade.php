<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
               aria-controls="ui-basic">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('posts.index')}}">Show posts</a></li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('posts.create')}}">Create post</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="collapse" href="#ui-teams" aria-expanded="false"
               aria-controls="ui-teams">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Teams</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-teams">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('teams.index')}}">Show teams</a></li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('teams.create')}}">Create team</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>