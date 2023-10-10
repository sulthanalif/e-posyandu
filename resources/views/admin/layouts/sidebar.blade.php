<div class="sidebar">
    <a href="#" class="logo">
        <i class='bx bx-clinic' ></i>
        <div class="logo-name"><span>E</span> Posyandu</div>
    </a>
    <ul class="side-menu">
        <li class="{{ ($page == 'Dashboard')? 'active' : '' }}"><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
        <li class="{{ ($page == 'Jadwal')? 'active' : '' }}"><a href="#"><i class='bx bxs-calendar'></i>Jadwal</a></li>
        <li class="{{ ($page == 'Petugas')? 'active' : '' }}"><a href="#"><i class='bx bxs-user-badge'></i>Petugas</a></li>
        <li class="{{ ($page == '')? 'active' : '' }}"><a href="#"><i class='bx bxs-news'></i>Artikel</a></li>
        <li class="{{ ($page == '')? 'active' : '' }}"><a href="#"><i class='bx bx-group'></i>Users</a></li>
        <li class="{{ ($page == '')? 'active' : '' }}"><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#" class="logout">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>
        </li>
    </ul>
</div>