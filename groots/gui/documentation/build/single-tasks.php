<div class="typography">
    <h3>Tâches individuelles</h3>
    <p>Les tâches individuelles sont des composants des <a href="#d-build-bundleTasks" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">tâches groupées</a> mais elles peuvent aussi être exécutées individuellement.</p>
    <p>Le tag [Tag dev] indique que cette fonction ne s'activera pas lorsque le flag de production est ajouté. Inversément le tag [Tag prod] indique que cette fonction ne s'activera que si le flag de production est ajouté</p>
    <table class="">
        <thead>
            <tr>
                <th>Tâches</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>images</td>
                <td>
                    <ul>
                        <li>Copie les images du dossier <code>groots/images</code> dans le dossier de destination</li>
                        <li>Optimise les images pour les rendre plus légères</li>
                        <li>Génère des images aux formats webp pour les navigateurs compatibles (format moins lourd)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>styles</td>
                <td>
                    <ul>
                        <li>Convertis les fichiers SASS en CSS et les fusionne en un seul</li>
                        <li>Place le fichier fusionné dans le dossier de destination et le renomme selon le nom du projet définit dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code> (monprojet.css)</li>
                        <li>Ajoute les préfixes nécessaires pour certains navigateurs</li>
                        <li>[Tag dev] Génère des fichiers maps (si l'option est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>user.js</code>) qui permettra une inspection plus aisée du code</li>
                        <li>[Tag dev] Vérifie les erreurs ainsi que nos le respect de <a href="codelines.php">nos codelines</a></li>
                        <li>[Tag prod] Minifie le fichier fusionné</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>scripts</td>
                <td>
                    <ul>
                        <li>Fusionne les fichiers Javascript (la tâche prendra toujours le main.js en l'ajoutant après les fichiers spécifiés dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0"></a> de <code>project.js</code> si il y en a)</li>
                        <li>Place le fichier fusionné dans le dossier de destination et le renomme selon le nom du projet définit dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code> (monprojet.js)</li>
                        <li>Convertis les fichiers ES2xxx en Javascript standard (si l'option babel est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>)</li>
                        <li>[Tag dev] Génère des fichiers maps (si l'option est activée dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>user.js</code>) qui permettra une inspection plus aisée du code</li>
                        <li>[Tag dev] Vérifie les erreurs ainsi que nos le respect de <a href="codelines.php">nos codelines</a></li>
                        <li>[Tag prod] Minifie le fichier fusionné</li>
                        <li>[Tag prod] Supprime les console, alert et debug du fichier généré</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>vendor<br>vendor:header</td>
                <td>
                    <ul>
                        <li>Fusionne les plugins et autres composants externes inclus au projet (les plugins inclus sont spécifiés dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>)</li>
                        <li>[Tag prod] Minifie le fichier fusionné</li>
                    </ul>
                    <p><small><i>Note : La variations <code>:header</code> de la tâche fonctionne de la même façon, elle permet de générer un fichier différent si jamais certains plugins ont besoin d'être ajoutés dans le header.</i></small></p>
                </td>
            </tr>
            <tr>
                <td>fonts</td>
                <td>
                    <ul>
                        <li>Copie les fonts du dossier <code>groots/fonts</code> dans le dossier de destination</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>fonts:awesome</td>
                <td>
                    <ul>
                        <li>Copie les fonts de <a href="http://fontawesome.io/">fontawesome.io</a> dans le dossier de destination</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>fonts:google</td>
                <td>
                    <ul>
                        <li>Télécharge les Google Fonts spécifiées dans le fichier <code>groots/fonts/google.list</code> puis les copie dans le dossier de destination</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>favicons</td>
                <td>
                    <ul>
                        <li>Génère les différentes favicons à prévoir pour les appareils mobiles et navigateurs</li>
                    </ul>
                    <p><small><i>Note : Dans les <a href="#d-build-configuration" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">configurations</a> de <code>project.js</code>, il faudra spécifier la couleur de background ainsi que la couleur principale du projet qui sera utilisée pour l'icône des onglets de Safari ainsi que pour la barre de menu de Chrome sous Android.</small></i></p>
                </td>
            </tr>
            <tr>
                <td>gui</td>
                <td>
                    <ul>
                        <li>Copie les fichiers de la GUI dans le dossier de destination</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>gui:build</td>
                <td>
                    <ul>
                        <li>Copie les fichiers de la GUI dans le dossier de destination</li>
                        <li>Génère les styles généraux et le layout de la GUI</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
