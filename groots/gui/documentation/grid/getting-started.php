<div class="typography">
    <h3>Getting started</h3>
    <p>
        Pour commencer, vous devez configurer le array de <strong>Breakpoints</strong> présent dans le fichier de variables <code>[groots/scss/variables.scss - $breakpoints]</code>.
        Ensuite, vous devez initialiser votre grid dans votre dossier leaves <code>[groots/scss/leaves/...]</code> avec le mixin de grid.
    </p>
    <p>
        <code>@include grid(attribute, $grid-columns, $grid-gutter-width, $grid-container-width, flexbox-enabled);</code>
    </p>
    <p>
        <strong>Attribute</strong> (default: 'gr-grid') : Nom de l'attribut html <br>
        <strong>Columns</strong> (default: 12) : Nombre de colonnes <br>
        <strong>Gutter-width</strong> (default: 0)  : Marges entre les colonnes <br>
        <strong>Max-width</strong> (default: 100%) : Largeur maximale du conteneur contenant les colonnes <br>
        <strong>Flexbox-enabled</strong> (default: true) : flexbox ou non <br><br>

        Nous conseillons d'utiliser les variables <strong>$grid-columns, $grid-gutter-width, $grid-container-width</strong> présent dans le fichier de variables <strong>[groots/scss/variables.scss]</strong>.
    </p>
</div>
