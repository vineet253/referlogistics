 <div class="pull-right user-login">
          
          <div class="dropdown custom-dropdown-block">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Profile
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Change Password</a></li>
              <li><a href="#">Switch Account</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                Logout </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </li>




            </ul>
          </div>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="#" class="active">Recommendations</a>
          </li>
          <li>
            <a class="" href="#">Applied Jobs</a>
          </li>
          <li>
            <a href="#">Saved Jobs</a>
          </li>
          <li>
            <a href="#">Chat</a>
          </li>
          <li>
            <a href="#">Notifications</a>
          </li>
        </ul>