@include('admin.layout.header')

<nav class=" px-7 bg-gray-200 py-6 shadow-md sticky top-0">
  <div class="flex justify-between ">
      <div>
          <a href="/">Admin Panel</a>
      </div>
      <div>
          <div class="space-x-3">
              <a href="#"></a>
              <a href="{{ route('admin.logout') }}">Logout</a>
          </div>
      </div>
  </div>
  
</nav>


@include('admin.layout.footer')