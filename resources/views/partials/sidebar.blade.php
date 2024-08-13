<nav class="sidebar-admin border-end bg-white">
      <div class="p-3 ps-4">
            <div class="sidebar-brand mb-5 d-flex align-items-center gap-2">
                  <img src="../../../img/ms-teams-logo.png" alt="">
                  <div>Ms Teams</div>
            </div>
            <div class="vstack gap-2">
                  <a href="{{ url('/admin/overview') }}" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link p-2 px-3 {{ request()->is('admin/overview') ? 'active' : '' }}">
                              <i class="bi bi-grid-1x2"></i>
                              <div>Dashboard</div>
                        </div>
                  </a>
                  <a href="{{ url('/items') }}" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link p-2 px-3 {{ request()->is('items') ? 'active' : '' }}">
                              <i class="bi bi-box"></i>
                              <div>Products</div>
                        </div>
                  </a>
                  <a href="{{ url('/admin/borrowing') }}" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link p-2 px-3 {{ request()->is('admin/borrowing') ? 'active' : '' }}">
                              <i class="bi bi-box-arrow-up-right"></i>
                              <div>Borrowing</div>
                        </div>
                  </a>
                  <a href="{{ url('/admin/borrowers') }}" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link p-2 px-3 {{ request()->is('admin/borrowers') ? 'active' : '' }}">
                              <i class="bi bi-people"></i>
                              <div>Borrowers</div>
                        </div>
                  </a>
            </div>
      </div>
</nav>