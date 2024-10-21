<footer>
    <div>
        <div class="row">
            {{-- DC Comics --}}
            <div class="col">
                <ul>
                    <li>
                        <h4>
                            DC Comics
                        </h4>
                    </li>
                    @foreach ($footerLinksDcComics as $element)
                    <li>
                        <a href="#"> {{ $element['name'] }} </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            
            {{-- DC --}}
            <div class="col">
                <ul>
                    <li>
                        <h4>
                            DC
                        </h4>
                    </li>
                    @foreach ($footerLinksDc as $element)
                    <li>
                        <a href="#"> {{ $element['name'] }} </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Sites --}}
            <div class="col">
                <ul>
                    <li>
                        <h4>
                            Sites
                        </h4>
                    </li>
                    @foreach ($footerLinksSites as $element)
                    <li>
                        <a href="#"> {{ $element['name'] }} </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Shop --}}
            <div class="col">
                <ul>
                    <li>
                        <h4>
                            Shop
                        </h4>
                    </li>
                    @foreach ($footerLinksShop as $element)
                    <li>
                        <a href="#"> {{ $element['name'] }} </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>