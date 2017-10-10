<?php

namespace OverwatchHeroBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use OverwatchHeroBundle\Entity\Hero;
use OverwatchHeroBundle\Entity\Category;
use UserBundle\Entity\User;
use UserBundle\Entity\Review;


class HeroFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('Hero:fixtures')->setDescription('Chargement du jeu d\'essai');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $passwordEncoder = $this->getContainer()->get('security.password_encoder');
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');


        $category1 = new Category();
        $category1->setCategoryName("Attaquants");
        
        $category2 = new Category();
        $category2->setCategoryName("Defenseurs");
       
        $category3 = new Category();
        $category3->setCategoryName("Soutiens");
        
        $category4 = new Category();
        $category4->setCategoryName("Tanks");

        $categories = [$category1,$category2,$category3,$category4];

       foreach ($categories as $currentCategory) {
           $em->persist($currentCategory);
       }

        $hero1=new Hero();
        $hero1->setName("Hanzo");
        $hero1->setCategory($category2);

        $hero2=new Hero();
        $hero2->setName("Bastion");
        $hero2->setCategory($category2);

        $hero3=new Hero();
        $hero3->setName("D.Va");
        $hero3->setCategory($category4);
       
        $hero4=new Hero();
        $hero4->setName("Orisa");
        $hero4->setCategory($category4);
        
        $hero5=new Hero();
        $hero5->setName("Genji");
        $hero5->setCategory($category1);
        
        $hero6=new Hero();
        $hero6->setName("Doom Fist");
        $hero6->setCategory($category1);
        
        $hero7=new Hero();
        $hero7->setName("Ana");
        $hero7->setCategory($category3);

        $hero8=new Hero();
        $hero8->setName("Lucio");
        $hero8->setCategory($category3);

        $hero9=new Hero();
        $hero9->setName("Mercy");
        $hero9->setCategory($category3);
       
       $heroes = [$hero1,$hero2,$hero3,$hero4,$hero5,$hero6,$hero7,$hero8,$hero9];

       foreach ($heroes as $currentHero) {
           $em->persist($currentHero);
       }

        $em->flush();

        $output->writeln('<info>OK</info>');

        $user = new User();
        $user->setEmail('theophile.cibert@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'theo'));
        $user->setRoles(['ROLE_ADMIN']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('gautier.nicollet@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'gautier'));
        $user->setRoles(['ROLE_ADMIN']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('joueur.casu@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'lecasu'));
        $user->setRoles(['ROLE_USER']);
        $em->persist($user);


        $em->flush();
        $output->writeln('<info>Import users OK !</info>');
    }

   /* protected function importUsers($output)
    {
        $passwordEncoder = $this->getContainer()->get('security.password_encoder');
        
        $user = new User();
        $user->setEmail('theophile.cibert@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'theo'));
        $user->setRoles(['ROLE_ADMIN']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('gautier.nicollet@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'gautier'));
        $user->setRoles(['ROLE_ADMIN']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('joueur.casu@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'lecasu'));
        $user->setRoles(['ROLE_USER']);
        $em->persist($user);


        $em->flush();
        $output->writeln('<info>Import users OK !</info>');
    }*/

}
