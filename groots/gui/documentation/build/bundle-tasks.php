<div class="typography">
    <h3>Tâches groupées</h3>
    <p>Les tâches groupées sont un ensemble de tâches rassemblées en une seule, nous permettant de les executer en une seule commande.</p>
    <h5><code>gulp</code></h5>
    <p>Cette tâche contient les tâches basiques utilisées dans un contexte de développement.</p>
    <p>Voici les tâches lancées par cette tâche groupée.</p>
    <ul>
        <li><code>gulp images</code></li>
        <li><code>gulp styles</code></li>
        <li><code>gulp scripts</code></li>
        <li><code>gulp fonts</code></li>
        <li><code>gulp gui</code> (si la tâche est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>)</li>
    </ul>
    <h5><code>gulp build</code></h5>
    <p>Cette tâche génère l'entièreté des fichiers nécessaires au projet. Elle est automatiquement lancée lors de l'installation d'un projet avec <code>npm install</code> via son alias <code>gulp initial</code>. Elle n'est à utiliser manuellement que si on ajoute un composant Bower, des fonts ou qu'on modifie un des fichiers core de la gui.</p>
    <p>Voici les tâches lancées par cette tâche groupée.</p>
    <ul>
        <li><code>gulp images</code></li>
        <li><code>gulp styles</code></li>
        <li><code>gulp scripts</code></li>
        <li><code>gulp vendor</code></li>
        <li><code>gulp vendor:header</code> (si la tâche est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>)</li>
        <li><code>gulp fonts</code></li>
        <li><code>gulp fonts:awesome</code> (si la tâche est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>)</li>
        <li><code>gulp fonts:google</code> (si la tâche est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>)</li>
        <li><code>gulp favicons</code> (si le fichier favicon.png existe)</li>
        <li><code>gulp gui:build</code> (si la tâche est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>)</li>
    </ul>
    <p><small><i>Note : <code>gulp initial</code> est un alias de <code>gulp build</code>.</i></small></p>
    <h5>Flag de production</h5>
    Dans un contexte de production, le flag <code>--prod</code> est à ajouter lorsqu'on exécute <code>npm install</code> ou toute commande gulp. Les tâches adopteront leur comportement de production (voir <a href="#d-build-singleTasks" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">les tâches individuelles</a> pour plus de détails).
</div>
