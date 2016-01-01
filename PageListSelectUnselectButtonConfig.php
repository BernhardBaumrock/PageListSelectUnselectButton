<?php
class PageListSelectUnselectButtonConfig extends ModuleConfig {
  public function getDefaults() {
    return array(
      'selector' => 'div.InputfieldPageListSelect',
    );
  }
  public function getInputfields() {
    $inputfields = parent::getInputfields();

    $f = $this->modules->get('InputfieldText');
    $f->attr('name', 'selector');
    $f->label = 'Selector';
    $f->description = 'This is the JQuery Selector to find the fields where the unselect button should be shown';
    $f->notes = 'Default: ' . $this->selector;
    $f->required = true;
    $inputfields->add($f);

    return $inputfields;
  }
}
