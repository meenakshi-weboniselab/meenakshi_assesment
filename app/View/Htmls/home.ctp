<div class="container containerMrgn">
<!-- Forms
================================================== -->
<section id="forms">
    <div class="page-header">
        <h1>Forms</h1>
    </div>

    <div class="row">
        <div class="span10 offset1">

            <?php echo $this->Form->create('User' ,array( 'type' => 'post','class' => 'form-horizontal', 'id' => 'myformUser')); ?>

                    <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <?php echo $this->Form->input('username',array('id' => 'username', 'placeholder' => 'Username', 'label' => false)); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <?php echo $this->Form->input('email',array('id' => 'inputEmail', 'placeholder' => 'Email', 'label' => false)); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Select list</label>
                        <div class="controls">
                            <?php
                            echo $this->Form->input('field', array('label' => false,'options' => array(1, 2, 3, 4, 5),'empty' => '(choose one)'));
                            ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <?php
                                echo $this->Form->checkbox('published', array(
                                    'value' => 'Y',
                                    'hiddenField' => false,
                                ));
                                ?>
                                I accept <?php echo $this->Html->link('terms and conditions', '#', array('class' => 'button', 'target' => '_blank')); ?>
                            </label>
                        </div>
                    </div>

                    <div class="form-actions">
                        <?php echo $this->Form->submit('Save', array('id' => 'signup', 'class' => 'btn btn-primary pull-left', 'div'=> false)); ?>
                    </div>

            <?php echo $this->Form->end(); ?>
        </div>
    </div>

</section>



</div>