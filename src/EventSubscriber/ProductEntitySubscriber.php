<?php

namespace App\EventSubscriber;

use App\Entity\Product;
use App\Entity\PostCategory;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Swift_Events_SendEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;

    class ProductEntitySubscriber extends AbstractController implements EventSubscriberInterface {
        private $slugger;
        private $mailer;
        private $Product;
        private $evt;
        public function __construct(Security $security,MailerInterface $mailer,UserRepository $Product , SluggerInterface $slugger) {
            $this->slugger = $slugger;
            $this->security = $security;
            $this->mailer = $mailer;
            $this->UserRepository= $Product;
       

        }

        public static function getSubscribedEvents(){
            return [
                BeforeEntityPersistedEvent::class => ['setProduct'],
               AfterEntityPersistedEvent::class=>['sendMail'],
                BeforeEntityUpdatedEvent::class => ['updateProduct'],
            ];
        }

        public function setProduct(BeforeEntityPersistedEvent $event){
            $entity = $event->getEntityInstance();
            if ($entity instanceof Product) {
                $entity->setManagedBy($this->security->getUser());
                $entity->setProductStatus('draft');
                $entity->setCreatedAt(new \DateTime());
                $entity->setUpdatedAt(new \DateTime());
                $entity->setProductSlug($this->slugger->slug($entity->getName()));
            }
            // dump("created");
            return;
           
        }

        public function updateProduct(BeforeEntityUpdatedEvent $event){

            $entity = $event->getEntityInstance();
            if ($entity instanceof Product) {
                $entity->setProductSlug($this->slugger->slug($entity->getName()));
                $entity->setUpdatedAT(new \DateTime());
            }
            
            return;
           
        } 

    
        public function sendMail(AfterEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();
        if ($entity instanceof PostCategory){
            $cat_name=$entity->getCategoryName();
            // $cat_Managed_by=(string) $entity->getManagedBy();
            $email = (new Email())
            ->from('siddharthsrivastava649@gmail.com')
            ->to('shini9794862433@gmail.com')
            ->subject('New Category is Created')
            ->text('Hii Manager... "'. $cat_name . '" category has been added!!');
            $this->mailer->send($email);  
          }
    }
    
            
}
