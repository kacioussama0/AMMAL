@extends('layouts.app')
@section('title','تواصلوا معنا')

@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb" id="about-us" style="background-image: url('{{asset('assets/images/banner/header-shape.jpg')}}');background-position: center">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h1 class="ph-title">عن آمال</h1>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section padding-tb " id="">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            من نحن
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>مؤسسة مستقلة مقرها الرئيسي باريس ، وستكون لديها مقار فرعية في بعض الدول الأوروبية،بدءا بالعاصمة بروكسيل.وضع لبنتها الأولى الأفراد ومندوبو المؤسسات الإسلامية الذين إجتمعوا في المجلس التأسيسي المنعقد في يوم السبت 22 ربيع الأول 1445 هجري الموافق 7 أكتوبر 2023 ميلادي في مقر مسجد باريس الكبير،قادمين من 17 دولة أوروبية.تم اعتمادها من قبل السلطات الفرنسية في 17 نوفمبر 2023،بعد انعقاد الجلسة الثانية للجمعية العامة التأسيسية في السادس من نفس الشهر.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            الرؤية
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>التميز في خدمة المراكز الإسلامية للارتقاء بها وتطوير أداءها.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                            الرسالة
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>الارتقاء بدور المراكز الإسلامية في أوروبا، وتطوير وسائلها، وتوسيع نطاق أعمالها، لتستجيب لحاجات وتطلعات مسلمي أوروبا، وللقيام بدور ريادي ضمن مؤسسات المجتمع المدني الأوروبي.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                            الأهداف
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
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
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                            الوسائل
                        </button>
                    </h2>
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
                        <h5>الرئيس</h5>
                        <h2>شمس الدين محمد حفيز</h2>
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
                                    <p>                                        ولد شمس الدين حفيظ في الجزائر عام 1954. وشارك قبل الهجرة إلى فرنسا في تأسيس اتحاد المحامين الجزائريين الشبان. ويتولي اليوم إلى جانب مهامه كعميد جديد لمسجد باريس الكبير مهام نائب رئيس لدى مجلس الديانة الإسلامية الفرنسي وذلك منذ عام 2008. وهو منذ عقود محامي مسجد باريس الكبير.</p>
                                    <p>ومما يُعرف عن شمس الدين حفيظ أنه يدافع بقوة عن مبدأ تعزيز حقوق المسلمين في فرنسا في ما يخص ممارسة شعائرهم الدينية في إطار احترام قوانين الجمهورية الفرنسية ومبادئها ومن أهمها مبدأ العلمانية.</p>
                                    <p>يذكر أن انتخاب شمس الدين حفيظ عميدا لمسجد باريس الكبير يأتي قبل بضعة من انتخاب رئيس مجلس الديانة الإسلامية الفرنسي الذي تأسس عام 2003 لتسهيل علاقة مسلمي فرنسا مع مؤسسات الدولة الفرنسية في ما يخص ممارسة الشعائر الدينية.</p>
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
                        <h2>المكتب التنفيذي</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center gy-4 pb-10">

                        @php

                         $members =  [

                                        ["name" => "شمس الدين محمد حفيز","occupation" => "الرئيس","image" => "hafiz.jpg"],
                                        ["name" => "خالد ياسين","occupation" => "نائب الرئيس مكلف بالتواصل مع الهيئات الإسلامية","image" => "yassin.jpg"],
                                        ["name" => "أحمد بن سعد آل مفرح","occupation" => "نائب الرئيس مكلف بالتواصل مع النخب الأوروبية","image" => "ahmad-mfrah.jpg"],
                                        ["name" => "عبد الصمد اليزيدي","occupation" => "نائب الرئيس مكلف بالحوار الديني والإنساني","image" => "yazidi.webp"],
                                        ["name" => "حسان موسى","occupation" => "نائب الرئيس مكلف بالتواصل مع المسلمين","image" => "hassan.jpg"],
                                        ["name" => "فريد حناش","occupation" => "الأمين العام","image" => "hanach.jpeg"],
                                        ["name" => "فايد محمد السعيد","occupation" => "نائب الأمين العام","image" => "faid.webp"],
                                        ["name" => "نصرت رمضان","occupation" => "نائب الأمين العام","image" => "ramadan.jpeg"],
                                        ["name" => "محمد الونوغي","occupation" => "أمين الصندوق","image" => "wanoghi.jpeg"],
                                        ["name" => "أحمد تميم","occupation" => "مستشار المكتب","image" => "ahmad-tamim.jpg"],
                                        ["name" => "نفيع الله عشيورف","occupation" => "مستشار المكتب","image" => "achirof.jpeg"],
                                        ["name" => "حسام بن صديق خوجة","occupation" => "مستشار المكتب","image" => "khoja.jpg"],
                                        ["name" => "مهاجري زيان","occupation" => "مستشار المكتب","image" => "ziyan.jpg"],
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

                                         <h6 class="card-title mb-3">{{$member['name']}}</h6>

                                        <div class="social-share">
                                            <p class="card-text my-3">{{$member['occupation']}}</p>
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

            <h2 class="mb-5 text-center">اللجان</h2>

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
        </div>
    </section>
    <!-- Feature Section End Here -->





@endsection
