<header class="bmd-layout-header ">
			<div class="navbar navbar-light bg-faded animate__animated animate__fadeInDown">
				<button class="navbar-toggler animate__animated animate__wobble animate__delay-2s" type="button"
					data-toggle="drawer" data-target="#dw-s1">
					<span class="navbar-toggler-icon"></span>
				</button>
				<ul class="nav navbar-nav ">
					<li class="nav-item">
						<div class="dropdown">
							<button class="btn  dropdown-toggle  m-0" type="button" id="dropdownMenu2"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="far fa-envelope fa-lg"></i><span
									class="badge badge-pill badge-danger animate__animated animate__flash animate__repeat-3 animate__slower animate__delay-2s">5</span>
							</button>

							<div aria-labelledby="dropdownMenu2"
								class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right-lg">
								<span class="dropdown-item dropdown-header">15 Notifications</span>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<i class="far fa-envelope c-main mr-2"></i> 4 new messages
									<span class="float-right-rtl text-muted text-sm">3 mins</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<i class="far fa-user c-main mr-2"></i> 8 friend requests
									<span class="float-right-rtl text-muted text-sm">12 hours</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<i class="far fa-file c-main mr-2"></i> 3 new reports
									<span class="float-right-rtl text-muted text-sm">2 days</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu3"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="far fa-bell  fa-lg "></i><span
									class="badge badge-pill badge-warning animate__animated animate__flash animate__repeat-3 animate__slower animate__delay-2s">5</span>
							</button>
							<div aria-labelledby="dropdownMenu2"
								class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right-lg">
								<span class="dropdown-item dropdown-header">15 Notifications</span>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<i class="far fa-envelope c-main mr-2"></i> 4 new messages
									<span class="float-right-rtl text-muted text-sm">3 mins</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<i class="far fa-user c-main mr-2"></i> 8 friend requests
									<span class="float-right-rtl text-muted text-sm">12 hours</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<i class="far fa-file c-main mr-2"></i> 3 new reports
									<span class="float-right-rtl text-muted text-sm">2 days</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
							</div>
						</div>
					</li>
                    {{-- ++++++++++++++++++++++++  بداية الناتو +++++++++++++++++ --}}
                    <li class="nav-item">
						<div class="dropdown">
							<button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu3"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="far fa-bell  fa-lg "></i><span
									class="badge badge-pill badge-warning animate__animated animate__flash animate__repeat-3 animate__slower animate__delay-2s">@if (auth()->user()->unreadNotifications->count()>0)

                                     {{ auth()->user()->unreadNotifications->count() }}@endif</span>
							</button>
							<div aria-labelledby="dropdownMenu2"
								class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right-lg">
								<span class="dropdown-item dropdown-header"> {{ auth()->user()->unreadNotifications->count() }} إشعار</span>
                                @foreach (auth()->user()->unreadNotifications as $notification)
                                <div class="dropdown-divider"></div>
                                <?php $hre= $notification->data['href']; ?>
								<a href="{{url($hre)}}" class="dropdown-item">
									<i class="far fa-envelope c-main mr-2"></i> {{ $notification->data['title'] }}{{ $notification->data['user'] }}<br>
									{{-- <span class="float-right-rtl text-muted text-sm">{{ $notification->created_at }}</span> --}}
								</a>

                                @endforeach


								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item dropdown-footer">تعين قراءة الكل</a>
							</div>
						</div>
					</li>


                    {{-- ++++++++++++++++++++++++ نهاية الناتو +++++++++++++++++++++++++++ --}}
					<li class="nav-item"> <img src="{{URL::asset('assets/dash/img/avatar')}}/{{Auth()->user()->prof_pic}}" alt="..."
							class="rounded-circle screen-user-profile img-responsive"  width="40px" height="40px"></li>
					<li class="nav-item">
						<div class="dropdown">
							<button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu4"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{Auth()->user()->name}}
							</button>
							<div aria-labelledby="dropdownMenu4"
								class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right"
								aria-labelledby="dropdownMenu2">
								<button class="dropdown-item" type="button"><i
										class="far fa-user fa-sm c-main mr-2"></i>Profile</button>
								<button onclick="dark()" class="dropdown-item" type="button"><i
										class="fas fa-moon fa-sm c-main mr-2"></i>Dark Mode</button>
								<button class="dropdown-item" type="button"><i
										class="fas fa-cog fa-sm c-main mr-2"></i>Setting</button>
								<button class="dropdown-item" type="button"><a href="{{ url('/logout') }}"><i
										class="fas fa-sign-out-alt c-main fa-sm mr-2"></i>Sign Out </a></button>
							</div>
						</div>


					</li>


                    {{-- ---------------------------- --}}

                    {{-- ------------------------------ --}}

				</ul>
			</div>
		</header>
