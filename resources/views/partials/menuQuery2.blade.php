<ul class="dropdown-menu">
    <li>
        <a href="{{ route('eloquentDestroyBook') }}">
            Borrado masivo de libros
        </a>
    </li>
    <li>
        <a href="{{ route('bookCategory') }}">
            Libros y sus categorias
        </a>
    </li>
    <li>
        <a href="{{ route('bookOfOwner') }}">
            Autores de libros
        </a>
    </li>
    <li>
        <a href="{{ route('ownerOfBook') }}">
            Libros y sus autores
        </a>
    </li>
</ul>
