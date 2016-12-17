<ul class="dropdown-menu">
    <li>
        <a href="{{ route('eloquentAll') }}">
            Todos los usuarios (All)
        </a>
    </li>
    <li>
        <a href="{{ route('eloquentGet', 'f') }}">
            Usuarios Femenino (Get)
        </a>
    </li>
    <li>
        <a href="{{ route('eloquentGet', 'm ') }}">
            Usuarios Masculino (Get)
        </a>
    </li>
    <li>
        <a href="{{ route('eloquentGetCustom') }}">
            Usuarios con Get con arrays
        </a>
    </li>
    <li>
        <a href="{{ route('eloquentLists') }}">
            Select con usuarios
        </a>
    </li>
</ul>
