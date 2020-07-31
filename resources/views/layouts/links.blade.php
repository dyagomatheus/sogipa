<ul class="nav nav-pills mb-2">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Aluno</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('register')}}">Cadastrar</a>
        <a class="dropdown-item" href="{{route('user.list')}}">Listar</a>
      </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Curso</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('course.create')}}">Cadastrar</a>
          <a class="dropdown-item" href="{{route('course.index')}}">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Instrutor</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('verse.create')}}">Cadastrar</a>
          <a class="dropdown-item" href="{{route('verse.index')}}">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Certificado</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('student.create')}}">Cadastrar</a>
          <a class="dropdown-item" href="{{route('student.index')}}">Listar</a>
        </div>
      </li>
  </ul>