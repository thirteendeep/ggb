<div gr-grid="container">
    <div gr-grid="row--block sm-3 lg-4">
        <?php
        for ($i=1; $i <= 6; $i++) {
            ?>
            <div gr-grid="block">
                <div class="card">
                    <img src="http://placehold.it/640x300">
                    <div class="card__content">
                        <h4 class="card__title">lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero nobis ea id, accusamus sed consectetur illo et, aut optio tempore placeat!</p>
                        <?php if ($i == 3) {
                            ?>
                            <p>Fugit, necessitatibus architecto odit sint commodi. Voluptas, veniam dolorum?</p>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>
            <?php
        } ?>
    </div>
</div>
