<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "инвестиционная платформа, инвестиционные решения, рост вашего капитала, расширение бизнеса, денежный поток, диверсификация портфеля, удобный интерфейс, советы экспертов, мощные инвестиционные инструменты, вывести ваш бизнес на новый уровень, надежная инвестиционная платформа, диверсифицированный портфель");
$APPLICATION->SetPageProperty("description", "Инвестиционная платформа Bizmall предоставляет предприятиям ряд инвестиционных решений для роста их капитала. Если вы хотите расширить свою деятельность, улучшить денежный поток или диверсифицировать свой портфель, Bizmall может помочь. Наша платформа предлагает удобный интерфейс, консультации экспертов и мощные инвестиционные инструменты, позволяющие максимально эффективно использовать ваш капитал. Присоединяйтесь сейчас и поднимите свой бизнес на новый уровень.");
$APPLICATION->SetTitle("Как привлечь инвестиции");
$APPLICATION->SetAdditionalCSS("/investor/style.css");
require '/home/bitrix/www/feedbackForm/index.php';
?>

<div class="page">
    <section class="section">
        <div class="wrapperBlock investment">
            <div class="investmentContainer">
                <div>
                    <div class="textInvestmentContainer">
                        <h2 class="titleInvestmentTypography"><span class="blue">Инвестируйте</span> в реальный сектор рынка вместе с Bizmall</h2>
                        <div class="descriptionInvestmentTypography descriptionInvestment">Сохраните деньги от инфляции — предлагаем проекты с доходом выше банковского депозита</div>
                    </div>
                    <div class="blocksInvestment">
                        <div class="blockInvestment blockInvestmentTypography">
                            <img class="iconPlayInvestment" src="/static/img/build/how-to-invest/playIcon.svg"/>
                            Смотреть видео о платформе
                        </div>
                        <div class="blockInvestment blockInvestmentTypography">
                            <img class="iconInvestment" src="/static/img/build/business/emblem.png"/>
                            Включена в реестр Банка России
                            по Закону от 02.08.2019 № 259-ФЗ
                        </div>
                    </div>
                    <button class="buttonContained buttonTypography" onClick="openFeedback('dark')">Получить консультацию</button>
                </div>
                <img class="imageInvestment" src="/static/img/build/business/notebook.svg"/>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <div class="listBlocks">
                <div class="listItem">
                    <div class="listItemTitleTypography">Надзор Центрального Банка Российской Федерации</div>
                    <div class="listItemDescTypography">Bizmall включена в реестр операторов инвестиционных платформ Банка России</div>
                </div>
                <div class="listItem">
                    <div class="listItemTitleTypography">2-этапная проверка проектов</div>
                    <div class="listItemDescTypography">По итогам скоринга только 5% проектов размещаются на платформе, что говорит о тщательном отборе компаний</div>
                </div>
                <div class="listItem">
                    <div class="listItemTitleTypography">Официальное оформление сделок</div>
                    <div class="listItemDescTypography">Все сделки имеют юридическую силу, их участники проходят полную идентификацию и многоступенчатую проверку</div>
                </div>
                <div class="listItem">
                    <div class="listItemTitleTypography">Минимальные риски</div>
                    <div class="listItemDescTypography">Соискатели инвестици — российские компании из реального сектора рынка, что позволяет инвестировать без странового риска и высокой волатильности</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <h2 class="managerTitleTypography managerTitle">Действуйте при поддержке персонального менеджера</h2>
            <div class="managerBlocks">
                <div class="managerBlock managerDescriptionTypography managerBlue">
                    На платформе организован отдел по сопровождению клиентов — вы всегда сможете позвонить и получить компетентный ответ от менеджера.
                    <img class="managerImage" src="/static/img/build/business/groupContacts.svg"/>
                </div>
                <div class="managerBlock managerDescriptionTypography managerDark">
                    Проконсультируем обо всех предлагаемых инструментах коллективного финансирования, подробнее расскажем об инвестиционных кампаниях и работе платформы.
                    <button class="buttonContained">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <div class="projectWrapper">
                <h2 class="projectTitleTypography projectTitle">Выбирайте проект, одобренный экспертами</h2>
                <div class="projectDescriptionTypography">Все проекты проходят 2-этапный скоринг по более чем 100 параметрам.</div>
                <div class="projectTypography">Это означает, что компания:</div>
                <div class="projectContainer">
                    <div class="projectItems">
                        <div class="projectItem projectItemTypography">
                            <img class="projectIcon" src="/static/img/build/business/icon1.svg"/>
                            Прошла проверку на соответствие требованиям 115-ФЗ.
                        </div>
                        <div class="projectItem projectItemTypography">
                            <img class="projectIcon" src="/static/img/build/business/icon2.svg"/>
                            Имеет историю и востребованный на рынке продукт.
                        </div>
                        <div class="projectItem projectItemTypography">
                            <img class="projectIcon" src="/static/img/build/business/icon3.svg"/>
                            Финансово устойчива.
                        </div>
                        <div class="projectItem projectItemTypography">
                            <img class="projectIcon" src="/static/img/build/business/icon4.svg"/>
                            Разработала бизнес-план и финансовую модель.
                        </div>
                    </div>
                    <div class="projectBlock projectBlockTypography">
                    Таким образом, инвесторы вкладывают средства в действующие предприятия, которые уже сейчас успешно работают и получают прибыль.
                    <button class="buttonContained btnWhite">Выбрать проект</button>
                    <img class="projectBlockImage"  src="/static/img/build/business/smallLogo.svg"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <h2 class="moneyTitleTypography moneyTitle">Следуйте за <span class="blue">«Умными деньгами»</span></h2>
                <div class="moneyBlocks">
                    <div class="moneyBlockBlue">
                        <div class="moneyFounderBlock">
                            <img class="founderImage" src="/static/img/build/business/founder.png"/>
                            <div class="founderInfo">
                                <span class="founderNameTypography">Роман Павлович</span>
                                <span class="founderTypography">основатель <span class="blue">Bizmall</span></span>
                            </div>
                        </div>
                        <div class="moneyDescriptionTypography">Большинство проектов, размещенных на <strong>Bizmall</strong>, финансирует мажоритарный акционер Роман Павлович и партнеры платформы.</div>
                    </div>
                    <div class="moneyBlockDark">
                        <div class="moneyButtons">
                            <button class="buttonContained btnOutline">Подробнее об «Умных деньгах»</button>
                            <button class="buttonContained btnWhite">Начать инвестировать</button>
                        </div>
                        <div class="moneyDescriptionTypography white moneyDescription"><strong>Программа Smart Money (Умные деньги)</strong> — это подтверждение перспективности проектов и возможность для инвесторов сделать выгодные вложения.</div>
                    </div>
                    <img class="moneyImage" src="/static/img/build/how-to-invest/lianer-gradient.svg"/>
                </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <h2 class="attractionTitleTypography attractionTitle"><span class="blue">5 этапов</span> привлечения инвестиций</h2>
            <div class="attractionDescriptionTypography">Коротко о том, как работает Bizmall на стороне бизнеса.</div>
            <div class="stagesAttraction">
                <div class="stageAttraction">
                    <div class="stageAttractionNumberTypography">01</div>
                    <div class="stageAttractionTitleTypography">Регистрация компании на платформе</div>
                    <div class="stageAttractionDescTypography">Привлекать инвестиции могут только юрлица и ИП.</div>
                </div>
                <div class="stageAttraction">
                    <div class="stageAttractionNumberTypography">02</div>
                    <div class="stageAttractionTitleTypography">Скоринг и глубокая экспертиза проекта</div>
                    <div class="stageAttractionDescTypography">Одобрение получают компании, прошедшие проверку по более чем 100 показателям.</div>
                </div>
                <div class="stageAttraction">
                    <div class="stageAttractionNumberTypography">03</div>
                    <div class="stageAttractionTitleTypography">Размещение инвестиционного предложения</div>
                    <div class="stageAttractionDescTypography">Инвесторам предоставляется информация о деятельности компании, прогнозном уровне доходности и вероятных рисках.</div>
                </div>
                <div class="stageAttraction">
                    <div class="stageAttractionNumberTypography">04</div>
                    <div class="stageAttractionTitleTypography">Привлечение инвестиций</div>
                    <div class="stageAttractionDescTypography">Частные инвесторы выбирают интересные им проекты и перечисляют средства на номинальный счет.</div>
                    <button class="buttonContained stageAttractionButton">Подробнее о номинальном счете</button>
                </div>
                <div class="stageAttraction">
                    <div class="stageAttractionNumberTypography">05</div>
                    <div class="stageAttractionTitleTypography">Завершение инвестиционной кампании</div>
                    <div class="stageAttractionDescTypography">После сбора необходимой суммы средств сделка закрывается, и деньги перечисляются на расчетный счет соискателя.</div>
                </div>
                <divc lass="stageAttractionImage">
                   <img class="stageImage" src="/static/img/build/how-to-invest/lianer-gradient.svg"/> 
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <div class="blockProject">
                <div class="blockTextProject">
                    <div class="blockProjectTitleTypography">Выбирайте проекты для инвестирования </div>
                    <div class="blockProjectNumberTypography">от 10 000 руб.</div>
                    <div class="blockProjectDescTypography blockProjectDesc">Получите доступ сразу <strong>к 3 инструментам</strong> коллективного финансирования</div>
                    <button class="blockProjectButton buttonContained btnWhite">Стать инвестором</button>
                </div>
                <img class="blockProjectImage" src="/static/img/build/business/suitcase.svg"/>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock bgDark">
            <div class="stepsContainer">
                <div class="stepsText">
                    <h2 class="stepsTitleTypography stepsTitle"><span class="blue">5 простых шагов,</span> чтобы стать инвестором на Bizmall</h2>
                    <div class="stepsDescriptionTypography stepsDesc">Регистрация на платформе займет <strong>всего лишь 5–10 минут.</strong> Вам понадобится смартфон или компьютер.</div>
                </div>
                <div class="stepsBlock">
                    <div class="stepsImage">
                        <img class="stepsTelephone" src="/static/img/build/business/telephone.png"/>
                        <img class="stepsLianer" src="/static/img/build/how-to-invest/lianer-gradient.svg"/>
                    </div>
                    <div class="stepsList">
                        <div class="stepsListColumn">
                            <div class="stepsItem">
                                <div class="stepNumberTypography">01</div>
                                <div class="stepTitleTypography">Создайте учетную запись</div>
                                <div class="stepDescTypography">Через личный кабинет вы будете управлять инвестициями и выводить заработанные средства.</div>
                            </div>
                            <div class="stepsItem">
                                <div class="stepNumberTypography">02</div>
                                <div class="stepTitleTypography">Заполните профиль</div>
                                <div class="stepDescTypography">Согласно законодательству, на платформе запрещается инвестирование анонимными пользователями.</div>
                            </div>
                            <div class="stepsItem">
                                <div class="stepNumberTypography">03</div>
                                <div class="stepTitleTypography">Подтвердите данные</div>
                                <div class="stepDescTypography">Для этого нужно авторизоваться через Госуслуги или прикрепить скан паспорта и отправить на проверку через зашифрованный канал связи.</div>
                            </div>
                        </div>
                        <div class="stepsListColumn">
                            <div class="stepsItem">
                                <div class="stepNumberTypography">04</div>
                                <div class="stepTitleTypography">Выберите проект и вид инвестиций</div>
                                <div class="stepDescTypography">Смотрите каталог проектов, одобренный экспертным советом. Выберите наиболее интересный для вас и внесите нужную сумму.</div>
                            </div>
                            <div class="stepsItem">
                                <div class="stepNumberTypography">05</div>
                                <div class="stepTitleTypography">Управляйте инвестициями</div>
                                <div class="stepDescTypography">Динамика и доходность вложений отражаются в личном кабинете. Реинвестируйте доход или выводите средства на карту или счет в банке.</div>
                            </div>
                            <div class="stepImage">
                                <img class="stepImageLianer" src="/static/img/build/how-to-invest/lianer-gradient.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <h2 class="investmentsTitleTypography investmentsTitle">Сформируйте инвестиционный портфель</h2>
            <div class="investmentsBlock">
                <div class="investmentItem">
                    <img class="rubleIcon" src="/static/img/build/how-to-invest/ruble.svg"/>
                    <div class="investmentText">
                        <div class="investmentTitleTypography">Инвестиции в капитал</div>
                        <div class="investmentDescTypography">Покупайте привилегированные акции и получайте дивиденды. В среднесрочной перспективе вы сможете продать ценные бумаги с прибылью.</div>
                        
                        <div class="investmentItemsTypography investmentItemsContent">
                            <span class="line">Средняя ставка: <span class="darkGreen">18%</span></span>
                            <span class="line">Инвестиции: <span class="darkGreen">от 10 000 ₽</span></span>
                        </div>
                    </div>
                </div>
                <div  class="investmentItem">
                    <img class="rubleIcon" src="/static/img/build/how-to-invest/ruble2.svg"/>
                    <div class="investmentText">
                        <div class="investmentTitleTypography">Краткосрочные займы</div>
                        <div class="investmentDescTypography">Предоставляйте займы на выгодных условиях для развития бизнеса на срок, утвержденный договором.</div>
                        
                        <div class="investmentItemsTypography investmentItemsContent">
                            <span class="line">Средняя ставка: <span class="darkGreen">20%</span></span>
                            <span class="line">Срок: <span class="darkGreen">до 1 года</span></span>
                            <span class="line">Инвестиции: <span class="darkGreen">от 10 000 ₽</span></span>
                        </div>
                    </div>
                </div>
                <div  class="investmentItem">
                    <img class="rubleIcon" src="/static/img/build/how-to-invest/ruble3.svg"/>
                    <div class="investmentText">
                        <div class="investmentTitleTypography">Высокодоходные облигации</div>
                        <div class="investmentDescTypography">Приобретайте облигации, доходность которых в 1,5–2 раза превышает доходность облигаций федерального займа.</div>
                        <div class="investmentItemsTypography investmentItemsContent">
                            <span class="line">Средняя ставка купона: <span class="darkGreen"> 20%</span></span>
                            <span class="line">Срок: <span class="darkGreen">до 5 лет</span></span>
                            <span class="line">Инвестиции: <span class="darkGreen">дот 10 000 ₽</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="buttonContained">Выбрать проект</button>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <div class="smartContainer">
                <div class="smartHeader">
                    <div class="smartTextHeader">
                        <h2 class="smartTitleTypography">Смарт инвестиции</h2>
                        <div class="smartSubtitleTypography">Максимум прибыли и минимум участия</div>
                        <div class="smartDescriptionTypography"><span class="blue">Планируйте стратегии, управляйте капиталом в автоматизированном режиме и зарабатывайте</span> от 17 до 35% годовых.</div>
                    </div>
                    <div>
                        <img class="smartImage" src="/static/img/build/business/smartImage.svg"/>
                    </div>
                </div>
                <div class="smartBlock">
                    <div class="smartItem">
                        <img class="smartIcon" src="/static/img/build/business/smartIcon1.svg"/>
                        <div class="smartText">
                            <div class="smartTextTitleTypography">Безопасные сделки</div>
                            <div class="smartTextDescTypography">Все операции проходят под строгим надзором ЦБ РФ со 100% защитой средств на номинальных счетах пользователей.</div>
                        </div>
                    </div>
                    <div class="smartItem">
                        <img class="smartIcon" src="/static/img/build/business/smartIcon2.svg"/>
                        <div class="smartText">
                            <div class="smartTextTitleTypography">Управление рисками</div>
                            <div class="smartTextDescTypography">К размещению допускается только предложения соискателей с наивысшим рейтингом, прошедшие экспертизу bizmall.</div>
                        </div>
                    </div>
                    <div class="smartItem">
                        <img class="smartIcon" src="/static/img/build/business/smartIcon3.svg"/>
                        <div class="smartText">
                            <div class="smartTextTitleTypography">Анализ бизнеса</div>
                            <div class="smartTextDescTypography">Функционал сервиса позволяет самостоятельно выбрать стратегию инвестирования для диверсификации активов.</div>
                        </div>
                    </div>
                    <div class="smartItem">
                        <img class="smartIcon" src="/static/img/build/business/smartIcon4.svg"/>
                        <div class="smartText">
                            <div class="smartTextTitleTypography">Личный кабинет</div>
                            <div class="smartTextDescTypography">Перечень активов и всех сделок с ними формируется в детализированный отчет и отражается в сервисе для удобства пользователей.</div>
                        </div>
                    </div>
                </div>
                <div class="smartFooter">
                    <button class="buttonContained">Узнать подробнее</button>
                    <div class="smartFooterTypography smartFooterText">« СМАРТ ИНВЕСТИЦИИ» - возможность настроить источник прибыли с минимумом участия со стороны инвестора.</div>
                </div>
                <img class="smartLogo" src="/static/img/build/business/smartLogo.svg"/>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <div class="legalityContainer">
                <div class="legalityText">
                    <h2 class="legalityTitleTypography legalityTitle">Гарантируем законность заключаемых сделок</h2>
                    <div class="legalitySubtitleTypography">Готовим пакеты необходимых юридических документов в соответствии с законодательством РФ и правилами регулирующих органов. Обеспечиваем прозрачность, честность и легитимность сделок для обеих сторон. </div>
                    <div class="legalityDescriptionTypography">По запросу клиентов оказываем юридические консультации.</div>
                    <div class="legalityFooter">
                        <button class="buttonContained">Получить консультацию</button>
                        <div class="legalityFooterTypography">Посмотреть запись в реестре на сайте ЦБ РФ</div>
                    </div>
                </div>
                <div>
                    <img class="legalityImage" src="/static/img/build/business/legality.svg"/>
                </div>
                <img class="legalityBackgroung" src="/static/img/build/investor/rectangle.svg"/>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrapperBlock">
            <h2 class="secureTitleTypography secureTitle"><span class="blue">Безопасность</span> инвесторов в приоритете</h2>
            <div class="secureBlock">
                <div class="secureTextBlock">
                    <div class="secureTextTitleTypography">Используем все доступные инструменты</div>
                    <div class="secureText">
                        <div class="secureTextDescTypography secureTextDesc">Чтобы создать для инвесторов, начинающих и опытных, максимально комфортные условия для вложения средств с минимальными рисками. </div>
                        <div class="secureTextSubtitleTypography">Наша задача — повысить доверие к инвестициям как к способу получения пассивного дохода.</div>
                    </div>
                </div>
                <div class="secureList">
                    <div class="secureItem">
                        <div class="secureItemTitleTypography secureItemTitle">Работаем под надзором Банка России</div>
                        <div class="secureItemDescTypography secureItemDesc">Официально имеем право на ведение деятельности по привлечению средств в соответствии с законом <div class="secure">№ 259-ФЗ от 02.08.2019 г.</div></div>
                    </div>
                    <div class="secureItem"> 
                        <div class="secureItemTitleTypography secureItemTitle">Проводим сделки через номинальные счета</div>
                        <div class="secureItemDescTypography secureItemDesc">Средства на счете принадлежат инвестору, а операции выполняются только по его инициативе и распоряжению с использованием электронной подписи.</div>
                        <button class="buttonContained">Проконсультироваться</button>
                    </div>
                    <div class="secureItem"> 
                        <div class="secureItemTitleTypography secureItemTitle">Исключаем сомнительные схемы</div>
                        <div class="secureItemDescTypography secureItemDesc">Только 5% проектов проходят 2-этапную поверку и экспертный совет и размещаются на платформе для сбора средств.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <section class="section">
        <div class="wrapperBlock partners">
            <div class="partnersTitleTypography partnersTitle">Партнеры платформы</div>
            <swiper-container class="partnersSlider" id="swiperPartnersContainer" slides-per-view="auto">
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/1.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/2.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/3.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/4.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/5.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/6.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/7.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/8.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/9.png"/>
                </swiper-slide>
                <swiper-slide class="partnersSlide">
                    <img class="partnersImage" src="/static/img/build/partners/10.png"/>
                </swiper-slide>
            </swiper-container>
            <div class="partnersButtons">
                <div class="partnersButtonPrev" id="partnersButtonPrev" onClick="slidePartnersPrev()"></div>
                <div class="partnersButtonNext" id="partnersButtonNext" onClick="slidePartnersNext()"></div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        partnersButtonPrev.classList.add('disabled')

        swiperPartnersContainer.addEventListener('slidechange', (e) => {
            let activeIndex = swiperPartnersContainer.swiper.activeIndex
            const slidesLength = swiperPartnersContainer.swiper.slides.length
        
        if(activeIndex > 0){
            partnersButtonPrev.classList.remove('disabled')

        };

        if(activeIndex === 0){
            partnersButtonPrev.classList.add('disabled')
        };

        if(swiperPartnersContainer.swiper.isEnd){
            partnersButtonNext.classList.add('disabled')
        }
        else{
            partnersButtonNext.classList.remove('disabled')
        }
        });

    function slidePartnersNext(){
        swiperPartnersContainer.swiper.slideNext();
    }
    function slidePartnersPrev(){
        swiperPartnersContainer.swiper.slidePrev();
    }
    </script>

    <section class="section">
        <div class="wrapperBlock article">
            <h2 class="articleTypography">СМИ о Bizmall</h2>
            <swiper-container class="articlesBlock" slides-per-view="auto">
                <swiper-slide class="articleItem">
                    <a href="" target="_blank">
                        <div class="articleImage" style="background-image: url(/static/img/build/investor/image.png);"></div>
                        <div class="articleText">
                            <div>
                                <p class="articleTitleTypography">Девелопер ПИК запустил сервис для срочного выкупа квартир на «вторичке»</p>
                                <span class="articleDescTypography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                            </div>
                            <div class="articleFooter">
                                <span class="articleDateTypography">12 февраля 2019</span>
                                <img class="articleLogo" src="/static/img/build/business/logo_newspaper.svg"/>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide class="articleItem">
                    <a href="" target="_blank">
                        <div class="articleImage" style="background-image: url(/static/img/build/investor/image.png);"></div>
                        <div class="articleText">
                            <div>
                                <p class="articleTitleTypography">Девелопер ПИК запустил сервис для срочного выкупа квартир на «вторичке»</p>
                                <span class="articleDescTypography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                            </div>
                            <div class="articleFooter">
                                <span class="articleDateTypography">12 февраля 2019</span>
                                <img class="articleLogo" src="/static/img/build/business/logo_newspaper.svg"/>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide class="articleItem">
                    <a href="" target="_blank">
                        <div class="articleImage" style="background-image: url(/static/img/build/investor/image.png);"></div>
                        <div class="articleText">
                            <div>
                                <p class="articleTitleTypography">Девелопер ПИК запустил сервис для срочного выкупа квартир на «вторичке»</p>
                                <span class="articleDescTypography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                            </div>
                            <div class="articleFooter">
                                <span class="articleDateTypography">12 февраля 2019</span>
                                <img class="articleLogo" src="/static/img/build/business/logo_newspaper.svg"/>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide class="articleItem">
                    <a href="" target="_blank">
                        <div class="articleImage" style="background-image: url(/static/img/build/investor/image.png);"></div>
                        <div class="articleText">
                            <div>
                                <p class="articleTitleTypography">Девелопер ПИК запустил сервис для срочного выкупа квартир на «вторичке»</p>
                                <span class="articleDescTypography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                            </div>
                            <div class="articleFooter">
                                <span class="articleDateTypography">12 февраля 2019</span>
                                <img class="articleLogo" src="/static/img/build/business/logo_newspaper.svg"/>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide class="articleItem">
                    <a href="" target="_blank">
                        <div class="articleImage" style="background-image: url(/static/img/build/investor/image.png);"></div>
                        <div class="articleText">
                            <div>
                                <p class="articleTitleTypography">Девелопер ПИК запустил сервис для срочного выкупа квартир на «вторичке»</p>
                                <span class="articleDescTypography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                            </div>
                            <div class="articleFooter">
                                <span class="articleDateTypography">12 февраля 2019</span>
                                <img class="articleLogo" src="/static/img/build/business/logo_newspaper.svg"/>
                            </div>
                        </div>
                    </a>
                </swiper-slide> 
            </swiper-container>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <section class="section">
        <div class="wrapperBlock bgDarkBlue">
            <h2 class="reviewsTitleTypography reviewsTitle">Отзывы и результаты инвесторов</h2>
            <swiper-container class="reviewsSlider" id="swiperReviewsContainer" slides-per-view="auto">
                <swiper-slide class="reviewsSlide">
                    <img class="reviewsLogo" src="/static/img/build/business/logoLong.svg"/>
                    <div class="reviewTextTypography">0Когда-то я начинал с Форекса, краткосрочных акций и ПИФов. Лучше всего сложилось с Альфа-Банком, потом перешёл на Поток. Понравилась привлекательная политика: почитал что предлагают, как это работает. Заинтересовала функция реинвестирования. Даже с учетом дефолтов пользоваться продуктами этой платформы выгоднее, чем другими.</div>
                    <div class="reviewInfo">
                        <span class="reviewNameTypography">Виталий</span>
                        <span class="reviewPostTypography">инвестор bizmall</span>
                    </div>
                </swiper-slide>
                <swiper-slide class="reviewsSlide">
                    <img class="reviewsLogo" src="/static/img/build/business/logoLong.svg"/>
                    <div class="reviewTextTypography">1Когда-то я начинал с Форекса, краткосрочных акций и ПИФов. Лучше всего сложилось с Альфа-Банком, потом перешёл на Поток. Понравилась привлекательная политика: почитал что предлагают, как это работает. Заинтересовала функция реинвестирования. Даже с учетом дефолтов пользоваться продуктами этой платформы выгоднее, чем другими.</div>
                    <div class="reviewInfo">
                        <span class="reviewNameTypography">Виталий</span>
                        <span class="reviewPostTypography">инвестор bizmall</span>
                    </div>
                </swiper-slide>
                <swiper-slide class="reviewsSlide">
                    <img class="reviewsLogo" src="/static/img/build/business/logoLong.svg"/>
                    <div class="reviewTextTypography">2Когда-то я начинал с Форекса, краткосрочных акций и ПИФов. Лучше всего сложилось с Альфа-Банком, потом перешёл на Поток. Понравилась привлекательная политика: почитал что предлагают, как это работает. Заинтересовала функция реинвестирования. Даже с учетом дефолтов пользоваться продуктами этой платформы выгоднее, чем другими.Когда-то я начинал с Форекса, краткосрочных акций и ПИФов. Лучше всего сложилось с Альфа-Банком, потом перешёл на Поток. Понравилась привлекательная политика: почитал что предлагают, как это работает. Заинтересовала функция реинвестирования. Даже с учетом дефолтов пользоваться продуктами этой платформы выгоднее, чем другими.</div>
                    <div class="reviewInfo">
                        <span class="reviewNameTypography">Виталий</span>
                        <span class="reviewPostTypography">инвестор bizmall</span>
                    </div>
                </swiper-slide>
                <swiper-slide class="reviewsSlide">
                    <img class="reviewsLogo" src="/static/img/build/business/logoLong.svg"/>
                    <div class="reviewTextTypography">3Когда-то я начинал с Форекса, краткосрочных акций и ПИФов. Лучше всего сложилось с Альфа-Банком, потом перешёл на Поток. Понравилась привлекательная политика: почитал что предлагают, как это работает. Заинтересовала функция реинвестирования. Даже с учетом дефолтов пользоваться продуктами этой платформы выгоднее, чем другими.</div>
                    <div class="reviewInfo">
                        <span class="reviewNameTypography">Виталий</span>
                        <span class="reviewPostTypography">инвестор bizmall</span>
                    </div>
                </swiper-slide>
                <swiper-slide class="reviewsSlide">
                    <img class="reviewsLogo" src="/static/img/build/business/logoLong.svg"/>
                    <div class="reviewTextTypography">4Когда-то я начинал с Форекса, краткосрочных акций и ПИФов. Лучше всего сложилось с Альфа-Банком, потом перешёл на Поток. Понравилась привлекательная политика: почитал что предлагают, как это работает. Заинтересовала функция реинвестирования. Даже с учетом дефолтов пользоваться продуктами этой платформы выгоднее, чем другими.Когда-то я начинал с Форекса, краткосрочных акций и ПИФов. Лучше всего сложилось с Альфа-Банком, потом перешёл на Поток. Понравилась привлекательная политика: почитал что предлагают, как это работает. Заинтересовала функция реинвестирования. Даже с учетом дефолтов пользоваться продуктами этой платформы выгоднее, чем другими.</div>
                    <div class="reviewInfo">
                        <span class="reviewNameTypography">Виталий</span>
                        <span class="reviewPostTypography">инвестор bizmall</span>
                    </div>
                </swiper-slide>
            </swiper-container>
            <div class="reviewsButtons">
                <div class="reviewsButtonPrev" id="reviewsButtonPrev" onClick="slideReviewsPrev()"></div>
                <div class="reviewsButtonNext" id="reviewsButtonNext" onClick="slideReviewsNext()"></div>
            </div>
            <img class="reviewsLianer" src="/static/img/build/how-to-invest/lianer-gradient.svg"/>
        </div>
    </section>
    <script type="text/javascript">
        reviewsButtonPrev.classList.add('disabled')

        swiperReviewsContainer.addEventListener('slidechange', (e) => {
            let activeIndex = swiperReviewsContainer.swiper.activeIndex
            const slidesLength = swiperReviewsContainer.swiper.slides.length
        
            console.log(swiperReviewsContainer.swiper.isEnd)
        
        if(activeIndex > 0){
            reviewsButtonPrev.classList.remove('disabled')

        };

        if(activeIndex === 0){
            reviewsButtonPrev.classList.add('disabled')
        };

        if(swiperReviewsContainer.swiper.isEnd){
            reviewsButtonNext.classList.add('disabled')
        }
        else{
            reviewsButtonNext.classList.remove('disabled')
        }
        });

    function slideReviewsNext(){
        swiperReviewsContainer.swiper.slideNext();
    }
    function slideReviewsPrev(){
        swiperReviewsContainer.swiper.slidePrev();
    }
    </script>
    <!--id="0" id="icon-0" id="answer-0" в каждый вопрос-->
    <section class="section">
        <div class="wrapperBlock centerBlock">
            <h2 class="questionsTitleTypography">Часто задаваемые вопросы</h2>
            <div class="questionsContainer">
                <div class="questionItem">
                    <div class="questionTitleTypography questionTitle" id="0">
                        Кто может стать инвестором на платформе?
                        <div class="questionIcon"></div>
                    </div>
                    <div class="questionDescTypography questionDesc">
                        Инвестором может стать физическое и юридическое лицо, но привлекать финансирование могут только юрлица и ИП.
                    </div>
                </div>
                <div class="questionItem">
                    <div class="questionTitleTypography questionTitle" id="1">
                        Как стать инвестором на Bizmall?
                        <div class="questionIcon" id="icon-1"></div>
                    </div>
                    <div class="questionDescTypography questionDesc" id="answer-1">
                        Инвестором может стать физическое и юридическое лицо, но привлекать финансирование могут только юрлица и ИП.
                    </div>
                </div>
                <div class="questionItem">
                    <div class="questionTitleTypography questionTitle" id="2">
                        Что такое идентификация и как долго она длится?
                        <div class="questionIcon" id="icon-2"></div>
                    </div>
                    <div class="questionDescTypography questionDesc" id="answer-2">
                        Инвестором может стать физическое и юридическое лицо, но привлекать финансирование могут только юрлица и ИП.
                    </div>
                </div>
            </div>
            <button class="buttonContained questionButton" onClick="openChat()">Задать другой вопрос</button>
        </div>
    </section>
    <script type="text/javascript">
        // let questions = document.querySelectorAll('.questionTitle')

        // for (let question of questions) {
        //     question.addEventListener('click', (e) => {
        //         document.getElementById(`answer-${e.target.id}`).classList.toggle('questionDescActive');
        //         document.getElementById(`${e.target.id}`).classList.toggle('active')
        //         document.getElementById(`icon-${e.target.id}`).classList.toggle('questionIconActive')
        //     })
        // }

        // function openChat(){
        //     if ('BXLiveChat' in window) {
        //         window.BXLiveChat.open();
        //     }
        // }

        $(document).ready(function(){
            var $questionsContainer = $('.questionsContainer'),
                $questionItem = $questionsContainer.find('.questionItem'),
                $questionTitle = $questionItem.find('.questionTitle'),
                questionDesc = ".questionDesc";

                $questionTitle.click(function () {
                    $(this).closest('.questionItem').addClass('active');
                    $questionItem.not('.active').find(questionDesc).slideUp(200);
                    $(this).closest('.questionItem').find(questionDesc).slideDown(200);
                    
                });


            });
    </script>
    <section class="section">
        <div class="wrapperBlock">
            <div class="moneyMustContainer">
                <div class="moneyMustBlock">
                    <div class="moneyMustText">
                        <h2 class="moneyMustTitleTypography">Деньги должны работать на вас </h2>
                        <div class="moneyMustDescTypography">Выбирайте проекты и создавайте источник пассивного дохода</div>
                    </div>
                    <button class="buttonContained btnWhite">Стать инвестором</button>
                </div>
                <img class="moneyMustImage" src="/static/img/build/business/money.svg"/>
            </div>
        </div>
    </section>
    <?
        $APPLICATION->IncludeFile(
            "/investor/include/section_include_money_work.php", Array(), Array(
            "MODE"      => "html",
            "NAME"      => "Заставим ваши деньги работать"
        ));
    ?>
</div>

   
               
                


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
