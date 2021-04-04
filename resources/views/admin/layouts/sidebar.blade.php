  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{url('/')}}/bower_components/admin-lte/dist/img/favicon.png" alt="AdminLTE Logo" class="brand-image  elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ParchHill </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{url('/')}}/bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">

          <a class="d-block" href="http://parchhill.pk/ph/">
            Go To WebSite
          </a>

    
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ url('/') }}/dashboard" class="nav-link
                @if ((request()->is('dashboard')) )
                    active
                @endif 
                ">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/') }}/schoolyear" class="nav-link 
                  @if ((request()->is('schoolyear'))  || (request()->is('schoolyear/*'))   )
                  active
                  @endif 
                ">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>
                    School Year
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url('/') }}/subject" class="nav-link 
                  @if ((request()->is('subject')) || (request()->is('subject/*'))  )
                  active
                  @endif ">
                  <i class="nav-icon fa fa-table"></i>
                  <p>
                    Subjects
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>

                           
              <li class="nav-item">
                <a href="{{ url('/') }}/questions" class="nav-link 
                  @if ((request()->is('questions')) || (request()->is('questions/*')) )
                  active
                  @endif ">
                  <i class="nav-icon fa fa-laptop"></i>
                  <p>
                    Questions
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>


              

        <!-- End Parnts -->
          <li class="nav-item has-treeview 
                  @if ((request()->is('parents'))  ||  (request()->is('parents')) )
                  menu-open
                  @endif             
                ">
                <a href="#" class="nav-link 
                    @if ((request()->is('parents'))  ||  (request()->is('parents')) )
                    active
                    @endif 
                ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    parents
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  

                  <li class="nav-item">
                    <a href="{{ url('/') }}/parents" class="nav-link
                    @if ((request()->is('parents'))  || (request()->is('parents/*')))
                    active
                    @endif 
                    ">
                      <i class="far fa-circle nav-icon ml-3"></i>
                      <p>
                        Subscription
                      </p>
                    </a>
                  </li> 
                  {{-- <li class="nav-item">
                    <a href="{{ url('/') }}/parents/subscriptions" class="nav-link 
                        @if ((request()->is('parents')) )
                        active
                        @endif 
                    ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Subscriptions
                      </p>
                    </a>
                  </li> --}}
                </ul>
              </li>

             <!-- End Parnts -->
            <!-- Worksheets -->
              <li class="nav-item has-treeview 
                  @if ((request()->is('worksheet'))  ||  (request()->is('topic')) || (request()->is('worksheet/*'))  || (request()->is('topic/*'))  )
                  menu-open
                  @endif             
                ">
                <a href="#" class="nav-link 
                    @if ((request()->is('worksheet'))  ||  (request()->is('topic'))  || (request()->is('worksheet/*'))  || (request()->is('topic/*'))  || (request()->is('topic/*'))  )
                    active
                    @endif 
                ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Worksheet
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  

                  <li class="nav-item">
                    <a href="{{ url('/') }}/topic" class="nav-link
                    @if ((request()->is('topic')) || (request()->is('topic/*')) )
                    active
                    @endif 
                    ">
                      <i class="far fa-circle nav-icon ml-3"></i>
                      <p>
                        Topics
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li> 
                  <li class="nav-item">
                    <a href="{{ url('/') }}/worksheet" class="nav-link 
                        @if ((request()->is('worksheet'))  || (request()->is('worksheet/*'))   )
                        active
                        @endif 
                    ">
                      <i class="far fa-circle nav-icon ml-3"></i>
                      <p>
                        Worksheets
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ url('/') }}/ph_tv" class="nav-link 
                  @if ((request()->is('ph_tv'))  || (request()->is('ph_tv/*'))  )
                  active
                  @endif ">
                  <i class="nav-icon fa fa-laptop"></i>
                  <p>
                    PH TV
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/') }}/lesson" class="nav-link 
                  @if ((request()->is('lesson')) || (request()->is('lesson/*')) )
                  active
                  @endif ">
                  <i class="nav-icon fa fa fa-edit"></i>
                  <p>
                    Learning Booklets
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/') }}/examPaper" class="nav-link 
                  @if ( (request()->is('examPaper')) || (request()->is('examPaper/*')) ) 
                  active
                  @endif ">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                    Exam Papers
                  </p>
                </a>
              </li>
              
                      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>