<?php
/**
 * ------------------------------------------------------------------------
 * JA Healthcare Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
*/

// no direct access
defined('_JEXEC') or die;

?>

<!-- Comments Form -->
<h3><?php echo JText::_('K2_LEAVE_A_COMMENT') ?></h3>

<?php if($this->params->get('commentsFormNotes')): ?>
<p class="itemCommentsFormNotes">
	<?php if($this->params->get('commentsFormNotesText')): ?>
	<?php echo nl2br($this->params->get('commentsFormNotesText')); ?>
	<?php else: ?>
	<?php echo JText::_('K2_COMMENT_FORM_NOTES') ?>
	<?php endif; ?>
</p>
<?php endif; ?>

<form action="<?php echo JURI::root(true); ?>/index.php" method="post" id="comment-form" class="form-validate">
	<label class="formComment" for="commentText"><?php echo JText::_('K2_MESSAGE'); ?> *</label>
	<textarea rows="20" cols="10" class="inputbox" onblur="if(this.value=='') this.value='<?php echo JText::_('K2_ENTER_YOUR_MESSAGE_HERE'); ?>';" onfocus="if(this.value=='<?php echo JText::_('K2_ENTER_YOUR_MESSAGE_HERE'); ?>') this.value='';" name="commentText" id="commentText"><?php echo JText::_('K2_ENTER_YOUR_MESSAGE_HERE'); ?></textarea>

	<label class="formName" for="userName"><?php echo JText::_('K2_NAME'); ?> *</label>
	<input class="inputbox" type="text" name="userName" id="userName" value="<?php echo JText::_('K2_ENTER_YOUR_NAME'); ?>" onblur="if(this.value=='') this.value='<?php echo JText::_('K2_ENTER_YOUR_NAME'); ?>';" onfocus="if(this.value=='<?php echo JText::_('K2_ENTER_YOUR_NAME'); ?>') this.value='';" />

	<label class="formEmail" for="commentEmail"><?php echo JText::_('K2_EMAIL'); ?> *</label>
	<input class="inputbox" type="text" name="commentEmail" id="commentEmail" value="<?php echo JText::_('K2_ENTER_YOUR_EMAIL_ADDRESS'); ?>" onblur="if(this.value=='') this.value='<?php echo JText::_('K2_ENTER_YOUR_EMAIL_ADDRESS'); ?>';" onfocus="if(this.value=='<?php echo JText::_('K2_ENTER_YOUR_EMAIL_ADDRESS'); ?>') this.value='';" />

	<label class="formUrl" for="commentURL"><?php echo JText::_('K2_WEBSITE_URL'); ?></label>
	<input class="inputbox" type="text" name="commentURL" id="commentURL" value="<?php echo JText::_('K2_ENTER_YOUR_SITE_URL'); ?>"  onblur="if(this.value=='') this.value='<?php echo JText::_('K2_ENTER_YOUR_SITE_URL'); ?>';" onfocus="if(this.value=='<?php echo JText::_('K2_ENTER_YOUR_SITE_URL'); ?>') this.value='';" />

	<?php if($this->params->get('recaptcha') && ($this->user->guest || $this->params->get('recaptchaForRegistered', 1))): ?>
	<?php if(!$this->params->get('recaptchaV2')): ?>
	<label class="formRecaptcha"><?php echo JText::_('K2_ENTER_THE_TWO_WORDS_YOU_SEE_BELOW'); ?></label>
	<?php endif; ?>
	<div id="recaptcha" class="<?php echo $this->recaptchaClass; ?>"></div>
	<?php endif; ?>

	<input type="submit" class="button" id="submitCommentButton" value="<?php echo JText::_('K2_SUBMIT_COMMENT'); ?>" />

	<span id="formLog"></span>

	<input type="hidden" name="option" value="com_k2" />
	<input type="hidden" name="view" value="item" />
	<input type="hidden" name="task" value="comment" />
	<input type="hidden" name="itemID" value="<?php echo JRequest::getInt('id'); ?>" />
	<?php echo JHTML::_('form.token'); ?>
</form>
