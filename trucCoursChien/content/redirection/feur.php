<head>
    <link href="../../styles/styles.css" rel="stylesheet" />
</head>
<div id="redirection-feur">
    <img src="../../assets/zepeck.jpg" width="300" alt="feur" />
    <h1>Zepeck est content</h1>
    <h2>Il a un feur</h2>
    <h3>Comme à l'époque de nos grands frères</h3>
    <form action="../../index.php" method="post">
        <input type="submit" value="Retourner à l'accueil">
    </form>
</div>
<script>
    function createFeurs() {
        var container = document.getElementById("redirection-feur");

        for (var i = 0; i < 10; i++) {
            var feur = document.createElement("p");
            feur.textContent = "feur";
            feur.className = "floating-feur";
            feur.style.fontFamily = "Hachi Maru Pop";
            feur.style.position = "absolute";
            feur.style.color = `rgb(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255})`
            feur.style.left = Math.random() * window.innerWidth + "px";
            feur.style.top = Math.random() * window.innerHeight + "px";
            container.appendChild(feur);
        }


        setInterval(function() {
            var feurs = document.getElementsByClassName("floating-feur");
            for (var i = 0; i < feurs.length; i++) {
                feurs[i].style.left = Math.random() * window.innerWidth + "px";
                feurs[i].style.top = Math.random() * window.innerHeight + "px";
                feurs[i].animate([
                    // keyframes
                    {
                        opacity: 1,
                        transform: 'scale(1.5)'
                    },
                    {
                        opacity: 0,
                        transform: 'scale(0.5)'
                    }
                ], {
                    // timing options
                    duration: 2000,
                    iterations: Infinity
                });
            }
        }, 2000);
    }
    createFeurs()
</script>