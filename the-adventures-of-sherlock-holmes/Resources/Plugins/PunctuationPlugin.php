<?php

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Easybook\Events\EasybookEvents as Events;
use Easybook\Events\ParseEvent;
 
class PunctuationPlugin implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return array(
            Events::POST_PARSE => 'onItemPostParse',
        );
    }
 
    public function onItemPostParse(ParseEvent $event)
    {
        $html = str_replace(
            '--',
            '&mdash;',
            $event->getContent()
        );
 
        $event->setContent($html);
    }
}