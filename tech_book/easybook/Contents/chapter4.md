# Vestibulum quis sem lacus #

## Curabitur vel ipsum mauris, in congue lorem ##

Sunt autem quidam e nostris, qui haec subtilius velint tradere et negent satis esse, quid bonum sit aut quid malum, sensu iudicari, sed animo etiam ac **ratione intellegi posse et voluptatem ipsam per se esse *expetendam et dolorem* ipsum per se esse** fugiendum.

    [twig]
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="{{ asset('bundles/acmedemo/css/demo.css') }}" type="text/css" media="all" />
            <title>{% block title %}Demo Bundle{% endblock %}</title>
            <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
        </head>
        <body>
            <div id="symfony-wrapper">
                <div id="symfony-header">
                    <a href="{{ path('_welcome') }}">
                        <img src="{{ asset('bundles/acmedemo/images/logo.gif') }}" alt="Symfony">
                    </a>
                    <form id="symfony-search" method="GET" action="http://symfony.com/search">
                        <label for="symfony-search-field"><span>Search on Symfony Website</span></label>
                        <input name="q" id="symfony-search-field" type="search" placeholder="Search on Symfony website" class="medium_txt">
                        <input type="submit" class="symfony-button-grey" value="OK" />
                    </form>
                </div>
                
                {% if app.session.flash('notice') %}
                    <div class="flash-message">
                        <em>Notice</em>: {{ app.session.flash('notice') }}
                    </div>
                {% endif %}
                
                {% block content_header %}
                    <ul id="menu">
                        {% block content_header_more %}
                            <li><a href="{{ path('_demo') }}">Demo Home</a></li>
                        {% endblock %}
                    </ul>
                    
                    <div style="clear: both"></div>
                {% endblock %}
                
                <div class="symfony-content">
                    {% block content %}
                    {% endblock %}
                </div>
                
                {% if code is defined %}
                    <h2>Code behind this page</h2>
                    <div class="symfony-content">{{ code|raw }}</div>
                {% endif %}
            </div>
        </body>
    </html>

