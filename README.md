
yii2fullcalendar6
================
Fullcalendar Yii2 Extension
JQuery from: http://arshaw.com/fullcalendar/
Version 6.1.9
License MIT

JQuery Documentation:
http://arshaw.com/fullcalendar/docs/


Installation
============
Package is although registered at packagist.org - so you can just add one line of code, to let it run!

add the following line to your composer.json require section:
```json
  "romanmaroder/yii2fullcalendar6":"*",
```

or run:
```
$ php composer.phar require romanmaroder/yii2fullcalendar6 "*"
```

Usage
=====

Quickstart Looks like this:

```php

  $events = array();
  //Testing
  $Event = new \yii2fullcalendar6\models\Event();
  $Event->id = 1;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\TH:i:s\Z');
  $Event->extendedProps = [
    'field1' => 'Something I want to be included in object #1',
    'field2' => 'Something I want to be included in object #2',
  ];
  $events[] = $Event;

  $Event = new \yii2fullcalendar6\models\Event();
  $Event->id = 2;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\TH:i:s\Z',strtotime('tomorrow 6am'));
  $events[] = $Event;

  ?>

  <?= \yii2fullcalendar6\yii2fullcalendar6::widget(array(
      'events'=> $events,
  ));
```

Note, that this will only view the events without any detailed view or option to add a new event.. etc.

extendedProps fields
===================

In addition to the fields above, you may also include your own non-standard fields in each Event object. FullCalendar will not modify or delete these fields. For example, developers often include a description field for use in callbacks like event render hooks. 
Any non-standard properites are moved into the extendedProps hash during event parsing.



