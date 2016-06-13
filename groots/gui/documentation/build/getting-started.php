<div class="typography">
    <h3>Getting started</h3>
    <h5>1. Installation</h5>
    <p>Afin de pouvoir initialiser Groots, vous devez avoir <strong>Node</strong>, <strong>Gulp</strong> et <strong>Bower</strong> installés globalement sur votre machine. Si vous les avez déjà vous pouvez passer à l'initialisation.</p>
    <ul>
        <li>Pour installer Node, rendez-vous sur <a href="https://nodejs.org/en/" target="_blank">le site de NodeJS</a> et téléchargez la dernière version stable</li>
        <li>Pour installer Gulp, executez cette commande une fois que Node est installé sur votre machine <code>npm install --global gulp-cli</code></li>
        <li>Pour installer Bower, executez cette commande une fois que Node est installé sur votre machine <code>npm install -g bower</code></li>
    </ul>
    <h5>2. Initialisation</h5>
    <p>Pour initialiser Groots, il suffit d'executer <code>npm install</code> qui s'occupera de tout. Cette commande commencera par installer les dépendances Bower en exécutant <code>bower install</code> et se terminera en exécutant <code>gulp initial</code>.</p>
    <p>En production, le flag <code>npm install --prod</code> permettra d'activer les configurations de production lors de l'initialisation.</p>
</div>
