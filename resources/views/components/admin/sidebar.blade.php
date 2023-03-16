<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.main.index') }}">
            <span data-feather="main"></span>
            Главная <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.drugs.index') }}">
            <span data-feather="file"></span>
            Лекарства
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.messages.index') }}">
          <span data-feather="file"></span>
          Сообщения
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.users.index') }}">
          <span data-feather="file"></span>
          Пользователи
          </a>
        </li>
      </ul>
    </div>
  </nav>