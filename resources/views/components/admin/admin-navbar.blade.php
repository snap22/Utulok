<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    
<ul id="slide-out" class="sidenav sidenav-fixed cyan darken-1 ">
    <li>
        <a class="subheader"> <b>Wouff Admin Panel</b> </a>
    </li>
    <li>
        <a href="/admin" class="blue-grey-text text-darken-4" > 
            <i class="blue-grey-text text-darken-4 material-icons small">insert_chart</i>
            <b>Domov</b> 
        </a>
    </li>
    <li>
        <a href="{{ route('contacts.view.all') }}" class="blue-grey-text text-darken-4">
            <i class="blue-grey-text text-darken-4 material-icons small">mail</i>
            <b>Správy</b> 
        </a>
    </li>
    <li>
        <a href="{{ route('accounts.view.all') }}" class="blue-grey-text text-darken-4">
            <i class="blue-grey-text text-darken-4 material-icons small">people</i> 
            <b>Používatelia</b>
        </a>
    </li>
    <li>
        <a href="{{ route('dogs.view.all') }}" class="blue-grey-text text-darken-4">
            <i class="blue-grey-text text-darken-4 material-icons small">pets</i>
            <b>Psy</b> 
        </a>
    </li>
    <li>
        <a href="{{ route('breeds.view.all') }}" class="blue-grey-text text-darken-4">
            <i class="blue-grey-text text-darken-4 material-icons small">format_list_bulleted</i>
            <b>Plemená</b> 
        </a>
    </li>
    <li>
        <a href="{{ route('adoptions.view.all') }}" class="blue-grey-text text-darken-4">
            <i class="blue-grey-text text-darken-4 material-icons small">sticky_note_2</i>
            <b>Adopcie</b> 
        </a>
    </li>
    <li>
        <div class="divider blue-grey darken-4 "></div>
    </li>
    <li>
        <a class="waves-effect blue-grey-text text-darken-4" href="/">
            <i class="blue-grey-text text-darken-4 material-icons small">house</i>
            <b>Hlavná stránka</b> 
        </a>
    </li>
</ul>
