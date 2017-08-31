<div class="single-post">
    <a href="{{{ data.permalink }}}">
        <h2 class="single-post-title">
            {{{ data.title }}}
        </h2>
    </a>
    <# if ( data.published > data.timestamp - 24 * 3600 ) { #>
        <span class="single-post-newmarker">NEW!</span>
    <# } #>
    <p class="single-post-excerpt">
        {{{ data.excerpt }}}
    </p>
</div>
