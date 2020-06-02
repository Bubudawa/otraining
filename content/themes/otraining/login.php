<?php get_header(); ?>

<body>
        <div id="container">
            <!-- login form -->
            
            <form action="verification" method="">
                <h1>Connexion</h1>

                <label><b>Mail</b></label>
                <input type="text" placeholder="Entrer votre adresse mail" name="mail" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>

<?php get_footer(); ?>