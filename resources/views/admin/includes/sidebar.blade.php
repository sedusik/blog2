<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-blog" style="color: #B197FC;"></i>
                    <p style="color: #B197FC;">
                        Блог
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главное меню
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tools" style="color: #e46825;"></i>
                    <p style="color: #e46825;">
                        Панель админа
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users" style="color: #74C0FC;"></i>
                    <p style="color: #74C0FC;">
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon far fa-clipboard" style="color: #16B13D;"></i>
                    <p style="color: #16B13D;">
                        Посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-list" style="color: #ffc61b;"></i>
                    <p style="color: #ffc61b;">
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tags" style="color: #ED1212;"></i>
                    <p style="color: #ED1212;">
                        Тэги
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
