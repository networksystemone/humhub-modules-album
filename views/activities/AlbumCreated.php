<?php $this->beginContent('application.modules_core.activity.views.activityLayout', array('activity' => $activity)); ?>                    
<?php
echo Yii::t('AlbumModule.views_activities_AlbumCreated', '%displayName% created a new album {album}.', array(
    '%displayName%' => '<strong>' . $user->displayName . '</strong>',
    '{album}' => '<strong>' . $target->getContentTitle() . '</strong>'
));
?>
<?php $this->endContent(); ?>
