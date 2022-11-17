<div id="left-sidebar" class="sidebar" style="background-color: #a4c5a9;">
    <div class="sidebar-scroll">
        <div class="row user-account">
            <div class="col-4 p-0">
                <img src="assets/admin/images/man.png" class="rounded-circle user-photo" alt="Admin Picture">
            </div>

            <div class="col-8 p-0">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="user-name" ><strong>Shanjoy sutradhar</strong></a>
            </div>

        </div>

        <!-- Tab panes -->
        <div class="p-l-0 p-r-0">
            <nav class="sidebar-nav">
                <ul class="main-menu metismenu">
                    <li><a href="action.php?admin=home"><i class="icon-grid"></i><span>Dashboard</span></a></li>
                    <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-picture"></i><span>Banner</span> </a>
                        <ul>
                            <li><a href="#">All Banners</a></li>
                            <li><a href="#">Add Banner</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-sitemap"></i><span>Category</span> </a>
                        <ul>
                            <li><a href="{{route('category.index')}}">All Categories</a></li>
                            <li><a href="{{route('category.create')}}">Add Category</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-briefcase"></i><span>Sports Item</span> </a>
                        <ul>
                            <li><a href="{{route('blog.index')}}">All Blogs</a></li>
                            <li><a href="{{route('blog.create')}}">Add Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-people"></i><span>User Management</span> </a>
                        <ul>
                            <li><a href="#">All Users</a></li>
                            <li><a href="#">Add Users</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-newspaper"></i><span>Comment Management</span> </a>
                        <ul>
                            <li><a href="#">All comment</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

