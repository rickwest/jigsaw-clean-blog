<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    @foreach($page->socials as $social)
                        <li class="list-inline-item">
                            <a href="{{ $social->link }}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="{{ $social->icon }} fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
                <p class="copyright text-muted"><small>This website is powered by the awesome <a href="https://jigsaw.tighten.co/" target="_blank">Jigsaw</a> and kindly hosted on <a href="https://www.netlify.com/" target="_blank">Netlify</a>. Get the source code on <a href="https://github.com/rickwest/jigsaw-clean-blog" target="_blank">Github</a></small></p>
            </div>
        </div>
    </div>
</footer>