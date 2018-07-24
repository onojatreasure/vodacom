
   <div class = "side-menu"> 
       <aside class="menu m-t-30 m-l-10">
    
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}">Dashboard</a>
            </li>
        </ul>

        <ul class="menu-list">
            <li><a href="{{route('users.index')}}">Manage Users</a></li>
            <li><a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
            <li>
                <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
                <ul>
                  <li><a href="{{route('roles.index')}}">Roles</a></li>
                  <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
              </li></li>
        </ul>
      
    </aside>
</div>