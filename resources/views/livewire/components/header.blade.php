<header class="c-header c-header-light c-header-fixed c-header-with-subheader " style="background-color: #121316;border-bottom-width: 0px;">
    <button class="mr-auto c-header-toggler c-class-toggler d-lg-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button>
    <button class="ml-3 c-header-toggler c-class-toggler d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
    <ul class="ml-auto mr-4 c-header-nav">

        <li class="text-gray-400 c-header-nav-item">
            {{ Auth::user()->name }}
        </li>
    </ul>
</header>
