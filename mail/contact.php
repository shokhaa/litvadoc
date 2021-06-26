<?php
/**
 * Created by PhpStorm.
 * User: Shokhaa
 * Date: 5/28/20
 * Time: 5:32 PM
 */
/** @var \app\models\Contact $contact */
?>

<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
    <thead>
    <tr style="background: #f9f9f9;">
        <th style="padding: 8px; border: 1px solid #ddd;">Имя</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Стаж работы</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Номер</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Почта</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Город</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Специалноисты</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Тип животных</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $contact->getFullName() ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $contact->experience_year ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $contact->phone_number ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $contact->email ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $contact->city ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= implode(',', $contact->specialists) ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= implode(',', $contact->animal_types) ?></td>
        </tr>
    </tbody>
</table>
