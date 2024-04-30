@extends('layouts.main')

@section('content')
    <main class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Об авторе</h1>
                    <section class="edica-about-intro py-5">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-right" data-aos-delay="150">
                                <h2 class="intro-title pb-3 pb-md-0 mb-4 mb-md-0">Quick & Easy Process <span>with best features</span></h2>
                            </div>
                            <div class="col-md-6 intro-content" data-aos="fade-left" data-aos-delay="150">
                                <p><span class="first-letter">L</span>orem ipsum, or lipsum as it is   sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century.</p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="200">
                                <img src="assets/images/about-vision.png" alt="vision" class="img-fluid">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h2 class="vision-title" data-aos="fade-left">Our Vision</h2>
                                <p class="vision-text" data-aos="fade-left">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-goal py-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column justify-content-center" data-aos="fade-right">
                                <h2 class="goal-title">Our Goal</h2>
                                <p class="goal-text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-left">
                                <img src="assets/images/about-goal.png" alt="goal" class="img-fluid">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-up">Часто задаваемые вопросы</h2>
                        <div class="accordion" id="edicaAboutFaqCollapse" role="tablist" aria-multiselectable="true">
                            <div class="card" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-header" role="tab" id="edicaAboutFaq1">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent1" aria-expanded="true" aria-controls="edicaAboutFaqContent1">
                                            Давно ли Вы путешествуете? Куда была первая Ваша поездка?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent1" class="collapse in" role="tabpanel" aria-labelledby="edicaAboutFaq1">
                                    <div class="card-body">
                                        Сейчас даже затрудняюсь сказать. Вначале мы ездили всей семьей в основном на побережье Черного моря в разные места, но настоящий вкус путешествий я ощутила, когда выросла и «ветер странствий» проник в мою душу. «Блог о путешествиях» с самым банальным название, чтобы «не мудрствовать лукаво» создала лишь в 2024 году, переполнившись впечатлениями, чтобы делиться с людьми красотой и знаниями об увиденном. С этого момента путешествия для меня стало смыслом жизни.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="300">
                                <div class="card-header" role="tab" id="edicaAboutFaq2">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent2" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Какое из путешествий Вам запомнилось больше всего и почему?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent2" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq2">
                                    <div class="card-body">
                                        Однозначного ответа нет. Все путешествия побудительны, значимы и интересны. Главное во временном контексте к путешествиям. В определенный период времени становится более значим один интерес в направленности маршрутов. Потом ставишь другие цели, открываешь новые горизонты и они на данный момент занимают главенствующее место в памяти, но когда впечатления уляжутся, я с благодарностью судьбе вспоминаю каждое из свои путешествий.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-header" role="tab" id="edicaAboutFaq3">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent3" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Куда планируете отправиться в ближайшее время?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent3" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq3">
                                    <div class="card-body">
                                        Тайланд.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header" role="tab" id="edicaAboutFaq4">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent4" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Какие страны посетили?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent4" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq4">
                                    <div class="card-body">
                                        Турция, Египет.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>


@endsection
