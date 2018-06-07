<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <a href="http://www.wizards.com/Magic/PlaneswalkerPoints/9103932668"><img src="http://pwp.wizards.com/9103932668/Scorecards/Portrait.png" border="0" /></a>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            @foreach($archives as $stats)
                <li>
                    <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'].'  '.$stats['year'] }}</a>
                </li>
            @endforeach
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</aside><!-- /.blog-sidebar -->