<?php $this->beginContent('application.modules_core.activity.views.activityLayoutMail', array('activity' => $activity, 'showSpace' => true)); ?>

<?php
echo Yii::t('AlbumModule.views_activities_AlbumCreated', '%displayName% created a new album {album}.', array(
    '%displayName%' => '<strong>' . $user->displayName . '</strong>',
    '{album}' => '<strong>' . $target->getContentTitle() . '</strong>'
));
?>
<br />

<em>"<?php echo ActivityModule::formatOutput($target->description); ?>"</em>

<?php $this->endContent(); ?>    