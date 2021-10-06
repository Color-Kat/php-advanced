<?php

require('logger/LogLevel.php');
require('logger/LoggerInterface.php');
require('logger/AbstractLogger.php');
require('logger/Logger.php');


require('interfaces/EventChannelInterface.php');
require('interfaces/PublisherInterface.php');
require('interfaces/SubscriberInterface.php');
require('classes/EventChannel.php');
require('classes/Publisher.php');
require('classes/Subscriber.php');

class EventChannelJob
{
    public function run()
    {
        $logger = new Logger();

        // создаем поток событий
        $eventChannel = new EventChannel($logger);

        // создаём издателей 
        // (те, кто будут при вызове метода publish
        // отправлять событие подписчикам, которые подписаны на $topic)
        $colorAbr = new Publisher('colorAbr', $eventChannel);
        $habrHabh = new Publisher('habrHabh', $eventChannel);
        $kazahNews = new Publisher('kazahNews', $eventChannel);

        // создаём каких-то людей, которые так же являются/наследуются от Subscriber
        $samanta_ayou = new Subscriber($logger, 'samanta', 'ayou');
        $rusik = new Subscriber($logger, 'rusik');
        $boris_jonson = new Subscriber($logger, 'boris', 'jonson');

        // подписываем людей на издателей с ключём $topic
        // теперь, когда у издателя будет вызван метод publish,
        // через поток событий у подписчиков вызовется метод notify
        $eventChannel->subscribe('colorAbr', $samanta_ayou);
        $eventChannel->subscribe('colorAbr', $boris_jonson);

        $eventChannel->subscribe('kazahNews', $rusik);

        $eventChannel->subscribe('habrHabh', $boris_jonson);

        // издатели добавляют какие-то данные
        // при вызове этого метода, у подписчиков $topic будет вызван метод notify()
        $colorAbr->publish(['title' => 'Copyright', 'body' => 'Do not steal!']);
        $colorAbr->publish(['title' => 'Gustinianity', 'body' => 'Gustov is our hero!']);

        $habrHabh->publish(['title' => 'Php patterns', 'body' => 'Today we learn php patterns']);

        $kazahNews->publish(['title' => 'sphere hanged himself', 'body' => 'Once upon a time шn saray, there was sphere...']);
    }
}
