<ul class="nav nav-pills mb-2">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Redação</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('register')}}">Cadastrar Aluno</a>
        <a class="dropdown-item" href="{{route('user.list')}}">Listar</a>
      </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Certificado</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('course.create')}}">Cadastrar Curso</a>
          <a class="dropdown-item" href="{{route('course.index')}}">Listar Cursos</a>
          <a class="dropdown-item" href="{{route('verse.create')}}">Cadastrar Instrutor</a>
          <a class="dropdown-item" href="{{route('verse.index')}}">Listar Instrutores</a>
          <a class="dropdown-item" href="{{route('student.create')}}">Cadastrar Certificado</a>
          <a class="dropdown-item" href="{{route('student.index')}}">Listar Certificados</a>
        </div>
      </li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Instrutor</a>
        <div class="dropdown-menu">

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Certificado</a>
        <div class="dropdown-menu">

        </div>
      </li> --}}
  </ul>