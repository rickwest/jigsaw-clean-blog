<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    @foreach($page->socials as $social)
                        <li class="list-inline-item">
                            <a href="{{ $social->link }}" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="{{ $social->icon }} fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <p class="copyright text-muted">Copyright &copy; {{ $page->siteName }} <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
            </div>
        </div>
    </div>
</footer>