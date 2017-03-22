<?php

class BlogEntry extends Page {
    static $db = array(
        'Summary'=>'Text',
        'PublishDate'=>'Date'
    );
    
    static $has_one = array(
        'Image'=>'Image'
    );
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Zdjecie', new UploadField('Image'));
        $fields->addFieldsToTab('Root.Skrót', new TextareaField('Summary'));
        $fields->addFieldsToTab('Root.PublishDate', DateField::create('PublishDate')->setConfig('showcalendar', true));

        return $fields;
    }
}

class BlogEntry_Controller extends Page_Controller {
    
}
