<?php

$this->extend('/Common/admin_edit');

$this->Breadcrumbs->add(__d('croogo', 'Extensions'),
    ['plugin' => 'Croogo/Extensions', 'controller' => 'extensions_plugins', 'action' => 'index'])
    ->add(__d('croogo', 'Locales'),
        ['plugin' => 'Croogo/Extensions', 'controller' => 'extensions_locales', 'action' => 'index'])
    ->add(__d('croogo', 'Upload'), $this->request->here());

$this->append('form-start', $this->Form->create(null, [
    'url' => [
        'plugin' => 'Croogo/Extensions',
        'controller' => 'extensions_locales',
        'action' => 'add',
    ],
    'type' => 'file',
]));

$this->append('tab-heading');
echo $this->Croogo->adminTab(__d('croogo', 'Upload'), '#locales-upload');
$this->end();

$this->append('tab-content');
echo $this->Html->tabStart('locales-upload') . $this->Form->input('file', [
        'type' => 'file',
        'class' => 'c-file'
    ]);
echo $this->Html->tabEnd();
$this->end();

$this->append('panels');
echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
    '<div class="clearfix"><div class="float-left">' .
    $this->Form->button(__d('croogo', 'Upload'), ['button' => 'success']) .
    '</div><div class="float-right">' .
    $this->Html->link(__d('croogo', 'Cancel'), ['action' => 'index'], ['button' => 'danger']) .
    '</div></div>';
echo $this->Html->endBox();
$this->end();

$this->append('form-end', $this->Form->end());