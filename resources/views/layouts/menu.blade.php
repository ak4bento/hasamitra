<li class="nav-header">Home</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

@role('superadmin')
<li class="nav-header">Account</li>

<li class="nav-item">
    <a href="{{ route('admins.index') }}" class="nav-link {{ Request::is('admins') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Accounts Admin
        </p>
    </a>
</li>
@endrole

<li class="nav-header">Office</li>
<li class="nav-item">
    <a href="{{ route('companies.index') }}" class="nav-link {{ Request::is('companies') ? 'active' : '' }}">
        <i class="nav-icon fas fa-building"></i>
        <p>
            Companies
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('departments.index') }}" class="nav-link {{ Request::is('departments') ? 'active' : '' }}{{ Request::is('masterSchemas') ? 'active' : '' }}">
        <i class="nav-icon fas fa-archive"></i>
        <p>
            Departments
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('organizationals.index') }}" class="nav-link {{ Request::is('organizationals') ? 'active' : '' }}">
        <i class="nav-icon fas fa-certificate"></i>
        <p>
            Organizationals
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="nav-link {{ Request::is('employees') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Employees
        </p>
    </a>
</li>
<li class="nav-header">List</li>

<li
    class="nav-item 
    {{ Request::is('schemaSchedules*') ? 'menu-open' : '' }}
    {{ Request::is('shiftSchedules*') ? 'menu-open' : '' }}
    {{ Request::is('schemaLeaves*') ? 'menu-open' : '' }}">
    <a href="#"
        class="nav-link 
        {{ Request::is('schemaSchedules*') ? 'active' : '' }}
        {{ Request::is('shiftSchedules*') ? 'active' : '' }}
        {{ Request::is('schemaLeaves*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Schedule
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('schemaSchedules.index') }}" class="nav-link {{ Request::is('schemaSchedules') ? 'active' : '' }}">
                <i class="nav-icon fas fa-sticky-note"></i>
                <p>
                    Regular
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('shiftSchedules.index') }}" class="nav-link {{ Request::is('shiftSchedules') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar"></i>
                <p>
                    Non Regular
                </p>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{ route('schemaLeaves.index') }}" class="nav-link {{ Request::is('schemaLeaves') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cube"></i>
                <p>
                    Schema Leave
                </p>
            </a>
        </li> --}}
    </ul>
</li>

@role('superadmin')
<li class="nav-item">
    <a href="{{ route('salaries.index') }}" class="nav-link {{ Request::is('salaries') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calculator"></i>
        <p>
            Salaries
        </p>
    </a>
</li>
{{-- <li class="nav-item">
    <a href="{{ route('acceptSalaries.index') }}" class="nav-link {{ Request::is('acceptSalaries') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calculator"></i>
        <p>
            * Accept Salaries
        </p>
    </a>
</li> --}}
@endrole

<li class="nav-item">
    <a href="{{ route('attendances.date') }}" class="nav-link {{ Request::is('attendances') ? 'active' : '' }}">
        <i class="nav-icon fas fa-hand-paper"></i>
        <p>
            Attendances
        </p>
    </a>
</li>

<li class="nav-header">Break</li>

<li class="nav-item">
    <a href="{{ route('schemaBreaks.index') }}" class="nav-link {{ Request::is('schemaBreaks') ? 'active' : '' }}">
        <i class="nav-icon fas fa-asterisk"></i>
        <p>
            Schema Breaks
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('submissions.index') }}" class="nav-link {{ Request::is('submissions') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-word"></i>
        <p>
            Submissions
        </p>
    </a>
</li>

<li class="nav-header">Repoting</li>

<li class="nav-item">
    <a href="{{ route('reportingEmployees.index') }}" class="nav-link {{ Request::is('reportingEmployees') ? 'active' : '' }}">
        <i class="nav-icon fas fa-code"></i>
        {{-- <i class="nav-icon fas fa-file-chart-column"></i> --}}
        <p>
            Employee
        </p>
    </a>
</li>

<li class="nav-header">
    <br>
</li>
