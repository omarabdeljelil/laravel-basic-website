<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Basic web site</h5>
    <nav id="navbar" class="my-2 my-md-0 mr-md-3">
        <a class="p-2 {{Request::is('/') ? 'active' : 'not-active'}}" href="/">Home</a>
        <a class="p-2 {{Request::is('about') ? 'active' : 'not-active'}}" href="/about">About</a>
        <a class="p-2 {{Request::is('contact') ? 'active' : 'not-active'}}" href="/contact">Contact</a>
    </nav>
</div>