Itaque aiunt hanc quasi naturalem atque insitam in animis nostris inesse notionem, ut alterum esse appetendum, alterum aspernandum sentiamus. Alii autem, quibus ego assentior, cum a philosophis compluribus permulta dicantur, *[cur nec voluptas in bonis](http://easybook-project.org)* sit numeranda nec in malis dolor, non existimant oportere nimium nos causae confidere, sed et argumentandum et accurate disserendum et rationibus conquisitis de voluptate et dolore disputandum putant.

![Duis mi justo, condimentum a malesuada ac, accumsan in leo](image-normal.png)

### Nunc quam dui, sodales eu vulputate ac ###

Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est.

Qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. ut enim ad **[minima veniam, quis](http://easybook-project.org)** nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?

### Duis faucibus massa non libero porttitor tristique ###

At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia *deserunt mollitia animi*, id est laborum et dolorum fuga. et harum quidem rerum facilis est et expedita distinctio.

    [css]
    /*
    Copyright (c) 2010, Yahoo! Inc. All rights reserved.
    Code licensed under the BSD License:
    http://developer.yahoo.com/yui/license.html
    version: 2.8.2r1
    
    Reset
    */
    
    html { color:#000; background:#FFF; }
    body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6,
    pre, code, form, fieldset, legend, input, button, textarea,
    p, blockquote, th, td { margin:0; padding:0; }
    table { border-collapse:collapse; border-spacing:0; }
    fieldset, img { border:0; }
    address, caption, cite, code, dfn, em, strong, th, var, optgroup {
    font-style:inherit; font-weight:inherit; }
    del, ins { text-decoration:none; } 
    li { list-style: none; } caption, th { text-align: left; }
    h1, h2, h3, h4, h5, h6 { font-size: 100%; font-weight: normal; }
    q:before, q:after { content: ''; }
    abbr, acronym { border:0; font-variant:normal; }
    sup { vertical-align:baseline; } sub { vertical-align: baseline; }
    legend { color:#000; } input, button, textarea, select, optgroup, 
    option { font-family:inherit; font-size:inherit; font-style:inherit; 
    font-weight:inherit; } input, button, textarea, select { *font-size:100%; }
    
    html, body
    {
        background-color: #EFEFEF;
    }
    
    body
    {
        font-size: 14px;
        font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
        color: #313131;
    }
    
    a
    {
        color: #08C;
        text-decoration: none;
    }
    
    a:hover
    {
        text-decoration: underline;
    }
    
    strong
    {
        font-weight: bold;
    }
    
    em
    {
        font-style: italic;
    }
    
    h1, h2, h3
    {
        font-family: Georgia, "Times New Roman", Times, serif;
        color: #404040;
    }
    
    h1
    {
        font-size: 45px;
        padding-bottom: 30px;
    }
    
    h2
    {
        font-weight: bold;
        color: #FFFFFF;
        /* Font is duplicated of body (sans-serif) */
        font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
        
        margin-bottom: 10px;
        background-color: #aacd4e;
        padding: 2px 4px;
        display: inline-block;
        text-transform: uppercase;
        
    }

Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus **asperiores repellat**.

## Maecenas vitae *purus in nisl* consectetur sodales ##

Hanc ego cum teneam sententiam, quid est cur verear, ne ad eam non possim accommodare Torquatos nostros? quos tu paulo ante cum memoriter, tum etiam erga nos amice et benivole collegisti, nec me tamen laudandis maioribus meis corrupisti nec segniorem ad respondendum reddidisti.

Quorum facta quem ad modum, quaeso, interpretaris? sicine eos censes aut in armatum hostem impetum fecisse aut in liberos atque in `sanguinem suum tam crudelis fuisse`, nihil ut de utilitatibus, nihil ut de commodis suis cogitarent? at id ne ferae quidem faciunt, ut ita ruant itaque turbent, ut earum motus et impetus quo pertineant non intellegamus, tu tam egregios viros censes tantas res gessisse sine causa?

  * Quae fuerit causa, mox videro; *interea hoc tenebo*, si ob aliquam causam ista
  * Quae sine dubio praeclara sunt, fecerint, virtutem iis per se ipsam causam non fuisse.
    * Torquem detraxit hosti.
    * Et quidem se `texit`, ne interiret.
    * At magnum periculum `adiit.`
    * In oculis quidem exercitus.
    * Quid ex eo **est consecutus?**
    * Laudem et caritatem, quae sunt *vitae sine metu degendae* praesidia firmissima.
  * Filium morte multavit.
    1. Si sine causa, nollem me ab eo ortum,
    2. Tam inportuno tamque *crudeli*; sin, ut
    3. Dolore suo **sanciret militaris** imperii
  * Disciplinam `exercitumque in gravissimo` bello animadversionis metu contineret, saluti prospexit civium, qua intellegebat contineri suam.
  * Atque haec ratio late patet.

## Etiam facilisis bibendum placerat ##

In quo enim maxime consuevit iactare vestra se oratio, tua praesertim, qui studiose antiqua persequeris, claris et fortibus viris commemorandis eorumque factis non emolumento aliquo, sed ipsius honestatis decore laudandis, id totum evertitur eo delectu rerum, quem modo dixi, constituto, ut aut voluptates omittantur maiorum `voluptatum adipiscendarum` causa aut dolores suscipiantur maiorum dolorum effugiendorum gratia.

Sed de clarorum hominum factis illustribus et gloriosis satis hoc loco dictum sit. erit enim iam de omnium virtutum cursu ad voluptatem proprius disserendi locus. nunc autem explicabo, voluptas ipsa quae qualisque sit, ut tollatur *error omnis imperitorum* intellegaturque ea, quae voluptaria, delicata, mollis habeatur disciplina, quam gravis, quam continens, quam severa sit.

### Aliquam justo tortor, mollis id lacinia vel, bibendum sed leo ###

Non enim hanc solam sequimur, quae suavitate aliqua naturam ipsam movet et cum iucunditate quadam percipitur sensibus, sed maximam voluptatem illam habemus, quae percipitur omni dolore detracto, nam quoniam, cum privamur dolore, ipsa liberatione et vacuitate omnis molestiae gaudemus, omne autem id, quo gaudemus, voluptas est, ut omne, quo offendimur, dolor, doloris omnis privatio recte nominata est voluptas. ut enim, cum cibo et potione fames sitisque depulsa est, ipsa detractio molestiae consecutionem affert voluptatis, sic in omni re doloris amotio successionem efficit voluptatis.

Itaque non placuit Epicuro medium esse quiddam inter dolorem et voluptatem; illud enim ipsum, quod quibusdam medium videretur, cum omni dolore careret, non modo voluptatem esse, verum etiam summam voluptatem. quisquis enim sentit, quem ad modum sit affectus, eum necesse est aut in voluptate esse aut in dolore. omnis autem privatione doloris putat Epicurus terminari summam voluptatem, ut postea variari voluptas distinguique possit, augeri amplificarique non possit.

### Proin vel pretium nulla ###

At etiam Athenis, ut e patre audiebam facete et urbane Stoicos irridente, statua est in Ceramico Chrysippi sedentis porrecta manu, quae manus significet illum in hae esse rogatiuncula delectatum: 'Numquidnam manus tua sic affecta, quem ad modum affecta nunc est, desiderat?' -- Nihil sane. -- 'At, si voluptas esset bonum, desideraret.' -- Ita credo. -- 'Non est igitur voluptas bonum.'

    [xml]
    <?xml version="1.0" ?>
    
    <container xmlns="http://symfony.com/schema/dic/services"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">
        
        <services>
            <service id="twig.extension.acme.demo" class="Acme\DemoBundle\Twig\Extension\DemoExtension" public="false">
                <tag name="twig.extension" />
                <argument type="service" id="twig.loader" />
            </service>
            
            <service id="acme.demo.listener" class="Acme\DemoBundle\ControllerListener">
                <tag name="kernel.event_listener" event="kernel.controller" method="onKernelController" />
                <argument type="service" id="twig.extension.acme.demo" />
            </service>
        </services>
    </container>

Hoc ne statuam quidem dicturam pater aiebat, si loqui posset. conclusum est enim contra Cyrenaicos satis acute, nihil ad Epicurum. nam si ea sola voluptas esset, quae quasi titillaret sensus, ut ita dicam, et ad eos cum suavitate afflueret et illaberetur, nec manus esse contenta posset nec ulla pars vacuitate doloris sine iucundo motu voluptatis.

Sin autem summa voluptas est, ut Epicuro placet, nihil dolere, primum tibi recte, Chrysippe, concessum est nihil desiderare manum, cum ita esset affecta, **secundum non recte**, si voluptas esset bonum, fuisse desideraturam. idcirco enim non desideraret, quia, quod dolore caret, id in voluptate est.

![Curabitur vel ipsum mauris, in congue lorem](image-big.png)

Extremum autem esse bonorum voluptatem ex hoc facillime perspici potest: Constituamus aliquem magnis, multis, perpetuis fruentem et animo et *corpore voluptatibus nullo dolore nec* impediente nec inpendente, quem tandem hoc statu praestabiliorem aut magis expetendum possimus dicere?

Inesse enim necesse est in eo, qui ita sit affectus, et firmitatem animi nec mortem nec dolorem timentis, quod mors sensu careat, dolor in *longinquitate levis*, in gravitate brevis soleat esse, ut eius magnitudinem celeritas, diuturnitatem allevatio consoletur.