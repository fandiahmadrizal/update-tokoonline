<?php
/* @var $this PelanggantblController */
/* @var $model Pelanggantbl */
/* @var $form CActiveForm */
?>

<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'pelanggantbl-form',
							'enableAjaxValidation'=>false,
						)); ?>
							<?php echo $form->textField($model,'nama',array('size'=>35,'maxlength'=>35,'placeholder'=>'Name'))?>
							<?php echo $form->textField($model,'alamat',array('size'=>35,'maxlength'=>35,'placeholder'=>'Alamat'))?>
							<?php echo $form->emailField($model,'email',array('size'=>35,'maxlength'=>35,'placeholder'=>'Email'))?>
							<?php echo $form->textField($model,'telepon',array('size'=>35,'maxlength'=>35,'placeholder'=>'Telepon'))?>
							<?php echo $form->textField($model,'username',array('size'=>35,'maxlength'=>35,'placeholder'=>'Username'))?>
							<?php echo $form->passwordField($model,'password',array('size'=>35,'maxlength'=>35,'placeholder'=>'Password'))?>
							<button type="submit" class="btn btn-default">Daftar</button>
							<?php $this->endWidget(); ?>
					</div><!--/sign up form-->
				</div>
	


