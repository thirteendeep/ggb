<div class="typography">
    <h3>Configurations</h3>
    <p>Les configurations sont séparées en trois grands fichiers se trouvant dans <code>groots/build/configs</code>:</p>
    <h5>Core.js</h5>
    <p>Ce fichier ne devrait pas être modifier à chaque projet. Il contient la configuration des tâches groupées ainsi que les variables de paths définissants la structure internes des deux dossiers principaux de Groots définits dans Project.js.</p>
    <h5>Project.js</h5>
    <p>Il contient la configuration du projet, on y définit les variables de path globales (dossier source et dossier des fichiers générés par Groots). On y renseigne aussi les plugins utilisés et les composants Bower à inclure ainsi que d'autres configurations générales.</p>
    <h5>User.js</h5>
    <p>Ce fichier est propre à chacun, il est ignoré par git. On y retrouve les configurations qui sont laissées à la discrétion de chaque développeur.</p>
</div>
