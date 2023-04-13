<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form id="searchform" class="searchform">
                    <div>
                        <label class="screen-reader-text">Sök efter:</label>
                        <input type="text" />
                        <input type="submit" value="Sök" />
                    </div>
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <h2>Sidor</h2>
                <?php
                wp_nav_menu(array('menu' => 'undermeny',));
                ?>
            </li>
            <li>
                <h2>Arkiv</h2>
                <ul>
                    <li>
                        <a href="arkiv.html">oktober 2016</a>
                    </li>
                </ul>
            </li>
            <li class="categories">
                <h2>Kategorier</h2>
                <ul>
                    <li class="cat-item">
                        <a href="">Natur</a> (1)
                    </li>
                    <li class="cat-item">
                        <a href="">Okategoriserade</a> (3)
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>