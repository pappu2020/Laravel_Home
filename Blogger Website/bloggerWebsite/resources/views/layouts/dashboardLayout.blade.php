<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author || Dashboard</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/vendors/core/core.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_asset/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('dashboard_asset/images/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="https://www.logodesign.net/image/hand-pencil-on-color-splashes-2784ld" class="sidebar-brand">
                   <img width="50px" height="50px" src="{{asset("dashboard_asset/images/logo.png")}}" alt="">
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>


                    @can('show_user_list')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false"
                                aria-controls="advancedUI">
                                <i class="link-icon" data-feather="anchor"></i>
                                <span class="link-title">Users</span>
                                <i class="link-arrow" data-feather="chevron-down"></i>
                            </a>
                            <div class="collapse" id="user">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('userListPage') }}" class="nav-link">Users List</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{ route('generalUserList') }}" class="nav-link">General Users List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('trashUserPage') }}" class="nav-link">Trash Bin</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    @endcan


                    @can('category_add')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#category" role="button" aria-expanded="false"
                                aria-controls="advancedUI">
                                <i class="link-icon" data-feather="anchor"></i>
                                <span class="link-title">Category</span>
                                <i class="link-arrow" data-feather="chevron-down"></i>
                            </a>
                            <div class="collapse" id="category">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('categoryPage') }}" class="nav-link">Add Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Trash Bin</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    @endcan


                    @can('tag_add')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#tag" role="button" aria-expanded="false"
                                aria-controls="advancedUI">
                                <i class="link-icon" data-feather="anchor"></i>
                                <span class="link-title">Tag</span>
                                <i class="link-arrow" data-feather="chevron-down"></i>
                            </a>
                            <div class="collapse" id="tag">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('tagPage') }}" class="nav-link">Add Tag</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Trash Bin</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    @endcan



                    @can('role add')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#role" role="button"
                                aria-expanded="false" aria-controls="advancedUI">
                                <i class="link-icon" data-feather="anchor"></i>
                                <span class="link-title">Role Management</span>
                                <i class="link-arrow" data-feather="chevron-down"></i>
                            </a>
                            <div class="collapse" id="role">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('rolePage') }}" class="nav-link">Add Role</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Trash Bin</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    @endcan


                    @can("blogger_post_management")
                    
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#bloggerPost" role="button"
                            aria-expanded="false" aria-controls="advancedUI">
                            <i class="link-icon" data-feather="anchor"></i>
                            <span class="link-title">Blogger Post Management</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="bloggerPost">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route("uploadedbloggerPostPage")}}" class="nav-link">Blogger Post</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Trash Bin</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    @endcan



                    @can('can post')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#addPost" role="button"
                                aria-expanded="false" aria-controls="advancedUI">
                                <i class="link-icon" data-feather="anchor"></i>
                                <span class="link-title">Blogger Post</span>
                                <i class="link-arrow" data-feather="chevron-down"></i>
                            </a>
                            <div class="collapse" id="addPost">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('addPostPage') }}" class="nav-link">Add Post</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('myPostPage') }}" class="nav-link">My Post</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{ route('myDeclinedPostPage') }}" class="nav-link">My Declined Post</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{ route('myPendingPostPage') }}" class="nav-link">My Pending Post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('myPostTrashBin') }}" class="nav-link">Trash Bin</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    @endcan


                </ul>
            </div>
        </nav>
       

        <div class="page-wrapper">

            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                   
                    <ul class="navbar-nav">
                       
                        @auth
                               
                        
                        
                        <li class="nav-item dropdown nav-profile">
                           
                          
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('uploads/userProfile/') }}/{{ Auth::User()->photo }}"
                                    alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="{{ asset('uploads/userProfile/') }}/{{ Auth::User()->photo }}"
                                            alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ Auth::User()->name }}</p>
                                        <p class="email text-muted mb-3">{{ Auth::User()->email }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="{{ route('userProfilePage') }}" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                         @endauth
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                @yield('content')

            </div>

            <!-- partial:../../partials/_footer.html -->
            {{-- <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com"
                        target="_blank">NobleUI</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                        class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer> --}}
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('dashboard_asset/vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dashboard_asset/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dashboard_asset/js/template.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    @if (session('userProfileUpdate'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Update Success!!'
            })
        </script>
    @endif


    @if (session('CategoryUpdate'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Update Success!!'
            })
        </script>
    @endif


    @if (session('CategoryinsertSuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Successfully add to database!!'
            })
        </script>
    @endif


    @if (session('insertSuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Successfully add to database!!'
            })
        </script>
    @endif  
    
    @if (session('insertPostSuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Your post created successfully!!.',
            })
        </script>
    @endif

    @if (session('deleteSuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Deleted!!'
            })
        </script>
    @endif


    @if (session('updateSuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Updated!!'
            })
        </script>
    @endif

    @if (session('restoreSuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Your post restore successfully!!'
            })
        </script>
    @endif


    @if (session('New_pass_update_success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Your post restore successfully!!'
            })
        </script>
    @endif





    @yield('javascriptSection')
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
</body>

</html>
