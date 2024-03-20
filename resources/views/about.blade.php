@extends('layouts.app')
@section('title','تواصلوا معنا')

@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb" id="about-us" style="background-image: url('{{asset('assets/images/banner/header-shape.jpg')}}');background-position: center">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h1 class="ph-title">{{__('About')}}</h1>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section padding-tb " id="">
        <div class="container">
            <div class="accordion" id="accordionExample">

                @if(config('app.locale') == 'fr')
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                {{__('Le nom')}}
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <p>L’acronyme « AMMALE » est la traduction en langue anglaise du nom complet détaillé, à savoir l’Alliance des mosquées, associations et leaders musulmans en Europe. La prononciation de l’acronyme se fait en français. Le sens de L’acronyme s’entend en arabe il veut dire espoir !</p>

                            </div>
                        </div>
                    </div>
                @endif

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('WhoWeAre')}}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse @if(config('app.locale') == 'fr') collapse @else collapse show @endif " data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if(config('app.locale') == 'fr')
                                <p>AMMALE est une association indépendante dont le siège principal est à Paris, elle disposera de filiales dans certains pays européens, à commencer par la capitale Bruxelles.
                                    Elle a été lancée par des individus et des représentants d’institutions islamiques, venant de 17 pays européens, réunis lors de l'Assemblée Constituante tenue le samedi 7 octobre 2023, au siège de la Grande Mosquée de Paris.
                                    Elle a été agréée par les autorités françaises le 17 novembre 2023, 11 jours après la deuxième session de l'Assemblée constituante.
                                </p>
                            @else
                                <p>مؤسسة مستقلة مقرها الرئيسي باريس ، وستكون لديها مقار فرعية في بعض الدول الأوروبية،بدءا بالعاصمة بروكسيل.وضع لبنتها الأولى الأفراد ومندوبو المؤسسات الإسلامية الذين إجتمعوا في المجلس التأسيسي المنعقد في يوم السبت 22 ربيع الأول 1445 هجري الموافق 7 أكتوبر 2023 ميلادي في مقر مسجد باريس الكبير،قادمين من 17 دولة أوروبية.تم اعتمادها من قبل السلطات الفرنسية في 17 نوفمبر 2023،بعد انعقاد الجلسة الثانية للجمعية العامة التأسيسية في السادس من نفس الشهر.</p>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{__('Vision')}}
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            @if(config('app.locale') == 'fr')
                                <p>Excellence au service des centres islamiques pour les faire progresser et développer leurs performances.</p>
                            @else
                                <p>التميز في خدمة المراكز الإسلامية للارتقاء بها وتطوير أداءها.</p>
                            @endif


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                            {{__('Message')}}
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">


                            @if(config('app.locale') == 'fr')
                                <p>Renforcer le rôle des centres islamiques en Europe, développer leurs moyens et élargir la portée de leur travail, pour répondre aux besoins et aux aspirations des musulmans européens et jouer un rôle de pionnier au sein des institutions de la société civile européenne.</p>
                            @else
                                <p>الارتقاء بدور المراكز الإسلامية في أوروبا، وتطوير وسائلها، وتوسيع نطاق أعمالها، لتستجيب لحاجات وتطلعات مسلمي أوروبا، وللقيام بدور ريادي ضمن مؤسسات المجتمع المدني الأوروبي.</p>
                            @endif


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                            {{__('Goals')}}
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if(config('app.locale') == 'fr')
                                <ol class="lh-lg">
                                    <li>Unifier la parole des compétences musulmanes et des institutions islamiques culturelles et intellectuelles en Europe, rapprocher leurs visions autour des questions d’intérêt pour le Conseil.</li>
                                    <li>Suivre les affaires islamiques en général et les affaires des minorités musulmanes, défendre la dignité des musulmans et leurs droits moraux et matériels par tous les moyens légaux et licites.</li>
                                    <li>Renforcer le dialogue et la coexistence entre les adeptes des religions et des cultures en Europe de sorte à garantir la préservation de l’identité musulmane.</li>
                                    <li>Renforcer l’intégration positive et les valeurs de la citoyenneté.</li>
                                    <li>Renforcer les moyens de faire connaître l’islam, sa modération tolérante et ses valeurs humaines universelles.</li>
                                    <li>Renforcer la communication, le dialogue, la coordination et la coopération entre les institutions islamiques et avec les instances officielles et civiles publiques.</li>
                                    <li>Renforcer l’approche médiane de l’Islam en Europe.</li>
                                    <li>Faire face aux manifestations du fanatisme et de l’extrémisme intellectuel et les corriger par les moyens possibles.</li>
                                    <li>Recenser les manifestations de l’islamophobie et les actes anti–musulmans ainsi que toutes les manifestations d’intolérance, de discrimination et de racisme et contribuer à les combattre légalement et sur le terrain par les moyens règlementaires possibles.</li>
                                    <li>Collecter les informations, les rapports, les évènements et les statistiques sur l’islam et les musulmans en Europe.</li>
                                    <li>Œuvrer à satisfaire les besoins des musulmans en Europe pour l’exercice de leur culte, leurs rites et leurs activités religieuses de manière légale.</li>
                                    <li>Renforcer les programmes d’enseignement de la langue arabe, de l’éducation islamique et du Saint Coran. </li>
                                    <li>Développer des plateformes de dialogue transparent et constructif avec toutes les composantes de la société européenne à même de servir l’intérêt des minorités musulmanes.</li>
                                    <li>Création d’institutions, organisations et associations au service des musulmans et de la société en Europe dans les domaines scientifique, intellectuel, socioculturel, éducatif et médiatique et autres.</li>
                                </ol>
                            @else
                                <ol class="lh-lg">
                                    <li>جمع كلمة الكفاءات المسلمة والمؤسسات الإسلامية والثقافية والفكرية للمسلمين في أوروبا، وتقريب رؤيتها حول القضايا التي يهتم بها المجلس.</li>
                                    <li>متابعة الشؤون الإسلامية العامة، وشؤون الأقليات المسلمة، والدفاع عن كرامة المسلمين وحقوقهم المعنوية والمادية، بجميع الوسائل القانونية والمشروعة.</li>
                                    <li>تعزيز الحوار والتعايش بين أتباع الأديان والثقافات في أوروبا، بما يضمن المحافظة على الهوية الإسلامية.</li>
                                    <li>تعزيز الإندماج الإيجابي ، وقيم المواطنة الصالحة.</li>
                                    <li>تعزيز وسائل التعريف بالإسلام ووسطيته السمحة وقيمه الإنسانية العالمية.</li>
                                    <li>تعزيز التواصل والحوار والتنسيق والتعاون بين المؤسسات الإسلامية بعضها ببعض ومع الهيئات الرسمية والمدنية العامة.</li>
                                    <li>إنشاء وتطوير أدوات وموارد وقفية لدعم بناء المساجد والمراكز والمؤسسات الإسلامية في أوروبا،وتشغيلها وصيانتها وتدريب منسوبيتها وتطوير كفاءتهم.</li>
                                    <li>المحافظة عىل الأوقاف الإسلامية القديمة والحديثة و دعمها و صيانتها و تعزيز وسائل الانتفاع بها .</li>
                                    <li>تعزيز المنهج الوسطي للإسلام الحنيف في أوروبا.</li>
                                    <li>مواجهة مظاهر الغلو والتطرف الفكري وتصحيحها بالوسائل الممكنة.</li>
                                    <li>رصد مظاهر الإسلاموفوبيا والأعمال المعادية للمسلمين وجميع مظاهر التعصب والتمييز والعنصرية، والإسهام في مكافحتها قانونيا وميدانيا وبالوسائل الممكنة والنظامية.</li>
                                    <li>رصد المعلومات والتقارير والمناشط والأحصاءات حول الإسلام والمسلمين في أوروبا.</li>
                                    <li>.العمل على تلبية إحتياجات المسلمين في أوروبا لممارسة عباداتهم وشعائرهم ومعاملاتهم الدينية على الوجه الشرعي.</li>
                                    <li>تعزيز برامج تعليم اللغة العربية والتربية الإسلامية والقرآن الكريم.</li>
                                    <li>الإسهام في تعزيز مشاركة المسلمين الإيجابية في الحياة السياسية والإقتصادية والإجتماعية والثقافية المقبولة في الدول الأوروبية.</li>
                                    <li>تطوير منصات حوار شفاف وبناء مع جميع مكونات المجتمع الأوروبي بما يخدم مصالح الأقليات الإسلامية.</li>
                                    <li>تأسيس المؤسسات والهيئات والجمعيات لخدمة المسلمين والمجتمع في أوروبا في المجالات العلمية والفكرية والإجتماعية والثقافية،والتربوية،والإعلامية،وغيرها.</li>
                                </ol>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                            {{__('Methods')}}
                        </button>
                    </h2>
                    @if(config('app.locale') == 'fr')
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body faith-section">
                                <div class="faith-content">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="one" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">1</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>La participation à la représentation des musulmans dans toutes les instances officielles et civiles et les évènements publics liés à la religion musulmane et aux affaires des minorités musulmanes, aux débats publics et dans les médias dans le respect total du travail des grandes organisations ou de celles qui représentent les musulmans dans chaque pays et la coordination avec elles.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="two" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">2</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>La participation aux instances de dialogue créées à l’initiative des autorités publiques ou des organisations civiles en Europe.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="three" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">3</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>La participation aux instances de dialogue créées à l’initiative des autorités publiques ou des organisations civiles en Europe.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="four" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">4</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>Organisation d’évènements religieux, scientifiques, intellectuels, socioculturels, éducatifs et médiatiques servant les objectifs du Conseil.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="five" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">5</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>Mise en place de partenariat de travail et de coopération avec les institutions islamiques internationales, européennes et nationales officielles et civiles pour la formation des imams, des prédicateurs et des leaders musulmans, leur entraînement et leur qualification.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="six" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">6</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>Organisation de colloques et d’évènements, de sessions de formation et d’instruction autour de l’islam destinées aux non musulmans, notamment ceux qui activent dans les domaines politique, médiatique, scientifique et au service de la société.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="seven" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">7</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>Edition de publications et de matériaux audio-visuels et électroniques qui servent les objectifs du Conseil.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eight" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">8</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>Intenter des actions devant les juridictions européennes sur décision du conseil d’administration, après consultation des spécialistes pour réclamer ou se défendre dans les litiges civils, pénaux ou juridiques concernant tout évènement ou fait influant sur les intérêts moraux et matériels du Conseil de coordination AMMALE ou ses membres ou les minorités musulmanes à l’instar de la lutte contre la discrimination envers les musulmans, le racisme, la xénophobie et toutes les formes d’extrémisme.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nine" role="tabpanel"
                                             aria-labelledby="one-tab">
                                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                                <div class="lab-inner d-flex align-items-center">
                                                    <div class="lab-thumb">
                                                        <span class="display-1 fw-bolder">9</span>
                                                    </div>
                                                    <div class="lab-content">
                                                        <p>Soutenir tout autre moyen juridique ou institutionnel à même de contribuer à la réalisation de l’objectif visé à travers ce règlement.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="one-tab" data-bs-toggle="pill" href="#one"
                                               role="tab" aria-controls="one-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">1</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="two-tab" data-bs-toggle="pill" href="#two"
                                               role="tab" aria-controls="one-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">2</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="three-tab" data-bs-toggle="pill" href="#three"
                                               role="tab" aria-controls="three-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">3</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="four-tab" data-bs-toggle="pill" href="#four"
                                               role="tab" aria-controls="four-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">4</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="five-tab" data-bs-toggle="pill" href="#five"
                                               role="tab" aria-controls="five-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">5</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="six-tab" data-bs-toggle="pill" href="#six"
                                               role="tab" aria-controls="six-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">6</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="seven-tab" data-bs-toggle="pill" href="#seven"
                                               role="tab" aria-controls="seven-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">7</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="eight-tab" data-bs-toggle="pill" href="#eight"
                                               role="tab" aria-controls="eight-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">8</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="nine-tab" data-bs-toggle="pill" href="#nine"
                                               role="tab" aria-controls="nine-tab" aria-selected="true">
                                                <span class="display-6 fw-bolder text-dark">9</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body faith-section">
                            <div class="faith-content">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="one" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">1</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>المشاركة في تمثيل المسليمن قي جميغ الهيئات الرسمية والمدنية وقي المناسبات المتعلقة بالدين الإسلامي وبشؤؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإخترام التام لغمل المؤسسات العامة المتعلقة بالدين الإسلامي وبشؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإحترام التام لعمل المؤسسات الكبرى او نمثل المسلمين في كل دولة والتنيسق معها التعاون مع الهيئات المختلفة في الدول الأوروبية للمساهمة في بلورة السياسات العامة للدول</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="one" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">1</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>المشاركة في تمثيل المسليمن قي جميغ الهيئات الرسمية والمدنية وقي المناسبات المتعلقة بالدين الإسلامي وبشؤؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإخترام التام لغمل المؤسسات العامة المتعلقة بالدين الإسلامي وبشؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإحترام التام لعمل المؤسسات الكبرى او نمثل المسلمين في كل دولة والتنيسق معها التعاون مع الهيئات المختلفة في الدول الأوروبية للمساهمة في بلورة السياسات العامة للدول</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="two" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">2</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>المشاركة في الهيئات الحوارية التي يتم إنشاؤها بمبادرة من السلطات العامة أو الهيئات المدنية في أوروبا</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="three" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">3</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>التعاون مع الهيئات المختلفة في الدول الأوروبية للمساهمة في بلورة السياسات العامة للدول.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="four" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">4</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>تنظيم الفعاليات الدينية والعلمية والفكرية والاجتماعية والثقافية والتربوية، والإعلامية التي تخدم أهداف المجلس.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="five" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">5</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>بناء شراكات عمل وتعاون مع المؤسسات الإسلامية الدولية والأوروبية والوطنية الرسمية والمدنية لتكوين الأئمة والدعاة، والقيادات المسلمة وتأهيلهم وتدريبهم.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="six" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">6</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>إعلامية والعلمية وخدمة المجمع  تنظيم المؤتمرات والفعاليات وعقد الدورات التدريبية والتثقيفية حول الإسلام لغير المسلمين، خاصة العاملين في الميادين السياسية</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="seven" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">7</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p> إصدار المطبوعات والمواد المسموعة والمرئية والإلكترونية التي تخدم أهداف المجلس.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="eight" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">8</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>رفع الدعاوي أمام المحاكم الأوروبية بقرار من المجلس الإداري وبالتشاور مع أهل الإختصاص للمطالبة أو الدفاع في النزاعات المدنية أو الجنائية أو القانونية التي تخص أي حدث أو فعل يؤثر على المصالح المعنوية المادية للمجلس التنسيقي أمال أو على أعضائه أو على الأقليات المسلمة كمكافحة التمييز ضد المسلمين والعنصرية وكراهية الأجانب وجميع أشكال التعصب. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nine" role="tabpanel"
                                         aria-labelledby="one-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <span class="display-1 fw-bolder">9</span>
                                                </div>
                                                <div class="lab-content">
                                                    <p>دعم أي وسيلة قانونية ونظامية أخرى من شأنها الاسهام في تحقيق الهدف المنصوص عليه في هذا النظام.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="one-tab" data-bs-toggle="pill" href="#one"
                                           role="tab" aria-controls="one-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="two-tab" data-bs-toggle="pill" href="#two"
                                           role="tab" aria-controls="one-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="three-tab" data-bs-toggle="pill" href="#three"
                                           role="tab" aria-controls="three-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="four-tab" data-bs-toggle="pill" href="#four"
                                           role="tab" aria-controls="four-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">4</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="five-tab" data-bs-toggle="pill" href="#five"
                                           role="tab" aria-controls="five-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">5</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="six-tab" data-bs-toggle="pill" href="#six"
                                           role="tab" aria-controls="six-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">6</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="seven-tab" data-bs-toggle="pill" href="#seven"
                                           role="tab" aria-controls="seven-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">7</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="eight-tab" data-bs-toggle="pill" href="#eight"
                                           role="tab" aria-controls="eight-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">8</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="nine-tab" data-bs-toggle="pill" href="#nine"
                                           role="tab" aria-controls="nine-tab" aria-selected="true">
                                            <span class="display-6 fw-bolder text-dark">9</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End Here -->


    <!-- Faith section start here -->
{{--    <section class="faith-section padding-tb shape-3">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="header-title">--}}
{{--                        <h2>الوسائل</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="faith-content">--}}
{{--                        <div class="tab-content" id="pills-tabContent">--}}
{{--                            <div class="tab-pane fade show active" id="one" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">1</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>المشاركة في تمثيل المسليمن قي جميغ الهيئات الرسمية والمدنية وقي المناسبات المتعلقة بالدين الإسلامي وبشؤؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإخترام التام لغمل المؤسسات العامة المتعلقة بالدين الإسلامي وبشؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإحترام التام لعمل المؤسسات الكبرى او نمثل المسلمين في كل دولة والتنيسق معها التعاون مع الهيئات المختلفة في الدول الأوروبية للمساهمة في بلورة السياسات العامة للدول</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="one" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">1</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>المشاركة في تمثيل المسليمن قي جميغ الهيئات الرسمية والمدنية وقي المناسبات المتعلقة بالدين الإسلامي وبشؤؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإخترام التام لغمل المؤسسات العامة المتعلقة بالدين الإسلامي وبشؤن الأقليات المسلمة وقي المناقشات العامة وقي وسائل الإعلام مع الإحترام التام لعمل المؤسسات الكبرى او نمثل المسلمين في كل دولة والتنيسق معها التعاون مع الهيئات المختلفة في الدول الأوروبية للمساهمة في بلورة السياسات العامة للدول</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="two" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">2</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>المشاركة في الهيئات الحوارية التي يتم إنشاؤها بمبادرة من السلطات العامة أو الهيئات المدنية في أوروبا</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="three" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">3</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>التعاون مع الهيئات المختلفة في الدول الأوروبية للمساهمة في بلورة السياسات العامة للدول.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="four" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">4</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>تنظيم الفعاليات الدينية والعلمية والفكرية والاجتماعية والثقافية والتربوية، والإعلامية التي تخدم أهداف المجلس.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="five" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">5</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>بناء شراكات عمل وتعاون مع المؤسسات الإسلامية الدولية والأوروبية والوطنية الرسمية والمدنية لتكوين الأئمة والدعاة، والقيادات المسلمة وتأهيلهم وتدريبهم.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="six" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">6</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>إعلامية والعلمية وخدمة المجمع  تنظيم المؤتمرات والفعاليات وعقد الدورات التدريبية والتثقيفية حول الإسلام لغير المسلمين، خاصة العاملين في الميادين السياسية</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="seven" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">7</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p> إصدار المطبوعات والمواد المسموعة والمرئية والإلكترونية التي تخدم أهداف المجلس.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="eight" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">8</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>رفع الدعاوي أمام المحاكم الأوروبية بقرار من المجلس الإداري وبالتشاور مع أهل الإختصاص للمطالبة أو الدفاع في النزاعات المدنية أو الجنائية أو القانونية التي تخص أي حدث أو فعل يؤثر على المصالح المعنوية المادية للمجلس التنسيقي أمال أو على أعضائه أو على الأقليات المسلمة كمكافحة التمييز ضد المسلمين والعنصرية وكراهية الأجانب وجميع أشكال التعصب. </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="nine" role="tabpanel"--}}
{{--                                 aria-labelledby="one-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <span class="display-1 fw-bolder">9</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <p>دعم أي وسيلة قانونية ونظامية أخرى من شأنها الاسهام في تحقيق الهدف المنصوص عليه في هذا النظام.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"--}}
{{--                            role="tablist">--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link active" id="one-tab" data-bs-toggle="pill" href="#one"--}}
{{--                                   role="tab" aria-controls="one-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">1</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="two-tab" data-bs-toggle="pill" href="#two"--}}
{{--                                   role="tab" aria-controls="one-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">2</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="three-tab" data-bs-toggle="pill" href="#three"--}}
{{--                                   role="tab" aria-controls="three-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">3</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="four-tab" data-bs-toggle="pill" href="#four"--}}
{{--                                   role="tab" aria-controls="four-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">4</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="five-tab" data-bs-toggle="pill" href="#five"--}}
{{--                                   role="tab" aria-controls="five-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">5</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="six-tab" data-bs-toggle="pill" href="#six"--}}
{{--                                   role="tab" aria-controls="six-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">6</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="seven-tab" data-bs-toggle="pill" href="#seven"--}}
{{--                                   role="tab" aria-controls="seven-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">7</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="eight-tab" data-bs-toggle="pill" href="#eight"--}}
{{--                                   role="tab" aria-controls="eight-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">8</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="nine-tab" data-bs-toggle="pill" href="#nine"--}}
{{--                                   role="tab" aria-controls="nine-tab" aria-selected="true">--}}
{{--                                    <span class="display-1 fw-bolder text-dark">9</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Faith section end here -->

    <!-- President Section start here -->
    <section class="event-section padding-tb padding-b shape-4 bg-ash" id="president">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>{{__('President')}}</h5>
                        @if(config('app.locale')  == 'fr')
                            <h2>Chems-Eddine Mohamed Hafiz</h2>
                        @else
                            <h2>شمس الدين محمد حفيز</h2>
                        @endif
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="event-content">
                        <div class="event-top tri-shape-2 pattern-2">
                            <div class="event-top-thumb">
                                <img src="{{asset('assets/images/members/hafiz.jpg')}}" alt="hafiz">
                            </div>
                            <div class="event-top-content">
                                <div class="event-top-content-wrapper">
                                    @if(config('app.locale') == 'fr')

                                            <p>Chams Al-Din Hafid est né en Algérie en 1954. Avant d'immigrer en France, il a participé à la création de l'Union des jeunes avocats algériens. Aujourd'hui, outre ses fonctions de nouveau doyen de la Grande Mosquée de Paris, il exerce depuis 2008 les fonctions de vice-président du Conseil français du culte islamique. Il est avocat de la Grande Mosquée de Paris depuis des décennies.</p>
                                            <p>Ce que l'on sait de Shams al-Din Hafid, c'est qu'il défend avec force le principe du renforcement des droits des musulmans de France quant à la pratique de leurs rituels religieux dans le cadre du respect des lois et principes de la République française, notamment dont l’important est le principe de laïcité.</p>
                                            <p>Il est à noter que l'élection de Shams al-Din Hafid au poste de doyen de la Grande Mosquée de Paris intervient quelques jours avant l'élection du président du Conseil français du culte islamique, créé en 2003 pour faciliter les relations entre les Français et les Français. Musulmans auprès des institutions étatiques françaises concernant la pratique des rituels religieux.</p>
                                    @else
                                    <p>                                        ولد شمس الدين حفيظ في الجزائر عام 1954. وشارك قبل الهجرة إلى فرنسا في تأسيس اتحاد المحامين الجزائريين الشبان. ويتولي اليوم إلى جانب مهامه كعميد جديد لمسجد باريس الكبير مهام نائب رئيس لدى مجلس الديانة الإسلامية الفرنسي وذلك منذ عام 2008. وهو منذ عقود محامي مسجد باريس الكبير.</p>
                                    <p>ومما يُعرف عن شمس الدين حفيظ أنه يدافع بقوة عن مبدأ تعزيز حقوق المسلمين في فرنسا في ما يخص ممارسة شعائرهم الدينية في إطار احترام قوانين الجمهورية الفرنسية ومبادئها ومن أهمها مبدأ العلمانية.</p>
                                    <p>يذكر أن انتخاب شمس الدين حفيظ عميدا لمسجد باريس الكبير يأتي قبل بضعة من انتخاب رئيس مجلس الديانة الإسلامية الفرنسي الذي تأسس عام 2003 لتسهيل علاقة مسلمي فرنسا مع مؤسسات الدولة الفرنسية في ما يخص ممارسة الشعائر الدينية.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- President Section end here -->


    <!-- Team section start here -->
    <section class="team-section padding-tb" id="members-office">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h2>{{__('The executive office')}}</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center gy-4 pb-10">

                        @php

                         $members =  [

                                        ["name_ar" => "شمس الدين محمد حفيز","occupation_ar" => "الرئيس","image" => "hafiz.jpg","name_fr" => "Chems-Eddine Mohamed Hafiz","occupation_fr" => "Président"],
                                        ["name_ar" => "خالد ياسين","occupation_ar" => "نائب الرئيس مكلف بالتواصل مع الهيئات الإسلامية","image" => "yassin.jpg","name_fr" => "Khaled Yassin","occupation_fr" => "Vice-président chargé des relations avec les instituions islamiques"],
                                        ["name_ar" => "أحمد بن سعد آل مفرح","occupation_ar" => "نائب الرئيس مكلف بالتواصل مع النخب الأوروبية","image" => "ahmad-mfrah.jpg","name_fr" => "Ahmed Saad Al-Mofareh","occupation_fr" => "Vice-président chargé des relations avec les élites européennes"],
                                        ["name_ar" => "عبد الصمد اليزيدي","occupation_ar" => "نائب الرئيس مكلف بالحوار الديني والإنساني","image" => "yazidi.jpg","name_fr" => "Abdassamad El Yazidi","occupation_fr" => "Vice-président chargé du dialogue religieux et humaniste"],
                                        ["name_ar" => "حسان موسى","occupation_ar" => "نائب الرئيس مكلف بالتواصل مع المسلمين","image" => "hassan.jpg","name_fr" => "Hassene Moussa","occupation_fr" => "Vice-président chargé des mosquées, wakfs et imams"],
                                        ["name_ar" => "فريد حناش","occupation_ar" => "الأمين العام","image" => "hanach.jpg","name_fr" => "Farid Hannache","occupation_fr" => "Secrétaire général"],
                                        ["name_ar" => "فايد محمد السعيد","occupation_ar" => "نائب الأمين العام","image" => "faid.webp","name_fr" => "Fayad Saeed","occupation_fr" => "Secrétaire général adjoint"],
                                        ["name_ar" => "محمد الونوغي","occupation_ar" => "أمين الصندوق","image" => "wanoghi.jpeg","name_fr" => "Mohamed Louanoughi","occupation_fr" => "Trésorier"],
                                        ["name_ar" => "نصرت رمضاني","occupation_ar" => "نائب الأمين العام","image" => "ramadan.jpg","name_fr" => "Nusret Ramadani","occupation_fr" => "Trésorier adjoint"],
                                        ["name_ar" => "أحمد تميم","occupation_ar" => "مستشار المكتب","image" => "ahmad-tamim.jpg","name_fr" => "Ahmed Tamim","occupation_fr" => "Conseiller du bureau"],
                                        ["name_ar" => "نفيع الله عشيورف","occupation_ar" => "مستشار المكتب","image" => "achirof.jpeg","name_fr" => "Nafigulla Ashirov","occupation_fr" => "Conseiller du bureau"],
                                        ["name_ar" => "حسام بن صديق خوجة","occupation_ar" => "مستشار المكتب","image" => "khoja.jpg","name_fr" => "Hussam Siddiq Khoja","occupation_fr" => "Conseiller du bureau"],
                                        ["name_ar" => "مهاجري زيان","occupation_ar" => "مستشار المكتب","image" => "ziyan.jpg","name_fr" => "Mehadjri Ziane","occupation_fr" => "Conseiller du bureau"],
                                    ]

                        @endphp


                        @foreach($members as $key => $member)
                        <div class="@if($key == 0)  col-12  @else  col-xl-3 col-lg-4 col-sm-6 col-12 @endif">
                            <div class="card text-center border-none team-item-1 pattern-2 h-100">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('assets/images/members/' . $member['image'])}}" class="card-img-top" alt="product" style="width: 200px;height: 200px;object-fit: cover;object-position: top">
                                    </div>
                                    <div class="lab-content">

                                         <h6 class="card-title mb-3">{{$member['name_' . config('app.locale')]}}</h6>

                                        <div class="social-share">
                                            <p class="card-text my-3">{{$member['occupation_' . config('app.locale')]}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section end here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section padding-tb bg-ash" id="office-posts">
        <div class="container">

            <h2 class="mb-5 text-center">{{__('The Commission')}}</h2>
            @if(config('app.locale') == 'fr')
                <div class="table-responsive">
                    <table class="table table-secondary table-striped">
                        <tbody>
                        <tr>
                            <td>Commission enseignement (complémentaire et institutionnel)</td>
                            <td>Commission chargée de la communication et la coordination avec les organisations islamiques.</td>
                        </tr>

                        <tr>
                            <td>Commission de contact avec les élites européennes (intellectuelles, médiatiques, politiques...)</td>
                            <td>Commission du dialogue religieux et humain.</td>
                        </tr>

                        <tr>
                            <td>Commission juridique.</td>
                            <td>Commission de la charia et de la religion.</td>
                        </tr>

                        <tr>
                            <td>Commission des biens Habous et de l’investissement.</td>
                            <td>Commission de l’information.</td>
                        </tr>


                        <tr>
                            <td>Commission des néo-musulmans.</td>
                            <td>Commission chargée de la rédaction, la traduction et l’édition.</td>
                        </tr>

                        <tr>
                            <td>Commission des œuvres de bienfaisance et de l’humanitaire.</td>
                            <td>Commission de la prévention et de lutte contre l’extrémisme.</td>
                        </tr>

                        <tr>
                            <td>Commission de médiation et résolution des contentieux..</td>
                            <td>Commission de l’environnement et du climat.</td>
                        </tr>

                        <tr>
                            <td>Commission des valeurs et de l’éthique.</td>
                            <td>Commission de la santé et la nutrition (traitement de la toxicomanie et la nourriture halal).</td>
                        </tr>

                        <tr>
                            <td>Commission du patrimoine et de l’histoire de l’islam.</td>
                            <td>Commission de protection des mosquées.</td>
                        </tr>

                        <tr>
                            <td>Commission des affaires sociales et de la famille.</td>
                            <td>Commission de la jeunesse.</td>
                        </tr>

                        <tr>
                            <td colspan="2">Commission des concours de récitation du coran.</td>
                        </tr>

                        <tr>
                            <td colspan="2">L’observatoire :  commission chargée de la collecte des informations, des rapports et des activités sur l’islam et les musulmans en Europe.</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-secondary table-striped">
                        <tbody>
                        <tr>
                            <td>لجنة التعليم (التكميلي والنظامي)</td>
                            <td>لجنة الإتصال والتنسيق مع الهيئات الإسلامية</td>
                        </tr>

                        <tr>
                            <td>لجنة التواصل مع النخب الأوروبية (الفكرية، الإعلامية، السياسية...)</td>
                            <td>لجنة الحوار الديني والإنساني</td>
                        </tr>

                        <tr>
                            <td>اللجنة الحقوقية</td>
                            <td>اللجنة الشرعية والدينية</td>
                        </tr>

                        <tr>
                            <td>لجنة الأوقاف الاستثمار</td>
                            <td>لجنة الإعلام</td>
                        </tr>


                        <tr>
                            <td>لجنة المسلمين الجدد</td>
                            <td>لجنة التحرير والترجمة والنشر</td>
                        </tr>

                        <tr>
                            <td>اللجنة الخيية والإنسانية</td>
                            <td>لجنة الوقاية ومكافحة التطرف</td>
                        </tr>

                        <tr>
                            <td>لجنة الوساطة وحل النزاعات</td>
                            <td>لجنة القيم والأخلاق</td>
                        </tr>

                        <tr>
                            <td>لجنة الصحة والغذاء (دواء مخدرات والغذاء الحلال)</td>
                            <td>لجنة البيئة والمناخ</td>
                        </tr>

                        <tr>
                            <td>لجنة التراث والتاريخي الإسلامي</td>
                            <td>لجنة حماية المساجد</td>
                        </tr>

                        <tr>
                            <td>لجنة الشؤون الإجتماعية والأسرة</td>
                            <td>لجنة الشباب</td>
                        </tr>

                        <tr>
                            <td colspan="2">لجنة المسابقات القرآنية</td>
                        </tr>

                        <tr>
                            <td colspan="2">المرصد: لجنة مكلفة برصد المعلومات والتقارير والمناشط حول الإسلام و المسلمين في أوروبا.</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </section>
    <!-- Feature Section End Here -->





@endsection
