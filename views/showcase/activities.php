<?php $title = "Activities"; ?>

<?php ob_start(); ?>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="jumbotron jumbotron-fluid text-white mb-4 py-4" style="background-color:#455A64">
    <div class="container text-center">
        <h1 class="display-4">Nos différentes activitées  </h1>
        <p class="lead">Marketing digital / SEO / Community manager</p>
    </div>
</div>
<div class="container-fluid bg-light text-md-left py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-4 text-center">Marketing digital</h1>
                <p>Le marketing digital est un pilier essentiel pour toute entreprise cherchant à prospérer dans l'économie numérique actuelle. Chez 37, nous proposons des stratégies de marketing digital personnalisées pour vous aider à atteindre vos objectifs commerciaux. Nos services incluent la création et la gestion de campagnes publicitaires en ligne sur des plateformes telles que Google Ads et Facebook Ads, permettant de maximiser votre visibilité et d'attirer un public ciblé. Nous élaborons des contenus engageants pour vos blogs et réseaux sociaux afin de captiver et fidéliser votre audience. De plus, nous mettons en place des campagnes d'email marketing efficaces pour maintenir une communication directe avec vos clients et prospects, les tenant informés de vos dernières offres et actualités. Notre équipe utilise également des outils d'analyse avancés pour suivre les performances de chaque campagne, vous fournissant des rapports détaillés pour mesurer le succès et ajuster les stratégies en conséquence. En adoptant une approche intégrée et basée sur les données, nous veillons à ce que chaque action de marketing digital contribue à augmenter votre retour sur investissement et à renforcer votre présence en ligne.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="/src/img/Marketing2.png" class="img-fluid mb-4 rounded"  style="width:400px; height:auto" alt="Marketing Digital Image">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <hr class="featurette-divider">
</div>
<div class="container-fluid bg-light text-md-left py-5">
    <div class="container">
        <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="/src/img/SEO1.png" class="img-fluid mb-4 rounded" style="width:400px; height:auto" alt="SEO Image">
            </div>
            <div class="col-md-6">
                <h1 class="mb-4 text-center">SEO</h1>
                <p>Le SEO, ou optimisation pour les moteurs de recherche, est une discipline essentielle pour toute entreprise souhaitant améliorer sa visibilité en ligne. Chez 37, nous offrons des stratégies de SEO personnalisées pour vous aider à atteindre vos objectifs commerciaux. Nos services incluent l'optimisation technique de votre site web, la recherche de mots-clés pertinents, et la création de contenu de haute qualité. En améliorant la structure et la performance de votre site, nous nous assurons qu'il est facilement indexé par les moteurs de recherche.</p>
                <p>Nous développons également des stratégies de backlinks pour augmenter l'autorité de votre site et améliorer son classement sur les pages de résultats des moteurs de recherche (SERP). Notre équipe utilise des outils d'analyse avancés pour suivre les performances de votre site, identifier les opportunités d'amélioration et ajuster les stratégies en conséquence. En adoptant une approche intégrée et basée sur les données, nous veillons à ce que chaque action de SEO contribue à augmenter votre trafic organique et à renforcer votre présence en ligne. Chez 37, notre objectif est de vous aider à atteindre une visibilité maximale sur les moteurs de recherche, vous permettant ainsi de toucher un public plus large et de réaliser vos objectifs de croissance.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="container-fluid bg-light text-md-left py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-4 text-center">Community manager</h1>
                <p>Le rôle de community manager est crucial pour toute entreprise cherchant à établir et maintenir une présence en ligne forte et engageante. Chez 37, nos community managers sont experts dans la création et la gestion de communautés en ligne dynamiques et actives. Ils sont responsables de la planification, de la création et de la publication de contenu sur diverses plateformes de médias sociaux telles que Facebook, Instagram, Twitter et LinkedIn. Grâce à une compréhension approfondie de votre audience cible, nos community managers s'assurent que chaque publication résonne avec vos clients potentiels et existants, renforçant ainsi la fidélité à la marque.

 <br>En plus de la gestion des publications, nos community managers sont également en charge de l'interaction avec les abonnés et les clients. Ils répondent aux commentaires, messages et avis, et engagent des conversations pour maintenir une relation positive et proactive avec votre communauté en ligne. Ils surveillent les mentions de votre marque sur le web, gèrent les crises de communication, et fournissent des analyses et des rapports détaillés sur l'engagement et la croissance de votre communauté.

 <br>Nos community managers collaborent étroitement avec les équipes de marketing et de contenu pour aligner les stratégies et assurer une communication cohérente à travers tous les canaux. En utilisant des outils d'analyse de pointe, ils mesurent l'impact de leurs actions et ajustent les stratégies pour maximiser l'engagement et atteindre vos objectifs commerciaux. Chez 37, nous croyons que la gestion efficace de la communauté est la clé pour construire une marque forte et durable en ligne.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="/src/img/Manager.png" class="img-fluid mb-4 rounded"  style="width:400px; height:auto" alt="Marketing Digital Image">
            </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require 'templates/showcase.php'; ?>