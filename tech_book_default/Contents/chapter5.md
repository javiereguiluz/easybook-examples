# Donec tincidunt interdum elit #

Ad ea cum accedit, ut neque divinum numen horreat nec praeteritas voluptates
effluere patiatur earumque assidua recordatione laetetur, quid est, **quod huc
possit**, quod melius sit, accedere? Statue contra aliquem confectum tantis
animi corporisque doloribus, quanti in hominem maximi cadere possunt, nulla spe
proposita fore levius aliquando, nulla praeterea neque praesenti nec expectata
voluptate, quid eo miserius dici aut fingi potest?

Quodsi vita doloribus referta maxime fugienda est, summum profecto malum est
vivere cum dolore, cui sententiae consentaneum est ultimum esse bonorum eum
voluptate vivere. *Nec enim habet nostra mens* quicquam, ubi consistat tamquam
in extremo, omnesque et metus et aegritudines ad dolorem referuntur, nec
praeterea est res ulla, quae sua natura aut sollicitare possit aut angere.

    [php]
    <?php
    
    namespace Acme\DemoBundle;
    
    use Symfony\Component\EventDispatcher\Event;
    use Symfony\Component\HttpKernel\HttpKernelInterface;
    use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
    use Acme\DemoBundle\Twig\Extension\DemoExtension;
    
    class ControllerListener
    {
        protected $extension;
        
        public function __construct(DemoExtension $extension)
        {
            $this->extension = $extension;
        }
        
        public function onKernelController(FilterControllerEvent $event)
        {
            if (HttpKernelInterface::MASTER_REQUEST === 
                $event->getRequestType()) {
                $this->extension->setController($event->getController());
            }
        }
    }

