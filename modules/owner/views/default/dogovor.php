<?php
use app\models\Person;

?>
<div class="dogovor text-center">
    <p class="text-center">Договор № <?=Person::findOne(['user_id'=>$model->user_id])->id?></p>
                                                         по предоставлению информационных услуг
    г. Краснодар                                                                                                    	от «___» ____________ 20___ г

    Настоящий договор заключён между индивидуальным  предпринимателем Марфелевым Константином Васильевичем, именуемый в дальнейшем «Исполнитель» и ооо Азиш-Тау
    в лице ______________________________________________________________________________
    именуемый в дальнейшем «Заказчик» договор заключён о нижеследующем:

                                                                       Предмет договора

    Исполнитель предоставляет Заказчику возможность для размещения и редактирования рекламной информации в сети internet на портале <?=Yii::$app->name?>, а также предоставляет возможность размещать любое количество объектов в разных городах и странах со своего аккаунта, выбрать различные тарифы и услуги влияющие на эффективность рекламной компании.

                                                             Права и обязанности сторон

    Исполнитель вправе потребовать предоставления правоустанавливающих документов в случае поступления от Заказчика заявки на предоставление пароля для авторизации на портале <?=Yii::$app->name?>,
    при его утрате Заказчиком.
    Исполнитель обязуется  обеспечить постоянный доступ пользователей internet к рекламируемой информации Заказчика, а также обеспечить доступ Заказчика на его аккаунт.
    Заказчик обязуется своевременно оплачивать услуги Исполнителя согласно условиям договора.

                                                Стоимость оказания услуг и порядок оплаты

    Стоимость услуг определяется количеством объектов размещаемых Заказчиком и тарифом, выбранным для каждого из объектов.
    Оплата производится в течении десяти дней с момента заключения договора на расчетный счёт Исполнителя.
    Срок действия настоящего договора с «___» ____________ 20___ г по «___» ____________ 20___ г
    В случае поступления оплаты от Заказчика повторно за предоставленные услуги, договор продолжает действовать в течение срока оплаченного Заказчиком.

                                                                   Реквизиты сторон

    Исполнитель
    ИП Марфелев Константин Васильевич
    Краснодарский край г.Белореченск
    ул.Таманской Армии 114/372
    Тел. +7-918-1619300
    e-mail:admin@TvoyRay.ru
    ИНН 230300377299(получателя)
    Р/С40802810300170000120(получателя)
    БИК 040349722
    Кор/счёт 30101810200000000722
    В КБ «Кубань Кредит» ООО
    г. Краснодар

    Заказчик
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________
    ______________________________________

    Подпись:	Подпись:
</div>