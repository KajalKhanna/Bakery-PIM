<?php

namespace App\EventSubscriber;


use App\Entity\Category;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;

class CategoryAddedSubscriber implements EventSubscriberInterface
{
    private $mailer;
    
    public function __construct(Security $security,MailerInterface $mailer)
    {
        $this->security = $security;
        $this->mailer = $mailer;
    } 

    public function sendMail(AfterEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();
        if ($entity instanceof PostCategory){
            $cat_name=$entity->getName();
            $cat_Managed_by=(string) $entity->getManagedBy();
            $email = (new Email())
            ->from('siddharthsrivastava649@gmail.com')
            ->to('siddharthsrivastava649@gmail.com')
            ->subject('New Category is Created');
            $this->mailer->send($email);  
          }
    }

    public static function getSubscribedEvents()
    {
        return [
            AfterEntityPersistedEvent::class=>['sendMail'],
            BeforeEntityPersistedEvent::class => ['setCategory'],
            BeforeEntityUpdatedEvent::class => ['updateCategory'],
        
        ];
    }
    public function setCategory(BeforeEntityPersistedEvent $event){
        $entity = $event->getEntityInstance();
        if ($entity instanceof Category) {
           
            $entity->setCreated(new \DateTime());
            $entity->setUpdated(new \DateTime());
            
        }
        
        return;
    }

    public function updateCategory(BeforeEntityUpdatedEvent $event){
        $entity = $event->getEntityInstance();
        if ($entity instanceof Category) {
           
            $entity->setUpdated(new \DateTime());
        }
        
        return;
    }
    
}