Praeterea et appetendi et refugiendi et omnino rerum [gerendarum
initia](http://easybook-project.org) proficiscuntur aut a voluptate aut a
dolore. quod cum ita sit, perspicuum est omnis rectas res atque laudabilis eo
referri, ut cum voluptate vivatur. quoniam autem id est vel summum bonorum vel
ultimum vel extremum -- quod Graeci telos nominant --, quod ipsum nullam ad
aliam rem, ad id autem res referuntur omnes, *fatendum est summum* esse bonum
iucunde vivere.

## Curabitur vel ipsum mauris, in congue lorem ##

Id qui in una virtute ponunt et splendore nominis capti quid natura postulet
non intellegunt, errore maximo, si Epicurum audire voluerint, liberabuntur:
istae enim vestrae eximiae pulchraeque virtutes nisi voluptatem efficerent,
quis eas aut laudabilis aut expetendas arbitraretur?

Ut enim medicorum scientiam **non ipsius artis, sed bonae** valetudinis causa
probamus, et gubernatoris ars, quia bene navigandi rationem habet, utilitate,
non arte laudatur, sic sapientia, quae ars vivendi putanda est, non
expeteretur, si nihil efficeret; nunc expetitur, quod est tamquam artifex
conquirendae et comparandae voluptatis --

    [ruby]
    require 'active_model'
    
    class Person
      include ActiveModel::Conversion
      include ActiveModel::Validations
      
      validates_presence_of :name
      
      attr_accessor :name
      
      def initialize(attributes = {})
        @name = attributes[:name]
      end
      
      def persist
        @persisted = true
      end
      
      def persisted?
        @persisted
      end
    end
    
    person1 = Person.new
    p person1.valid?
    person1.errors
    
    person2 = Person.new(:name => "matz")
    p person2.valid?

Quam autem ego dicam voluptatem, iam videtis, ne invidia verbi labefactetur
oratio mea --. nam cum ignoratione rerum bonarum et malarum maxime hominum vita
vexetur, ob eumque errorem et voluptatibus maximis saepe priventur et
durissimis animi doloribus torqueantur, sapientia est adhibenda, quae et
terroribus cupiditatibusque detractis et omnium falsarum opinionum temeritate
derepta certissimam se nobis ducem praebeat ad voluptatem.

### Etiam facilisis bibendum placerat ###

Sapientia enim est una, quae maestitiam pellat ex animis, quae nos exhorrescere
metu non sinat. qua praeceptrice in tranquillitate vivi potest omnium cupiditatum ardore restincto. cupiditates enim sunt insatiabiles, quae non modo
singulos homines, sed universas familias evertunt, totam etiam labefactant
saepe rem publicam.

Ex cupiditatibus odia, discidia, discordiae, seditiones, bella nascuntur, nec
eae se foris solum iactant nec tantum in alios caeco impetu incurrunt:

  * Sed intus etiam in animis inclusae inter se dissident
  * Atque discordant, ex quo vitam amarissimam necesse est effici
  * Ut sapiens solum amputata circumcisaque inanitate
  * Omni et errore naturae finibus contentus sine aegritudine possit et sine
    metu vivere

### Maecenas vitae purus in nisl consectetur sodales ###

Quae est enim aut utilior aut ad bene vivendum aptior partitio quam illa, qua
est usus Epicurus? qui unum genus posuit earum cupiditatum, quae essent et
naturales et necessariae, alterum, quae naturales essent nec tamen necessariae,
tertium, quae nec naturales nec necessariae.

Quarum ea ratio est, ut necessariae nec opera multa nec impensa expleantur; ne
naturales quidem multa desiderant, propterea quod ipsa natura divitias, quibus
contenta sit, et parabilis et terminatas habet; inanium autem cupiditatum nec
modus ullus nec finis inveniri potest.

    [python]
    from django.conf import settings
    from django.middleware.csrf import get_token
    from django.utils.functional import lazy
    
    def csrf(request):
        """
        Context processor that provides a CSRF token, or the string
        'NOTPROVIDED' if it has not been provided by either a view
        decorator or the middleware
        """
        def _get_val():
            token = get_token(request)
            if token is None:
                # In order to be able to provide debugging info in the
                # case of misconfiguration, we use a sentinel value
                # instead of returning an empty dict.
                return 'NOTPROVIDED'
            else:
                return token
        _get_val = lazy(_get_val, str)
        
        return {'csrf_token': _get_val() }
        
    def debug(request):
        "Returns context variables helpful for debugging."
        context_extras = {}
        if settings.DEBUG and request.META.get('REMOTE_ADDR')
           in settings.INTERNAL_IPS:
            context_extras['debug'] = True
            from django.db import connection
            context_extras['sql_queries'] = connection.queries
        return context_extras

Quodsi vitam omnem perturbari videmus errore et inscientia, sapientiamque esse
solam, quae nos a libidinum impetu et a formidinum terrore vindicet et ipsius
fortunae modice ferre doceat iniurias et omnis monstret vias, quae ad quietem
et ad tranquillitatem ferant, quid est cur dubitemus dicere et sapientiam
propter voluptates expetendam et insipientiam propter molestias esse fugiendam?

Eademque ratione ne temperantiam quidem propter se expetendam esse dicemus, sed
quia pacem animis afferat et eos quasi concordia quadam placet ac leniat.
temperantia est enim, quae in rebus aut expetendis aut fugiendis ut rationem
sequamur monet. nec enim satis est iudicare quid faciendum non faciendumve sit,
sed stare etiam oportet in eo, quod sit iudicatum.

## Fusce sodales, ligula eu mattis mattis ##

Plerique autem, quod tenere atque servare id, quod ipsi statuerunt, non
possunt, victi et debilitati obiecta specie voluptatis tradunt se libidinibus
constringendos nec quid eventurum sit provident ob eamque causam propter
voluptatem et parvam **et non necessariam et quae** vel aliter pararetur et qua
etiam carere possent sine dolore tum in morbos gravis, tum in damna, tum in
dedecora incurrunt, saepe etiam legum iudiciorumque poenis obligantur.

Qui autem ita frui volunt voluptatibus, ut nulli *propter eas consequantur*
dolores, et qui suum iudicium retinent, ne voluptate victi faciant id, quod
sentiant non esse faciendum, ii voluptatem maximam adipiscuntur praetermittenda
voluptate. idem etiam dolorem saepe perpetiuntur, ne, si id non faciant,
incidant in maiorem. ex quo intellegitur nec intemperantiam propter se esse
fugiendam temperantiamque expetendam, non quia voluptates fugiat, sed quia
maiores consequatur.

![Proin vel pretium nulla](image-normal.png)

Eadem fortitudinis ratio reperietur. Nam neque laborum perfunctio neque
perpessio dolorum per se ipsa allicit nec patientia nec assiduitas nec vigiliae
nec ea ipsa, quae laudatur, industria, ne fortitudo quidem, sed ista sequimur,
ut sine cura metuque vivamus animumque et corpus, quantum efficere possimus,
molestia liberemus http://easybook-project.org

## Maecenas vitae purus in nisl consectetur sodales ##

Ut enim mortis metu omnis quietae vitae status perturbatur, et ut succumbere
doloribus eosque humili animo inbecilloque ferre miserum est, ob eamque
debilitatem animi multi parentes, multi amicos, non nulli patriam, plerique
autem se ipsos penitus perdiderunt, sic robustus animus et excelsus omni est
liber cura et angore, cum et mortem contemnit, qua qui affecti sunt in eadem
causa sunt:

  1. Qua ante quam nati, et ad dolores ita paratus est
  2. Ut meminerit maximos *morte finiri*, parvos multa habere
  3. Intervalla requietis, mediocrium nos **esse dominos**, ut, si tolerabiles
     sint
  4. Feramus, si minus, animo aequo e vita, cum ea non placeat
  5. Tamquam e theatro exeamus

Quibus rebus intellegitur nec timiditatem ignaviamque vituperari nec
fortitudinem patientiamque laudari suo nomine, sed illas reici, quia dolorem
pariant, has optari, quia voluptatem.

    [html]
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet">
        <link href="assets/js/google-code-prettify/prettify.css" 
              rel="stylesheet">
        
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" 
              href="assets/ico/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" 
              href="assets/ico/apple-touch-icon-114x114.png">
      </head>
      
      <body data-spy="scroll" data-target=".subnav" data-offset="50">
      <!-- ... -->
      </body>
    </html>

Iustitia restat, ut de omni virtute sit dictum. sed similia fere dici possunt.
Ut enim sapientiam, temperantiam, fortitudinem copulatas esse docui cum
voluptate, ut ab ea nullo modo nec divelli nec distrahi possint, sic de
iustitia iudicandum est, quae non modo numquam nocet cuiquam, sed contra semper
afficit cum vi sua atque natura, quod tranquillat animos, tum spe nihil earum
rerum defuturum, quas natura non depravata desiderat.

![Sed vulputate, lectus congue sodales vestibulum, magna nisi suscipit dui, ut rutrum justo tortor vel erat](image-normal.png)

Quem ad modum temeritas et libido et ignavia semper animum excruciant et semper
sollicitant turbulentaeque sunt, sic [inprobitas si] cuius in mente consedit,
hoc ipso, quod adest, turbulenta est; si vero molita quippiam est, quamvis
occulte fecerit, numquam tamen id confidet fore semper occultum. plerumque
improborum facta primo suspicio insequitur, dein sermo atque fama, tum
accusator, tum iudex.