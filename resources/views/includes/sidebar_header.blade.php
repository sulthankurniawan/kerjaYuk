<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-block">
    <div class="container d-flex justify-content-between">
        <div></div>
        <div class="photo d-flex align-items-center">
            <h5 class="mb-0 mr-3 font-weight-400 body-default">ADMIN - {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
        </div>
    </div>
</nav>