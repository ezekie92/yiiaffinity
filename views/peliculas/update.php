<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Modificar una nueva película';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($pelicula, 'titulo') ?>
    <?= $form->field($pelicula, 'anyo') ?>
    <?= $form->field($pelicula, 'duracion') ?>
    <?= $form->field($pelicula, 'genero_id')->dropDownList($listaGeneros) ?>
    <div class="form-group">
        <?= Html::submitButton('Modificar película', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['peliculas/index'], ['class' => 'btn btn-danger']) ?>
    </div>
<?php ActiveForm::end() ?>

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Rol</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php foreach ($participantes as $participante): ?>
        <tr>
            <td><?= Html::encode($participante['nombre']) ?></td>
            <td><?= Html::encode($participante['rol']) ?></td>
            <td><?= Html::a('Quitar', ['participantes/quitar', 'id' => $participante['id']], ['class' => 'btn btn-danger btn-xs']) ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
