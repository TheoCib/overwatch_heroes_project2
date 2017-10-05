<?php

namespace OverwatchHeroBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use OverwatchHeroBundle\Entity\Hero;


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
        $hero->setName("D.Va");
        $em->persist($hero);
        
        $hero=new Hero();
        $hero->setName("Genji");
        $em->persist($hero);
        
        $hero=new Hero();
        $hero->setName("Domm Fist");
        $em->persist($hero);

        $category=new Category();
        $category->setCategoryName("attaquants");
        $em->persist($category);
        

        $em->flush();

        $output->writeln('<info>OK</info>');
    }

}
