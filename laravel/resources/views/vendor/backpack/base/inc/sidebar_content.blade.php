{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="lab la-gitlab"></i></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('visibility') }}"><i class="lab la-mailchimp"></i></i> Visibilities</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('posts') }}"><i class="las la-poo"></i></i> Posts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('places') }}"><i class="las la-piggy-bank"></i></i> Places</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('posts') }}"><i class="nav-icon la la-question"></i> Posts</a></li> -->

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>