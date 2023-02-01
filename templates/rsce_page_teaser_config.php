<?php

return array(
    'label' => array('Page Teaser', 'Meine Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'standardFields' => array(),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'name' => array(
            'label' => array('Name'),
            'inputType' => 'text'
        ),
        'description' => array(
            'label' => array('Beschreibung'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'linkedPage' => array(
            'label' => array('Verlinkte Seite', ''),
            'inputType' => 'pageTree',
            'eval' => array(
            ),

        ),
        'image' => array(
            'label' => array('Bild', ''),
            'inputType' => 'fileTree',
            'eval' => array(
                'filesOnly' => true,
                'extensions' => 'jpg, jpeg, png'
            ),

        ),

    ),
);
