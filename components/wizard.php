<div class="wizard-inner">
  <div class="connecting-line"></div>
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
        <span class="round-tab">
          <i class="glyphicon glyphicon-user"></i>
        </span>
      </a>
    </li>
    <li role="presentation" class="<?php if(!isset($signin_user)):?>disabled<?php endif; ?>">
      <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
        <span class="round-tab">
          <i class="glyphicon glyphicon-pencil"></i>
          </span>
      </a>
    </li>
    <li role="presentation" class="<?php if(!isset($signin_user)):?>disabled<?php endif; ?>">
      <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
        <span class="round-tab">
          <i class="glyphicon glyphicon-cloud-upload"></i>
        </span>
      </a>
    </li>
    <li role="presentation" class="<?php if(!isset($signin_user)):?>disabled<?php endif; ?>">
      <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
        <span class="round-tab">
          <i class="glyphicon glyphicon-ok"></i>
        </span>
      </a>
    </li>
  </ul>
</div>