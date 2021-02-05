<ul class="nav nav-pills">
    <li class="nav-item"><a href="{{ url('/admin')}}" class="nav-item nav-link {{ Route::is('admin.general') ? 'active' : '' }}">Genel</a></li>
    <li class="nav-item"><a href="{{ url('/admin/users')}}" class="nav-item nav-link {{ Route::is('admin.users') | Route::is('deleted.users') ? 'active' : '' }}">Üyeler</a></li>
    <li class="nav-item"><a href="{{ url('/admin/applications')}}" class="nav-item nav-link {{ Route::is('admin.applications')  | Route::is ('admin.approved-applications') | Route::is ('admin.rejected-applications') | Route::is ('admin.deleted-applications')  ? 'active' : '' }}">Başvurular</a></li>
    <li class="nav-item"><a href="{{ url('/admin/gyms')}}" class="nav-item nav-link {{ Route::is('admin.gyms') ? 'active' : '' }}">Salonlar</a></li>
</ul>

<br /><br />
