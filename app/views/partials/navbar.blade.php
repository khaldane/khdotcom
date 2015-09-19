<div class="navbar navbar-fixed-top bs-docs-nav" id="top" role="banner">
    <nav class="navbar navbar-default">
     <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"> <img id="logo" src="/images/khlogo.png" alt="Katherine Haldane Logo" /> </a>
        </div>
        <ul class="nav navbar-nav navbar-left nav-start">
            <li class="nav">{{ link_to_route('portfolio', 'PORTFOLIO') }}</li>
            <li class="nav">{{ link_to_route('gaming', 'GAMING') }}</li>
            <li class="nav">{{ link_to_route('tutorials', 'TUTORIALS') }}</li>
            <li class="nav">{{ link_to_route('contact', 'CONTACT') }}</li>
            @if(Auth::user()) 
            <li class="nav">{{ link_to_route('admin-panel', 'ADMIN') }}</li>
            @endif
        </ul>
         @if(Auth::user())
            <li class="nav nav-right login"><a href="/logout"><i class="fa fa-sign-out"></i></a></li>
         @else
             <li class="nav nav-right login"><a href="/login"><i class="fa fa-sign-in"></i></a></li>
         @endif
     </div>
    </nav>
</div>