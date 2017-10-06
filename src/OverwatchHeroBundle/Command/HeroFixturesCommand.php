<?php

namespace OverwatchHeroBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use OverwatchHeroBundle\Entity\Hero;
use OverwatchHeroBundle\Entity\Category;


class HeroFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Hero:fixtures')
            ->setDescription('Chargement du jeud\'essai')
           
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        $hero=new Hero();
        $hero->setName("Hanzo");
        $em->persist($hero);

        $hero=new Hero();
        $hero->setName("Bastion");
        $em->persist($hero);

        $hero=new Hero();
        $hero->setName("D.Va");
        $em->persist($hero);

        $hero=new Hero();
        $hero->setName("Orisa");
        $em->persist($hero);
        
        $hero=new Hero();
        $hero->setName("Genji");
        $em->persist($hero);
        
        $hero=new Hero();
        $hero->setName("Doom Fist");
        $em->persist($hero);

        $hero=new Hero();
        $hero->setName("Ana");
        $em->persist($hero);

        $hero=new Hero();
        $hero->setName("Lucio");
        $em->persist($hero);

        $category=new Category();
        $category->setCategoryName("Attaquants");
        $category->setHeroIds([6,5]);
        $em->persist($category);

        $category=new Category();
        $category->setCategoryName("Défenseurs");
        $category->setHeroIds([1,2]);
        $em->persist($category);


        $category=new Category();
        $category->setCategoryName("Soutiens");
        $category->setHeroIds([5,8]);
        $em->persist($category);

        $category=new Category();
        $category->setCategoryName("Tanks");
        $category->setHeroIds([3,4]);
        $em->persist($category);
        

        $em->flush();

        $output->writeln('<info>OK</info>');
    }

}
