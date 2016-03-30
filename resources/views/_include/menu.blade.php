@if(Auth::user())
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li>
                  <a href="{{url('pulsa/')}}">Tampil Pemakaian</a>
                </li>
                <li>
                  <a href="{{url('pulsa/pemakaian')}}">Tambah Pemakaian</a>
                </li>
                <li>
                  <a href="{{url('personil/tambah-personil')}}">Tambah Personil</a>
                </li>
                <li>
                  <a href="{{url('auth/register')}}">Tambah Pengguna</a>
                </li>
                <li>
                  <a href="{{url('auth/logout')}}">Logout</a>
                </li>
              </ul>
            </div>
@endif