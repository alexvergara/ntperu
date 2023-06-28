<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('product-types.index') }}" class="nav-link {{ Request::is('product-types*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Product Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employee-types.index') }}" class="nav-link {{ Request::is('employeeTypes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Employee Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('companies.index') }}" class="nav-link {{ Request::is('companies*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Companies</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('departments.index') }}" class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Departments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Employees</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('expenses.index') }}" class="nav-link {{ Request::is('expenses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Expenses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('invoices.index') }}" class="nav-link {{ Request::is('invoices*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Invoices</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('messages.index') }}" class="nav-link {{ Request::is('messages*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Messages</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('notifications.index') }}" class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Notifications</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('orders.index') }}" class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Orders</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('products.index') }}" class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Products</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Projects</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('suppliers.index') }}" class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Suppliers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tasks.index') }}" class="nav-link {{ Request::is('tasks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tasks</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('attendances.index') }}" class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Attendances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('purchase-orders.index') }}" class="nav-link {{ Request::is('purchase-orders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Purchas Orders</p>
    </a>
</li>
