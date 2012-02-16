# Proin vitae lectus mi a tincidunt mauris #

Quando enim nobis, vel dicam aut oratoribus bonis aut poetis, postea quidem quam fuit quem imitarentur, ullus orationis vel copiosae vel elegantis ornatus defuit? **Ego vero, *quoniam forensibus* operis, laboribus**, periculis non deseruisse mihi videor praesidium, in quo a populo Romano locatus sum, debeo profecto, quantumcumque possum, in eo quoque elaborare, ut sint opera, studio, labore meo doctiores cives mei, nec cum istis tantopere pugnare, qui Graeca [legere malint, modo legant](http://easybook-project.org) illa ipsa, ne simulent, et iis servire, qui vel utrisque litteris uti velint vel, si suas habent, illas non magnopere desiderent.

    [javascript]
    {
        "name": "symfony/yaml",
        "type": "library",
        "description": "Symfony Yaml Component",
        "keywords": [],
        "homepage": "http://symfony.com",
        "license": "MIT",
        "authors": [
            {
                "name": "Fabien Potencier",
                "email": "fabien@symfony.com"
            },
            {
                "name": "Symfony Community",
                "homepage": "http://symfony.com/contributors"
            }
        ],
        "require": {
            "php": ">=5.3.2"
        },
        "autoload": {
            "psr-0": { "Symfony\\Component\\Yaml": "" }
        },
        "target-dir": "Symfony/Component/Yaml"
    }
    
Qui autem alia malunt scribi a nobis, aequi esse debent, quod et scripta multa sunt, sic ut plura nemini e nostris, et scribentur fortasse plura, si vita suppetet; et tamen, qui diligenter haec, quae de philosophia litteris mandamus, legere assueverit, iudicabit nulla ad legendum his esse potiora.

## Aliquam et massa at felis fermentum varius congue ut felis ##

Quid est enim in vita tantopere quaerendum quam cum omnia in philosophia, tum id, quod his libris quaeritur, qui sit finis, quid extremum, quid ultimum, quo sint omnia bene vivendi recteque faciendi consilia referenda, quid sequatur natura ut summum ex rebus expetendis, quid fugiat ut extremum malorum? qua de re cum sit inter doctissimos summa dissensio, quis alienum putet eius esse dignitatis, quam mihi quisque tribuat, quid in omni munere vitae optimum et verissimum sit, exquirere?

An, partus ancillae sitne in fructu habendus, disseretur inter principes civitatis, P. Scaevolam M'.que Manilium, ab iisque M. Brutus dissentiet -- quod et acutum genus est et ad usus civium non inutile, nosque ea scripta reliquaque eiusdem generis et legimus libenter et legemus --, haec, quae vitam omnem continent, neglegentur? nam, ut sint illa vendibiliora, haec uberiora certe sunt.

![Vestibulum quis sem lacus. Integer ac magna eros](image-normal.png)

Quamquam id quidem licebit iis existimare, qui legerint. nos autem hanc omnem quaestionem de finibus bonorum et malorum fere a nobis explicatam esse his litteris arbitramur, in quibus, quantum potuimus, non modo quid nobis probaretur, sed etiam quid a singulis philosophiae disciplinis diceretur, persecuti sumus.

### Donec arcu purus, consequat nec pharetra a, congue eu eros ###

Ut autem a facillimis ordiamur, prima veniat in medium Epicuri ratio, quae plerisque notissima est. quam a nobis sic intelleges eitam, ut ab ipsis, qui eam disciplinam probant, non soleat accuratius explicari; verum enim invenire volumus, non tamquam adversarium aliquem convincere.

Accurate autem quondam a L. Torquato, homine omni doctrina erudito, defensa est Epicuri sententia de voluptate, a meque ei responsum, cum C. Triarius, in primis gravis et doctus adolescens, ei disputationi interesset.

    [yaml]
    security:
        encoders:
            Symfony\Component\Security\Core\User\User: plaintext
            
        role_hierarchy:
            ROLE_ADMIN:       ROLE_USER
            ROLE_SUPER_ADMIN: [ROLE_USER, ROLE_ADMIN, ROLE_ALLOWED_TO_SWITCH]
            
        providers:
            in_memory:
                memory:
                    users:
                        user:  { password: userpass, roles: [ 'ROLE_USER' ] }
                        admin: { password: adminpass, roles: [ 'ROLE_ADMIN' ] }

Nam cum ad me in Cumanum salutandi causa uterque venisset, pauca primo inter nos de litteris, quarum summum erat in utroque studium, deinde Torquatus: Quoniam nacti te, inquit, sumus aliquando otiosum, certe audiam, quid sit, quod Epicurum nostrum non tu quidem oderis, ut fere faciunt, qui ab eo dissentiunt, sed certe non probes, eum quem ego arbitror unum vidisse verum maximisque erroribus animos hominum liberavisse et omnia tradidisse, quae pertinerent ad bene beateque vivendum.

### Aliquam justo tortor, mollis id lacinia vel, bibendum sed leo ###

Sed existimo te, sicut nostrum Triarium, minus ab eo delectari, quod ista Platonis, Aristoteli, Theophrasti orationis ornamenta neglexerit. nam illud quidem adduci vix possum, ut ea, quae senserit ille, tibi non vera videantur.

Vide, quantum, inquam, fallare, Torquate. oratio me istius philosophi non offendit; nam et complectitur verbis, quod vult, et dicit plane, quod intellegam; et *tamen ego a philosopho*, si afferat eloquentiam, non asperner, si non habeat, non admodum flagitem. re mihi non aeque satisfacit, et quidem locis pluribus. sed quot homines, tot sententiae; falli igitur possumus.

Quam ob rem tandem, inquit, non satisfacit? te enim iudicem aequum puto, modo quae dicat ille bene noris.

    [xml]
    <?xml version="1.0" encoding="UTF-8"?>
    
    <!-- http://www.phpunit.de/manual/current/en/appendixes.configuration.html -->
    <phpunit
        backupGlobals               = "false"
        backupStaticAttributes      = "false"
        colors                      = "true"
        convertErrorsToExceptions   = "true"
        convertNoticesToExceptions  = "true"
        convertWarningsToExceptions = "true"
        processIsolation            = "false"
        stopOnFailure               = "false"
        syntaxCheck                 = "false"
        bootstrap                   = "bootstrap.php.cache" >
        
        <testsuites>
            <testsuite name="Project Test Suite">
                <directory>../src/*/*Bundle/Tests</directory>
                <directory>../src/*/Bundle/*Bundle/Tests</directory>
            </testsuite>
        </testsuites>
        
        <!--
        <php>
            <server name="KERNEL_DIR" value="/path/to/your/app/" />
        </php>
        -->
        
        <filter>
            <whitelist>
                <directory>../src</directory>
                <exclude>
                    <directory>../src/*/*Bundle/Resources</directory>
                    <directory>../src/*/*Bundle/Tests</directory>
                    <directory>../src/*/Bundle/*Bundle/Resources</directory>
                    <directory>../src/*/Bundle/*Bundle/Tests</directory>
                </exclude>
            </whitelist>
        </filter>
        
    </phpunit>

Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum **miraretur ille quidem utrumque**, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.

## Proin vel **pretium** nulla ##

Quid igitur est? inquit; audire enim cupio, quid non probes. Principio, inquam, in physicis, quibus maxime gloriatur, primum totus est alienus. Democritea dicit perpauca mutans, sed ita, ut ea, quae corrigere vult, mihi quidem depravare videatur.

Ille atomos quas appellat, id est corpora individua propter soliditatem, censet in infinito inani, in quo nihil nec summum nec infimum nec medium nec ultimum nec extremum sit, ita ferri, ut concursionibus inter se cohaerescant, ex quo efficiantur ea, quae sint quaeque cernantur, omnia, eumque motum atomorum nullo a principio, sed ex aeterno tempore intellegi convenire.

Epicurus autem, in quibus sequitur Democritum, non fere labitur. quamquam utriusque cum multa non probo, tum illud in primis, quod, cum in rerum natura duo quaerenda sint, unum, quae materia sit, ex qua quaeque res efficiatur, alterum, quae vis sit, quae quidque efficiat, de materia disseruerunt, vim et causam efficiendi reliquerunt. sed hoc commune vitium, illae Epicuri propriae ruinae: censet enim eadem illa individua et solida corpora ferri deorsum suo pondere ad lineam, hunc naturalem esse omnium corporum motum.

Deinde ibidem homo acutus, cum illud ocurreret, si omnia deorsus e regione ferrentur et, ut dixi, ad lineam, numquam fore ut atomus altera alteram posset attingere itaque ** attulit rem commenticiam: declinare dixit atomum perpaulum, quo nihil posset fieri minus; ita effici complexiones et copulationes et adhaesiones atomorum inter se, ex quo efficeretur mundus omnesque partes mundi, quaeque in eo essent.

### Duis nec mi eu odio `dictum posuere` sed sed lorem ###

Quae cum tota res (est) ficta pueriliter, tum ne efficit [quidem], quod vult. nam et ipsa declinatio ad libidinem fingitur -- ait enim declinare atomum sine causa; quo nihil turpius physico, quam fieri quicquam sine causa dicere, -- et illum motum naturalem omnium ponderum, ut ipse constituit, e regione inferiorem locum petentium sine causa eripuit atomis nec tamen id, cuius causa haec finxerat, assecutus est.

Nam si omnes atomi declinabunt, nullae umquam cohaerescent, sive aliae declinabunt, aliae suo nutu recte ferentur, primum erit hoc quasi, provincias atomis dare, quae recte, quae oblique ferantur, deinde eadem illa atomorum, in quo etiam Democritus haeret, turbulenta concursio hunc mundi ornatum efficere non poterit.

![Nunc malesuada justo vitae lacus pharetra at lobortis lorem accumsan](image-small.png)

Ne illud quidem physici, credere aliquid esse minimum, quod profecto numquam putavisset, si a Polyaeno, familiari suo, geometrica discere maluisset quam illum etiam ipsum dedocere. Sol Democrito magnus videtur, quippe homini erudito in geometriaque perfecto, huic pedalis fortasse; tantum enim esse censet, quantus videtur, vel paulo aut maiorem aut minorem.