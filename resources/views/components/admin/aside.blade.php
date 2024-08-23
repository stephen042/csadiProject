<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('all_projects')}}">
                        <i class="bi bi-circle"></i><span>All Projects</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('create_project')}}">
                        <i class="bi bi-circle"></i><span>Create New Project</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Team members</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="team-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('all_members')}}">
                        <i class="bi bi-circle"></i><span>All Team Members</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('create_member')}}">
                        <i class="bi bi-circle"></i><span>Create New Team Member</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <hr>
        <li class="nav-item">
            <div class="nav-link">
                {{-- sign out --}}
                <livewire:admin.logout />
            </div>

        </li>
        <!-- End Dashboard Nav -->

    </ul>

</aside>