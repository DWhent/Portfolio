
    <?php
    $pageTitle = "Home - Emil Ivanov";
    include __DIR__ . "/includes/header.php";
    ?>

    <h1>Home - Emil Ivanov</h1>
    <p>Welcome to my website!</p>
    <h2>About Me</h2>
    <p>
        Student of computer science in Montreal, passionate about web development. 
        I love exploring both the creative front-end (animations, design) 
        and the construction of solid projects from A to Z.
         que la construction de projets solides de A à Z.
    </p>
    <h2>Compétences principales</h2>

    <h3>Langages de programmation</h3>
    <p>
        HTML, CSS, JavaScript, PHP, C#, Java, Kotlin, Swift.
    </p>
    <h3>Frameworks et bibliothèques</h3>
    <p>
        React, Node.js, .NET, Express.js.
    </p>
    <h3>Prochaines compétences</h3>
    <p>
        Tailwind CSS, Next.js, SwiftUI
    </p>
    <h3>Outils et technologies</h3>
    <p>
        Git, GitHub, MySQL, MongoDB, RESTful APIs.
    </p>

    <h2>Opportunités de recherche</h2>
    <p>
        Je suis actuellement à la recherche d'opportunités de recherche dans le domaine du développement web. 
        Si vous avez des projets intéressants ou des collaborations potentielles, n'hésitez pas à me contacter.
    </p>

    <h2>Contact</h2>
    <form action="" method="post">
        <p>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
        </p>
        <p>
            <label for="sujet">Sujet</label>
            <select id="sujet" name="sujet" required>
                <option value="">Sélectionnez un sujet</option>
                <option value="collaboration">Collaboration</option>
                <option value="projet">Projet</option>
                <option value="autre">Autre</option>
            </select>
        </p>
        <p>
            <label for="courriel">Courriel</label>
            <input type="email" id="courriel" name="courriel" required>
        </p>
        <p>
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </p>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    include __DIR__ . "/includes/footer.php";
    ?>